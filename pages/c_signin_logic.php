<?php 

require '../database.php';


if(isset($_POST['thi_account_signin'])) {

    $account_username_email = filter_var($_POST['thi_account_username_email'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $account_password =  filter_var($_POST['thi_account_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$account_username_email) {
        $_SESSION['thi_sign_in_account'] = "Registered account name or email is required";
    }

    elseif(!$account_password) {
        $_SESSION['thi_sign_in_account'] = "Registered password is required";
    }

    else {
        //fetch user from database

        $fetch_user_query = " SELECT * FROM timob_health_international_users_account WHERE account_name ='$account_username_email' OR account_email ='$account_username_email' ";

        $fetch_user_result = mysqli_query($connectDataBase,$fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1) {
            //convert record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['account_password'];
            //compare password with database password
            if(password_verify($account_password, $db_password)) {

                //set session for access control
                $_SESSION['user-id'] = $user_record['id'];
                //check if user is an admin or not and set the right session
                if($user_record['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] == true;
                }

                $_SESSION['c_success_message'] = "  sign in successful. "; 

                header('location:' . '../post/blogs/dashboard.php');

            }

            else {
                $_SESSION['thi_sign_in_account'] = "Please check your entries";
                header('location:'. 'thi_sign_in_account.php');
                die();
            }
        }

        else {
            $_SESSION['thi_sign_in_account'] = "User account not found";
        }
    }

    //if any problem, redirect back to signin page with details

    if(isset($_SESSION['thi_sign_in_account'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location:'.'thi_sign_in_account.php');
        die();
    }
}

else {
   header('location:' . 'thi_sign_in_account.php');
   die(); 
}