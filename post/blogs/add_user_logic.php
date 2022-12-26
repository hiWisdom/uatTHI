<?php

session_start();

require '../../database.php';


//get user form if submit button was clicked


if(isset($_POST['add_user_userdataSubmit'])) {


    $addUserName = filter_var($_POST['add_user_username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        
    $addUserTelephone = filter_var($_POST['add_user_telephone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
    $addUserEmail = filter_var($_POST['add_user_email'], FILTER_VALIDATE_EMAIL);

    
    $addUserPassword = filter_var($_POST['add_user_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
    $addUserConfirmPassword = filter_var($_POST['add_user_confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
    $addUserIsAdmin = filter_var($_POST['add_user_userRole'], FILTER_SANITIZE_SPECIAL_CHARS);

    
    $addUserPicture = $_FILES['add_user_userpicture'];



    if(!$addUserName) {
        $_SESSION['add_user'] = "Please enter your new user name.";
    }

          
    elseif(!$addUserTelephone) {
        $_SESSION['add_user'] = "Please enter new user telephone number.";
    }

    
    elseif(!$addUserEmail) {
        $_SESSION['add_user'] = "Please enter your email";
    }

    
    elseif(!$addUserPassword) {
        $_SESSION['add_user'] = "Please enter new user password and it must be above five(5) characters.";
    }

    
    elseif(strlen($addUserPassword) < 5 || strlen($addUserConfirmPassword) < 5 ) {
        $_SESSION['add_user'] = "Please re-enter and confirm new user passowrd and it must be above five(5) characters.";
    }

    elseif($addUserPassword !== $addUserConfirmPassword) {
        $_SESSION['add_user'] = "Password and confirm password must match and it must be above five(5) characters.";
    }

    elseif($addUserIsAdmin) {
        $_SESSION['add_user'] = "Please select the user role.";
    }

      
    else {

        $add_user_password_hashed = password_hash($addUserPassword, PASSWORD_DEFAULT);

        
                    //CHECK IF USERNAME OR EMAIL ALREADY EXIST IN THE DATABASE
                    
                    
                    
                    //select username and the email from database

                    
                    $user_check_query = " SELECT * FROM timob_health_international_users_account WHERE account_name ='$addUserName' OR account_email ='$addUserEmail' ";


                    //check and connect to database
                    $user_check_result = mysqli_query($connectDataBase, $user_check_query);

                    if(mysqli_num_rows($user_check_result) > 0) {
                        $_SESSION['add_user'] = "Username or Email already exist kindly use a different name and email address ";
                    }

                    else {

                        //WORK ON AVATER
                        //rename avater

                        $time = time(); //make each image name unique

                        $avatar_name = $time . $addUserPicture['name'];
                        $avatar_tmp_name = $addUserPicture['tmp_name'];
                        $avatar_destination_path = 'images/' .$avatar_name;
                        

                        //make sure file is an image
                        $allowed_files = ['PNG', 'jpg', 'jpeg'];
                        $extention = explode('.', $avatar_name);
                        $extention = end($extention);

                        if(in_array($extention, $allowed_files)) {
                            //make sure file is not too large(1mb+)
                            if(($addUserPicture[1] < 1000000)) {
                                //upload avatar
                                move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                            }

                            else {
                                $_SESSION['add_user'] = "Picture size too big. Should be less than 1 megabyte";
                            }
                        }

                        else {
                            $_SESSION['add_user'] = "Picture should be png, jpg, or jpeg format only.";
                        }
                    }
                     
               
            }

            // echo $userAccountName, $userAccountEmail, $userAccountPhone, $userAccountPassword, $userAccountConfirmPassword;

            // var_dump($userAccountPicture);

            //redirect to signup if they is any problem

            
            if(isset($_SESSION['add_user'])) {
                //pass form data back to signup page
                $_SESSION['signup-data'] = $_POST;
                header('location: ' . 'add_user.php');
                die();
            }


           
            else {

                //insert new user into users table
                $insert_user_query = "INSERT INTO timob_health_international_users_account(account_name, account_email, account_phone, account_password, user_picture, is_admin) VALUES ('$addUserName', '$addUserEmail', '$addUserTelephone', '$add_user_password_hashed', '$avatar_name', 0)";

                $insert_user_result = mysqli_query($connectDataBase, $insert_user_query);

                if(!mysqli_errno($connectDataBase)) {
                    //redirect to add user page with success message
                    $_SESSION['c_success_message'] = "New user $addUserName added successful. ";             
                    header('location: ' . 'add_user.php');
                    die();
                }
            }

             
        }

        else {
            //if button was not clicked then return to sign up page and die

            header('location: ' . 'add_user.php');
            die();
        }







