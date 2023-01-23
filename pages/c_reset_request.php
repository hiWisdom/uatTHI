<?php



if(isset($_POST["c_reset_request_password"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32); 


    $url =  "www.timobhealthinternational.org/pages/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

    $password_expires = date("U") + 1800; //set expiry date

    require '../database.php';

    $userEmail = $_POST["thi_reset_account_email"];

    $sql = "DELETE FROM password_reset WHERE password_reset_email=?";

    $stmt = mysqli_stmt_init($connectDataBase);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error1";
        exit();
    }

    else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO password_reset (password_reset_email, password_reset_selector, password_reset_token, password_reset_expires) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($connectDataBase);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error in reseting user password, please try again or send an email to akpotororodje@gmail.com";
        exit();
    }

    else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $password_expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    
    mysqli_close($connectDataBase);
            
            
            

    $to =  $userEmail; //mail receiver

    $subject = " Reset User Account Password for Timob Health International website social networking...";  //mail subject
    
    $headers = array( 
    
        "MIME-Version" => "1.0",
        
        "Content-Type" => "text/html; charset=UTF-8",
            
        "From"=> "Timob Health International Account Registration Desk <info@timobhealthinternational.org>",
        
        "BCC"=> "timobhealthinternational@gmail.com",
        
        "BCC"=> "akpotororodje@gmail.com"
    
    ); //mail header
    
    ob_start();
    
    include("../php/thi_mailing/Timob_Health_International_reset_user_password_Email_Template.php");
    
    $message =  ob_get_contents(); //mail body
    
    ob_get_clean();

    mail($to, $subject, $message, $headers); //send mail
    
    header("location:"."reset_user_password.php?reset=success");

}


else {
    header('location:'.'../index.php');
}