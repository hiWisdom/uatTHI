<!-- <?php

//Email Configuration

// $toEmail = '';
// $fromName = '';
// $formEmail = '';

// $postData = $statusMsg = $valErr = '';
// $status = 'error';


//if the form is submitted
// if(isset($_POST['submit'])) 
// {
//     //get the submitted form
//     $postData = $_POST;
//     $name = trim($_POST['c_contact_form_name']);
//     $telephone = trim($_POST['c_contact_form_tel']);
//     $emailAddress = trim($_POST['c_contact_form_email']);
//     $message = trim($_POST['c_contact_form_message']);


    //validate form fields
    // if(empty($name)) {
    //     $valErr .= 'Please enter your name.<br/>';
    // }

    // if(empty($telephone)) {
    //     $valErr .= 'Plese enter telephone number.<br/>';
    // }

    // if(empty($emailAddress) || filter_var($emailAddress, FILTER_VALIDATE_EMAIL) === false) {
    //     $valErr .= 'Please enter a valid email address.<br/>';
    // }

    // if(empty($message)) {
    //     $valErr .= 'Please enetr your message.<br/>';
    // }


    // if(empty($valErr)) {
    //     //send email notification to the site admin

        // $subject = 'New Message Notification';
        // $htmlContent = '
        
        //     <h2>Contact Request Details</h2>
        //     <p><b>Name: </b> ".$name." </p>
        //     <p><b>Telephone: </b> ".$telephone." </p>
        //     <p><b>Email Address: </b> ".$emailAddress." </p>
        //     <p><b>Message: </b> ".$message." </p>


        
        // ';





        //Always send content type when sending email
        // $headers = "MIME-Version 1.0" . "r/n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "r\n";

        //header from sender info

        
        // $headers .= 'From:' .$fromName.' <'.$formemail.'>' . "r\n";


        //Send Email
//         mail($toEmail, $subject, $htmlContent, $headers);

//         $status = 'success';
//         $statusMsg = 'Thank you! Your contact request was sent successfully, We will get back to you soon.';
//         $postData = '';
//     }

//     else {
//         $statusMsg = '<p>Please fill out all the mandatory fields:</p>' .trim($valErr, '<br/>');
//     }
// }


?> -->



<?php






?>









































































































































<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Contact us | Timob Health International | Hepatitis Corner | Outreach </title>
       <meta charset="UTF-8">
       <meta name="author" content="Timob Health International | Hepatitis Corner | Outreach"/>
       <meta http-equiv="Content-Type" content="text/php; charset=UTF-8" >
       <meta name="keywords" content="Timob Health International | Hepatitis Corner | Outreach">
       <meta name="description" content="Check out Timob Health International | Hepatitis Corner | Outreach here, health tips and healthy living. Infection prevention.">
       <meta name="robots" content="noindex, nofollow">
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="lp-version" content="v6.23.11">


        <!---stylesheet links-->
        <link rel="stylesheet" href="../css/pages_css/pages_main.css"/>
        <link rel="stylesheet" href="../css/pages_css/c_contact.css"/>
        <link rel="stylesheet" href="../css/main.css"/>
        <!-- <link rel="stylesheet" href="../css/font_css/fontawesome.css"/> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        

        <!---favicon-->
        <link rel="icon" type="image/x-icon" href="../pictures/testing picture/faviLogo.jpg">

        <!---js link-->
        <script src="//code.jivosite.com/widget/2umIxmovzj" async></script>

    </head>





    <body>

        <div class="overlay">


            <div class="spinner">
    
                <div class="c_page_loading_image">
                    <img src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                </div>
    
                <div class="c_page_loading_animation_container">
                    <ul class="c_page_loading_animation">
                        Website Loading 
                        <li></li>
                        <li></li>
                        <li></li>
                    
                    </ul>
    
                </div>
    
            </div>
    
    
    
        </div>
    
    
    
    
    
    
    
    
        <?php

          include '../header.php';

            
            if(isset($_POST['c_article_form_fullname']) && isset ($_POST['c_article_form_name']) && isset($_POST['c_article_form_tel']) && isset($_POST['c_article_form_email']) && isset($_POST['c_article_form_message'])) {



                $fullName = $_POST['c_article_form_fullname'];                
                $articleName = $_POST['c_article_form_name'];
                $telephone = $_POST['c_article_form_tel'];
                $emailaddress = $_POST['c_article_form_email'];
                $articlefeedback = $_POST['c_article_form_message'];

            $mailTo = "$emailaddress"; //Reciver Address
            
            $mailSubject = " $articleName"; //mail subject
            
            $mailHeaders = array( 
            
            "MIME-Version" => "1.0",
            
            "Content-Type" => "text/html; charset=UTF-8",
                
            "From"=> "Timob Health International <info@timobhealthinternational.org>",
            
            "BCC"=> "timobhealthinternational@gmail.com",
            
            "BCC"=> "akpotororodje@gmail.com"
            
            );
            
            ob_start();
            
            include("thi_mailing/Timob_Health_International_article_Email_Template.php");
            
            $mailMessage =  ob_get_contents(); //mail body
            
            ob_get_clean();
            
            mail($mailTo, $mailSubject, $mailMessage, $mailHeaders);

            $sql =  "INSERT INTO thi_article_feedback_db(fullname, name, telephone, emailaddress, articlefeedback) VALUES('$fullName', '$name', '$telephone','$emailaddress', '$articlefeedback')";
            
            $result = mysqli_query($connectDataBase, $sql);

            
            
            
            

 
                // header("<Location:/php/c_thi_user_contact_us_form_submit.php");
            }

        ?>


        <main>
            
            <div id="c_modal_container" class="c_modal_container">

                <div class="c_modal_content">

                    <span class="c_close_modal"> &times;</span>

                </div>

    
            </div>

            <div class="c_share_button_container">

                <div class="c_follow_button_list_container">

                    <p class="c_follow_button_title">Follow us:</p>

                    <a href="#" target="_blank" class="c_facebook_share_link c_social_icons_share_link">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="c_twitter_share_link c_social_icons_share_link">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="c_linkedin_share_link c_social_icons_share_link">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" target="_blank" class="c_whatsapp_share_link c_social_icons_share_link">
                        <i class="fa fa-whatsapp"></i>
                    </a>

                </div>

            </div>



            <div class="c_contact_form_submitted_info">
                
                <p>
                    Thank you for your feedback and suggestions, we very much apperciate it!<br>Best Wishes,<br>Timob Health International.
                </p>

                
                <a href="../index.php" style="color: blue;">Go back to home page</a>
                <br>
                <a href="../pages/thi_contact.php"  style="color: blue;">Go back to contact us page</a>
            </div>
    
                <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>

            
  
            

        </main>


        <?php

            include '../footer.php'

        ?>






        <!---javascript links-->
        <script src="../js/main.js"></script>
        <!-- <script src="../js/pages_js/pages_main.js"></script> -->


    </body>


</html>