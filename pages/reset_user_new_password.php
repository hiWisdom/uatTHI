<?php


if(isset($_POST["c_reset_new_password"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["thi_reset_account_password"];
    $passwordRepeat = $_POST["thi_repeat_reset_account_password"];


    if(empty($password) || empty($passwordRepeat)) {
        header("location:"."create-new-password.php?newpassword=empty");
        exit();
    }
    elseif( $password != $passwordRepeat) {
        header("location:"."create-new-password.php?newpassword=passwordnotsame");
        exit();
    }

    // $currentDate = date("U");

    require "../database.php";

    $sql = " SELECT * FROM password_reset WHERE password_reset_selector=? AND password_reset_expires >= ?";

    $stmt = mysqli_stmt_init($connectDataBase);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error1";
        exit();
    }

    else {
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(!$row = mysqli_fetch_assoc($result)) {
            echo " you need to re-submit your script request1";
            exit();
        }
        else {
            $tokenBin = hex2bin($validator);

            $tokenCheck = password_verify($tokenBin, $row["password_reset_token"]);

            if($tokenCheck === false) {
                echo " You need to re--submit your reset request.";
                exit();
            }

            elseif ($tokenCheck === true) {

                $tokenEmail = $row["password_reset_email"];

                $sql = " SELECT * FROM timob_health_international_users_account WHERE account_email=?; ";

                $stmt = mysqli_stmt_init($connectDataBase);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error2";
                    exit();
                }
            
                else {
                    // $hashedToken = password_hash($token, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmai);
                    mysqli_stmt_execute($stmt);
                    
                    $result = mysqli_stmt_get_result($stmt);

                    if(!$row = mysqli_fetch_assoc($result)) {
                        echo " There was an error3!";
                        exit();
                    }
                    else {
                        $sql = "UPDATE timob_health_international_users_account SET account_password=? WHERE account_email=?"; 
                        $stmt = mysqli_stmt_init($connectDataBase);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error4";
                    exit();
                }
            
                else {
                    $newhashedToken = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $newhashedToken, $tokenEmai);
                    mysqli_stmt_execute($stmt);

                    $sql = " DELETE FROM password_reset WHERE password_reset_email=?";
                    $stmt = mysqli_stmt_init($connectDataBase);
                    
                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                            echo " There was an error5";
                            exit();
                        }

                        else {
                         mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                         mysqli_stmt_execute($stmt);
                         header("location:"."thi_sign_in_account?newpassword=passwordupdated");   
                        }
                    }

            }
        }
    }

}


    }

    
    
}
















else {
    header("location:" . "../index.php");
    die();
}