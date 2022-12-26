<?php



require '../../database.php';


if(isset($_POST['edit_user_updatedata'])) {

    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $accountName = filter_var($_POST['account_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $accountEmail = filter_var($_POST['account_email'], FILTER_VALIDATE_EMAIL);
    $accountPhoneNumber = filter_var($_POST['account_phone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $isAdmin = filter_var($_POST['edit_user_userRole'], FILTER_SANITIZE_NUMBER_INT);



    //check for valid input

    if(!$accountName || !$accountEmail || !$accountPhoneNumber || !$isAdmin) {
        $_SESSION['edit_user'] = "Invalid form input on edit page.";
    
    }

    else {
        $query = " UPDATE timob_health_international_users_account SET account_name = '$accountName', account_email = '$accountEmail', account_phone = '$accountPhoneNumber', is_admin = '$isAdmin' WHERE id=$id LIMIT 1";

        $result = mysqli_query($connectDataBase, $query);

        if(mysqli_errno($connectDataBase)) {
            $_SESSION['edit_user'] = "Failed to update";
        }

        else {
            $_SESSION['c_success_message'] = "User $accountName || $accountEmail || $accountPhoneNumber || $addUserIsAdmin updated successfully.";
    
        }
    }

}
    


    header('location: ' . 'edit_user.php');
    die();







