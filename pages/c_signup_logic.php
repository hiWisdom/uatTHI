<?php


        session_start();

        require '../database.php';



        /////CREATE WEBSITE USER ACCOUNT ON FORM BUTTON CLICKED///////////////////////////////// using php and mysql database


        if(isset($_POST['create_user_account_submit'])) {

            $userAccountName = filter_var($_POST['user_accountName'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            $userAccountEmail = filter_var($_POST['user_accountEmail'], FILTER_VALIDATE_EMAIL);
            
            $userAccountPhone = filter_var($_POST['user_accountPhone'], 
            FILTER_SANITIZE_SPECIAL_CHARS);
            
            $userAccountPassword = filter_var($_POST['user_accountPassword'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            $userAccountConfirmPassword = filter_var($_POST['user_accountConfirmPassword'], FILTER_SANITIZE_SPECIAL_CHARS);
            
            $userAccountPicture = $_FILES['user_accountPicture'];


            //validate create user account input values
            if(!$userAccountName) {
                $_SESSION['thi_create_an_account'] = "Please enter your account name";
            }

            elseif(!$userAccountEmail) {
                $_SESSION['thi_create_an_account'] = "Please enter your email address";
            }

            elseif(!$userAccountPhone) {
                $_SESSION['thi_create_an_account'] = "Please enter your phone number";
            }

            elseif(strlen($userAccountPassword) < 5 || strlen($userAccountConfirmPassword) < 5 ) {
                $_SESSION['thi_create_an_account'] = "Password can't be empty and must be above five(5) characters.";
            }

            elseif(!$userAccountConfirmPassword) {
                $_SESSION['thi_create_an_account'] = "Confirm Password can't be empty and must be above five(5) characters.";
            }

            //check if password don't match
            elseif($userAccountPassword !== $userAccountConfirmPassword) {
                $_SESSION['thi_create_an_account'] = "Password and confirm password must match.";
            }

            // elseif(!$userAccountPicture['name']) {
            //     $_SESSION['thi_create_an_account'] = "Please select an image";
            // }

            else {
                // //check if password don't match
                // if($userAccountPassword !== $userAccountConfirmPassword) {
                //     $_SESSION['thi_create_an_account'] = "Password and confirm password must match.";
                // }


                    //hash password
                    $hashed_password = password_hash($userAccountPassword, PASSWORD_DEFAULT);

                    // echo $userAccountPassword. '<br/>';
                    // echo $hashed_password;


                    //CHECK IF USERNAME OR EMAIL ALREADY EXIST IN THE DATABASE
                    
                    
                    
                    //select username and the email from database

                    
                    $user_check_query = " SELECT * FROM timob_health_international_users_account WHERE account_name ='$userAccountName' OR account_email ='$userAccountEmail' ";


                    //check and connect to database
                    $user_check_result = mysqli_query($connectDataBase, $user_check_query);

                    if(mysqli_num_rows($user_check_result) > 0) {
                        $_SESSION['thi_create_an_account'] = "Username or Email already exist kindly use a different name and email address ";
                    }

                    // else {

                    //     //WORK ON AVATER
                    //     //rename avater

                    //     $time = time(); //make each image name unique

                    //     $avatar_name = $time . $userAccountPicture['name'];
                    //     $avatar_tmp_name = $userAccountPicture['tmp_name'];
                    //     $avatar_destination_path = '../post/blogs/images/' .$avatar_name;
                        

                    //     //make sure file is an image
                    //     $allowed_files = ['PNG', 'jpg', 'jpeg'];
                    //     $extention = explode('.', $avatar_name);
                    //     $extention = end($extention);

                    //     if(in_array($extention, $allowed_files)) {
                    //         //make sure file is not too large(1mb+)
                    //         if(!empty ($avatar_name[1] < 1000000)) {
                    //             //upload avatar
                    //             move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    //         }

                    //         else {
                    //             $_SESSION['thi_create_an_account'] = "Picture size too big. Should be less than 1 megabyte";
                    //         }
                    //     }

                    //     else {
                    //         $_SESSION['thi_create_an_account'] = "Picture should be png, jpg, or jpeg format only.";
                    //     }
                    // }
                     
               
            }

            // echo $userAccountName, $userAccountEmail, $userAccountPhone, $userAccountPassword, $userAccountConfirmPassword;

            // var_dump($userAccountPicture);

            //redirect to signup if they is any problem

            
            if(isset($_SESSION['thi_create_an_account'])) {
                //pass form data back to signup page
                $_SESSION['signup-data'] = $_POST;
                header('location: ' . 'thi_create_an_account.php');
                die();
            }


           
            else {
                
            $mailTo = "$userAccountEmail"; //Reciver Address
            
            $mailSubject = " User Account created successfully for Timob Health International website social networking...";  //mail subject
            
            $mailHeaders = array( 
            
            "MIME-Version" => "1.0",
            
            "Content-Type" => "text/html; charset=UTF-8",
                
            "From"=> "Timob Health International Account Registration Desk <info@timobhealthinternational.org>",
            
            "BCC"=> "timobhealthinternational@gmail.com",
            
            "BCC"=> "akpotororodje@gmail.com"
            
            );
            
            ob_start();
            
            include("../php/thi_mailing/Timob_Health_International_sign_up_Email_Template.php");
            
            $mailMessage =  ob_get_contents(); //mail body
            
            ob_get_clean();
            
            mail($mailTo, $mailSubject, $mailMessage, $mailHeaders);
            

                //insert new user into users table
                $insert_user_query = "INSERT INTO timob_health_international_users_account(account_name, account_email, account_phone, account_password, user_picture, is_admin) VALUES ('$userAccountName', '$userAccountEmail', '$userAccountPhone', '$hashed_password', '$avatar_name', 0)";

                $insert_user_result = mysqli_query($connectDataBase, $insert_user_query);

                if(!mysqli_errno($connectDataBase)) {
                    //redirect to login page with success message
                    $_SESSION['c_success_message'] = "$userAccountName registration successful. Please log in";             
                    header('location: ' . 'thi_sign_in_account.php');
                    die();
                }
            }

             
        }

        else {
            //if button was not clicked then return to sign up page and die

            header('location: ' . 'thi_create_an_account.php');
            die();
        }




















?>