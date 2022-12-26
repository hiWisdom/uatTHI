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


include '../database.php';

if(isset($_POST['c_contact_form_name']) && isset($_POST['c_contact_form_tel']) && isset($_POST['c_contact_form_email']) && isset($_POST['c_contact_form_message'])) {


    $name = $_POST['c_contact_form_name'];
    $telephone = $_POST['c_contact_form_tel'];
    $emailaddress = $_POST['c_contact_form_email'];
    $contactmessage = $_POST['c_contact_form_message'];

    $to = "akpotororodje@gmail.com";
    $subject = "Lets take care of you because we care!";
    $text = "Name = ".$name. "\r\n Email = ".$emailaddress. "\r\n Message = ". $contactmessage. "\r\n Telephone = ". $telephone;
    $headers = "From: noreply@timobhealthinternational.org" . "\r\n" . "CC : somebody@example.com";

    if($emailaddress!=NULL) {
        mail($to, $subject, $text, $headers);
    }


    $sql = "INSERT INTO contact_us_db(name, telephone, emailaddress, contactmessage) VALUES(?, ?, ?, ?)";
    $newJoin = $connectDataBase->prepare($sql);
    $newJoin->execute([$name, $telephone, $emailaddress, $contactmessage]);

        
    // header("<Location:/php/c_thi_user_contact_us_form_submit.php");
}



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
    
    
    
    
    
    
    
    
        <header>


            <div class="c_header_contact">

                <div class="c_header_contact_alignment">
                
                    <div class="c_header_paragraphcontact_alignment">

                        <p class="c_browser_verification"></p>
                        
                        <div class="c_header_contact_container c_header_contact_container_A">
                            <div class="c_header_contact_items c_header_contact_container_A_items c_header_contact_A_item">
                                <i class="fa fa-map-marker c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_A"></i>
                            </div>
                            
                            <div class="c_header_contact_items c_header_contact_container_A_items c_header_contact_B_item">
                                <p>Timob Health International , NO_10, Odelola Street Kilo G82X+4QP, Surulere 101241, Lagos</p>
                            </div>   
                        </div>

                        <div class="c_header_contact_container c_header_contact_container_B">
                            <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_C_item">
                                <i class="fa fa-phone c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_B"></i>
                            </div>
                            
                            <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_D_item">
                                <p>Any question: <a class="c_contact_href_header" href="tel:+234 803 576 8694">+234 803 576 8694</a></p>
                            </div>   
                        </div>

                        <div class="c_header_contact_container c_header_contact_container_C">
                            <div class="c_header_contact_items c_header_contact_container_C_items c_header_contact_E_item">
                                <i class="fa fa-clock-o c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_C"></i>
                            </div>
                            
                            <div class="c_header_contact_items c_header_contact_container_C_items c_header_contact_F_item">
                                <p>Mon - Sun:   24 Hours</p>
                            </div>   
                        </div>

                    </div> 
                
                </div>

            </div>

            <div class="c_header_navbar">


                <div class="c_menu_header">

                    <a class="c_menu_header_image_link" href="../index.php">
                        <img class="c_menu_header_image_logo" src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                    </a>
                    
                </div>

                
                
                <input type="checkbox" id="checkbox"/>
                <label for="checkbox" class="c_checkbox">Menu
                    <!-- <i class="fa fa-bars checkbotton"></i> -->
                        <div class="c_menu_shortcut_icon_container">
                            <div class="c_bar1"></div>
                            <div class="c_bar2"></div>
                            <div class="c_bar3"></div>
                        </div>
                </label> 
        
                <ul class="c_menu_options">
        
                    <div class="c_shortcut_menu_header_container">

                        <input type="checkbox" id="checkbox"/>
                        <label for="checkbox" class="c_checkbox c_checkbox_close">Close
                                <div class="c_menu_shortcut_icon_container c_menu_shortcut_icon_container_close">
                                    <div class="c_bar1"></div>
                                    <div class="c_bar2"></div>
                                    <div class="c_bar3"></div>
                                </div>
                        </label>
    
                        <div class="c_menu_header c_menu_header_shortcut_menu">
    
                            <a class="c_menu_header_image_link" href="../index.php">
                                <img class="c_menu_header_image_logo" src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                            </a>
                            
                        </div>

                    </div>


                    <div class="c_menu_options_container" id="c_desktop_options_container">


                        <div class="c_dropdown">
                            <li class="c_menu_list c_menu_accordion active"><a class="c_menu_options_items c_menu_options_home" href="../index.php"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                    <ul class="c_menu_acordion_panel_list">
                                        <li class="c_menu_acordion_panel_list_details"><a href="../index.php"> <i class="	fa fa-home"></i> Home</a></li>
                                    </ul>
                            </div>
                        </div>

                        <div class="c_dropdown">

                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="../#c_blog"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                    <ul class="c_menu_acordion_panel_list">
                                        <li class="c_menu_acordion_panel_list_details"><a href="../#c_Medical_Articles"> <i class="fa fa-newspaper-o"></i> Medical Articles</a></li>
                                        <li class="c_menu_acordion_panel_list_details"><a href="../#c_blog"> <i class="fa fa-newspaper-o"></i> Medical Blogs</a></li>
                                        <li class="c_menu_acordion_panel_list_details"><a href="../#c_main_0_A_A"> <i class="fa fa-newspaper-o"></i> Medical Health Show</a></li>
                                    </ul>
                            </div>

                        </div>



                        <div class="c_dropdown">

                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="../pages/thi_contact.php"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
    
                                        <ul class="c_menu_acordion_panel_list">
                                            <li class="c_menu_acordion_panel_list_details"><a href="../#c_footer_five"> <i class="fa fa-info-circle"></i> Quick Contacts</a></li>
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_contact.php"> <i class="fa fa-address-book-o"></i> Contact us</a></li>
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_about.php"> <i class="fa fa-group"></i> About us</a></li>
                                        </ul>
                            </div>

                        </div>



                        <div class="c_dropdown">

                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_contact" href="../pages/thi_medical_specialty.php"><p>Medical Specialties <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p></a></li>
                            <div class="c_menu_acordion_panel">
                                        <ul class="c_menu_acordion_panel_list">
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Gastroenterologist_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Gastroenterology</span></a></li>

                                                
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Geriatric_medicine_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Geriatric medicine</span></a></li>

                                                
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Hematology_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Hematology</span></a></li>

                                                    
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Infectious_disease_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Infectious</span></a></li>

                                                    
                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Nephrology_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Nephrology</span></a></li>

                                                <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Neurology_content"> <span class="c_footer_five_container_paragraph_one">
                                                    <i class="fa fa-hospital-o"></i>  Neurology</span></a></li>

                                                    
                                                <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Pediatrics_content"> <span class="c_footer_five_container_paragraph_one">
                                                    <i class="fa fa-hospital-o"></i>  Pediatrics</span></a></li>


                                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Palliative_care_content"> <span class="c_footer_five_container_paragraph_one">
                                                        <i class="fa fa-hospital-o"></i>  Palliative</span></a></li>


                                                        <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Pulmonology_content"> <span class="c_footer_five_container_paragraph_one">
                                                            <i class="fa fa-hospital-o"></i>  Pulmonology</span></a></li>

                                                    
                                                            <li class="c_menu_acordion_panel_list_details">
                                                                <a href="../pages/thi_medical_specialty.php#Different_Medical_Specialists_Do"> <i class="fa fa-files-o"></i> More </a>

                                                            </li>
                                                    
                                        </ul>
                            </div>

                        </div>


                        <div class="c_search_container">

                            <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><p>Search</p><i class="fa fa-search"></i></button>
                            </form>

                        </div>

                        <div class="c_shortcut_menu_footer_container">

                            <div class="c_header_footer_image_logo_container">
                                <p class="c_header_footer_image_logo">
                                    <img src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                                </p>
                            </div>

                            <p class="c_menu_options_shortcut_signature">
                                &copy 2013 - 2022 <a href="../index.php">Timob Health International</a> All right reserved <a href="">Terms of use</a>. See additional information. You can <a href="">contact us</a> and also see more information <a href="">about us</a> and our <a href="">medical specialies</a>.
                            </p>
                        </div>

                    </div>

                    <div class="c_menu_options_container" id="c_mobile_options_container">




                        <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                        <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="../index.php"> <i class="	fa fa-home"></i> Home</a></li>
                            </ul>
                        </div>


                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="../#c_Medical_Articles"> <i class="fa fa-newspaper-o"></i> Medical Articles</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="../#c_blog"> <i class="fa fa-newspaper-o"></i> Medical Blogs</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="../#c_main_0_A_A"> <i class="fa fa-newspaper-o"></i> Medical Health Show</a></li>
                                </ul>
                            </div>

                    





                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="javascript:void(0)"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>

                            <div class="c_menu_acordion_panel">
    
                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="#c_footer_five"> <i class="fa fa-info-circle"></i> Quick Contacts</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_contact.php"> <i class="fa fa-address-book-o"></i> Contact us</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_about.php"> <i class="fa fa-group"></i> About us</a></li>
                                </ul>
                            </div>





                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_contact" href="javascript:void(0)"><p>Medical Specialties <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p></a></li>
                            <div class="c_menu_acordion_panel">
                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Gastroenterologist_content"> <span class="c_footer_five_container_paragraph_one">
                                        <i class="fa fa-hospital-o"></i>  Gastroenterology</span></a></li>

                                        
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Geriatric_medicine_content"> <span class="c_footer_five_container_paragraph_one">
                                        <i class="fa fa-hospital-o"></i>  Geriatric medicine</span></a></li>

                                        
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Hematology_content"> <span class="c_footer_five_container_paragraph_one">
                                        <i class="fa fa-hospital-o"></i>  Hematology</span></a></li>

                                            
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Infectious_disease_content"> <span class="c_footer_five_container_paragraph_one">
                                        <i class="fa fa-hospital-o"></i>  Infectious</span></a></li>

                                            
                                    <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Nephrology_content"> <span class="c_footer_five_container_paragraph_one">
                                        <i class="fa fa-hospital-o"></i>  Nephrology</span></a></li>

                                        <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Neurology_content"> <span class="c_footer_five_container_paragraph_one">
                                            <i class="fa fa-hospital-o"></i>  Neurology</span></a></li>

                                            
                                        <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Pediatrics_content"> <span class="c_footer_five_container_paragraph_one">
                                            <i class="fa fa-hospital-o"></i>  Pediatrics</span></a></li>


                                            <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Palliative_care_content"> <span class="c_footer_five_container_paragraph_one">
                                                <i class="fa fa-hospital-o"></i>  Palliative</span></a></li>


                                                <li class="c_menu_acordion_panel_list_details"><a href="../pages/thi_medical_specialty.php#Pulmonology_content"> <span class="c_footer_five_container_paragraph_one">
                                                    <i class="fa fa-hospital-o"></i>  Pulmonology</span></a></li>

                                            
                                                    <li class="c_menu_acordion_panel_list_details">
                                                        <a href="../pages/thi_medical_specialty.php#Different_Medical_Specialists_Do"> <i class="fa fa-files-o"></i> More </a>

                                                    </li>
                                            
                                </ul>
                            </div>

                

                        <div class="c_search_container">

                            <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><p>Search</p><i class="fa fa-search"></i></button>
                            </form>

                        </div>

                        <div class="c_shortcut_menu_footer_container">

                            <div class="c_header_footer_image_logo_container">
                                <p class="c_header_footer_image_logo">
                                    <img src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                                </p>
                            </div>

                            <p class="c_menu_options_shortcut_signature">
                                &copy 2013 - 2022 <a href="index.php">Timob Health International</a> All right reserved <a href="../pages/thi_Personal_data_protection_policy.php">Terms of use</a>. See additional information. You can <a href="../pages/thi_contact.php">contact us</a> and also see more information <a href="../pages/thi_about.php">about us</a> and our <a href="../pages/thi_medical_specialty.php">medical specialies</a>.
                            </p>
                        </div>

                    </div>
                    
                </ul>

        
            </div>
                

        </header>


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
                    Thank you for contacting us, we will respond to you immediatly we see your message<br>Best Wishes,<br>Timob Health International.
                </p>

                
                <a href="../index.php" style="color: blue;">Go back to home page</a>
                <br>
                <a href="../pages/thi_contact.php"  style="color: blue;">Go back to contact us page</a>
            </div>
    
                <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>

            
  
            

        </main>


        <footer>

            <div class="c_footer_container">

                <div class="c_footer c_footer_one" id="c_about_us">

                    <div class="c_footer_image_logo_container">
                        <p class="c_footer_image_logo">
                            <img src="../pictures/testing picture/THI Jpeg 1.jpg"/>
                        </p>
                    </div>
            
                    <div class="c_footer_content_text_container">    
                        <p class="c_footer_paragraph c_footer_paragraph_for_one">
                            Your health is as important to us as it is to you.<br> Let’s take care of you because We Care.
                        </p>
                    </div>
            
                </div>
            
            
            
                <div class="c_footer c_footer_two"> 
                           
            
                    <div class="c_footer_two_contain c_footer_two_1">
                        
                        <ul class="c_footer_two_content_list">

                            <h5 class="c_more_content c_more_content_A">
                                <i class="fa fa-newspaper-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_related_articles"></i>POPULAR ARTICLES</h5>

                                <a class="c_footer_two_content_hyperlink" href="../post/related_articles/c_popular_articles.php#c_popular_articles_one">
                                    <li class="c_footer_two_content_list_items c_footer_RELATED_ARTICLES">
                                        <img src="../pictures/testing picture/background_images/Woman-performing-yoga-square-medium.jpg" class="c_related_articles">
                                            <p class="c_related_articles_paragraph">
                                                Woman performing yoga square medium 
                                                <span>...</span> <br> <a href="../post/related_articles/c_popular_articles.php#c_popular_articles_one">Read more</a>
                                            </p>
                                    </li>
                                </a>


                                <a class="c_footer_two_content_hyperlink" href="../post/related_articles/c_popular_articles.php#c_popular_articles_two">
                                    <li class="c_footer_two_content_list_items c_footer_RELATED_ARTICLES">
                                        <img src="../pictures/testing picture/background_images/Happy-family-going-for-picnic-947036638_3869x2579-1-1024x683.jpg" class="c_related_articles">
                                            <p class="c_related_articles_paragraph">
                                                Happy family going for picnic  Happy family going for picnic 
                                                <span>...</span> <br> <a href="../post/related_articles/c_popular_articles.php#c_popular_articles_one">Read more</a>
                                            </p>
                                    </li>
                                </a>


                                <a class="c_footer_two_content_hyperlink" href="../post/related_articles/c_popular_articles.php#c_popular_articles_three">
                                    <li class="c_footer_two_content_list_items c_footer_RELATED_ARTICLES">
                                        <img src="../pictures/testing picture/background_images/Woman-performing-yoga-square-medium.jpg" class="c_related_articles">
                                            <p class="c_related_articles_paragraph">
                                                Woman performing yoga square medium 
                                                <span>...</span> <br> <a href="../post/related_articles/c_popular_articles.php#c_popular_articles_one">Read more</a>
                                            </p>
                                    </li>
                                </a>


                                <a class="c_footer_two_content_hyperlink" href="../post/related_articles/c_popular_articles.php#c_popular_articles_four">
                                    <li class="c_footer_two_content_list_items c_footer_RELATED_ARTICLES">
                                        <img src="../pictures/testing picture/background_images/Happy-family-going-for-picnic-947036638_3869x2579-1-1024x683.jpg" class="c_related_articles">
                                            <p class="c_related_articles_paragraph">
                                                Happy family going for picnic  Happy family going for picnic  Happy family going for picnic 
                                                <span>...</span> <br> <a href="../post/related_articles/c_popular_articles.php#c_popular_articles_one">Read more</a>
                                            </p>
                                    </li>
                                </a>
                            
                        </ul>
            
            
                    </div>
            
                    <div class="c_footer_two_contain c_footer_two_2">

                        <ul class="c_footer_two_content_list">
                        <h5 class="c_more_content c_more_content_B"><i class="fa fa-chain c_icon_general_styling c_icon_footer_five_general_styling c_icon_quick_link"></i>QUICK LINKS</h5>
                        <a href="../pages/thi_our_story.php#health_plans_page"><li class="c_footer_two_content_list_items">Health Plans Page</li></a>
                        <a href="../pages/thi_our_story.php#outreach"><li class="c_footer_two_content_list_items">Outreach</li></a>
                        <a href="../pages/thi_our_story.php#self_and_family_health_planing"><li class="c_footer_two_content_list_items">Self and Family Health Planing</li></a>
                        <a href="../pages/thi_our_story.php#health_consultant_in_nigeria"><li class="c_footer_two_content_list_items">Health consultant in Nigeria</li></a>
                        <a href="../pages/thi_our_story.php#health_references"><li class="c_footer_two_content_list_items">Health references</li></a>
                        <a href="../pages/thi_our_story.php#health_wellness"><li class="c_footer_two_content_list_items">Health Wellness</li></a>
                        <a href="../pages/thi_our_story.php#hepatitis"><li class="c_footer_two_content_list_items">Hepatitis</li></a>
                        </ul>

                    </div>
            
                    <div class="c_footer_two_contain c_footer_two_3">

                        <ul class="c_footer_two_content_list">
                            <h5 class="c_more_content c_more_content_C">
                                <i class="fa fa-address-card-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_about_us"></i>ABOUT US</h5>
                        <a href="../pages/thi_contact.php"><li class="c_footer_two_content_list_items">Contact Us</li></a>
                        <a href="../pages/thi_Privacy_preferences.php"><li class="c_footer_two_content_list_items">Privacy Policy</li></a>
                        <a href="../pages/thi_Personal_data_protection_policy.php"><li class="c_footer_two_content_list_items">Terms of Use</li></a>
                        <a href="../pages/thi_create_an_account.php"><li class="c_footer_two_content_list_items">Create an account</li></a>
                        <a href="../pages/thi_our_story.php"><li class="c_footer_two_content_list_items">Our Health Care story</li></a>
                        </ul>

                    </div>
            
                    <div class="c_footer_two_contain c_footer_two_4">

                        <ul class="c_footer_two_content_list">
                            
                        <h5 class="c_more_content c_more_content_D"><i class="fas fa-hand-holding-medical c_icon_general_styling c_icon_footer_five_general_styling c_icon_related_articles"></i>MEDICAL SPECIALTY</h5>
                        <a href="../pages/thi_medical_specialty.php#Gastroenterologist_content"><li class="c_footer_two_content_list_items">Gastroenterology</li></a>
                        <a href="../pages/thi_medical_specialty.php#Geriatric_medicine_content"><li class="c_footer_two_content_list_items">Geriatric medicine</li></a>
                        <a href="../pages/thi_medical_specialty.php#Hematology_content"><li class="c_footer_two_content_list_items">Hematology</li></a>
                        <a href="../pages/thi_medical_specialty.php#Infectious_disease_content"><li class="c_footer_two_content_list_items">Infectious disease</li></a>
                        <a href="../pages/thi_medical_specialty.php#Nephrology_content"><li class="c_footer_two_content_list_items">Nephrology</li></a>
                        <a href="../pages/thi_medical_specialty.php#Neurology_content"><li class="c_footer_two_content_list_items">Neurology</li></a>
                        <a href="../pages/thi_medical_specialty.php#Pediatrics_content"><li class="c_footer_two_content_list_items">Pediatrics</li></a>
                        <a href="../pages/thi_medical_specialty.php#Palliative_care_content"><li class="c_footer_two_content_list_items">Palliative care</li></a>
                        <a href="../pages/thi_medical_specialty.php#Pulmonology_content"><li class="c_footer_two_content_list_items">Pulmonology</li></a>
                        <a href="../pages/thi_medical_specialty.php#Different_Medical_Specialists_Do"><li class="c_footer_two_content_list_items">More</li></a>
                        
                        </ul>

                    </div>

            
                </div>
            
            
            
                <div class="c_footer c_footer_three">
                
                    <div class="c_contact_map">
        
                        <p class="c_contact_map_text_container">
                            <span class="c_contact_map_text c_contact_map_text_A"> 
                                <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling c_icon_map_location"></i> Locate us </span> <span class="c_contact_map_text c_contact_map_text_B">at</span> <span class="c_contact_map_text c_contact_map_text_C"> 10, Odelola Street Kilo G82X+4QP, Surulere  101241,  Lagos </span> <span class="c_contact_map_text c_contact_map_text_D">|</span> 
                        </p>
        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63427.97620267909!2d3.3087804184700915!3d6.490184080418627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c0f7bc8de87%3A0x62650fcb3d2c8fb1!2sSurulere%2C%20101241%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1663881357757!5m2!1sen!2sng" >
        
                        </iframe>
            
                    </div>
            
                    <div class="c_Subscribe_form">
            
            
                        <div class="c_subscribe_form_container">
            
                            <div class="c_landing_page_subscribe_form">
                            
                                <form method="post" action="#" class="c_subscribe_form_process c_subscribe_main_form" id="c_subscribe_form_process">
            
                                    <div class="c_subscribe_title_container">
                                        <p class="c_subscribe_title_inner_text">Your health is as important to us as it is to you, Let’s take care of you because We Care.</p>
                                        <h2 class="c_Subscribe_to_our_Newsletter">
                                            <i class="fa fa-envelope-open-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_Subscribe_to_our_Newsletter"></i><br>Subscribe to our Newsletter</h2>
                                    </div>
            
                                    <input type="text" value="" placeholder="Name" name="name" class="c_subscribe_input_types" required>
                                    <input type="text" value="" placeholder="Email address" class="c_subscribe_input_types" name="mail" required>
            
                                    <label class="c_subscribe_Daily_Newsletter">
                                        <input type="checkbox" checked="checked" name="subscribe"> <span class="c_subscribe_Daily_Newsletter_text">Daily Newsletter</span> 
                                        <!-- <br>
                                        <input type="checkbox" checked="checked" name="subscribe"> <span class="c_subscribe_Daily_Newsletter_text">Weekly Newsletter</span> 
                                        <br>
                                        <input type="checkbox" checked="checked" name="subscribe"> <span class="c_subscribe_Daily_Newsletter_text">Monthly Newsletter</span>
                                        <br>
                                        <input type="checkbox" checked="checked" name="subscribe"> <span class="c_subscribe_Daily_Newsletter_text">Yearly Newsletter</span> -->
                                    </label>
                                
                                    <div class="c_Subscribe_button_container">
                                    <input type="submit" value="Subscribe" class="c_Subscribe_submit_button">
                                    </div>
                                </form>
            
                            </div>
            
                        </div>
            
            
                    </div>
            
                </div>
        
        
            
                <div class="c_footer c_footer_five" id="c_footer_five">
                    
                    <div class="c_footer_five_container">
            
            
                            <div class="c_footer_five_container_one_A">

                                <span  class="c_footer_five_container_paragraph_one c_footer_five_container_paragraph_one_light">Find us 24/7</span> 
                                <br><br> 
                                <span class="c_footer_five_container_paragraph_one">
                                    <p class="c_contact_href">
                                        <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling"></i><b> Head Office:</b> 10, Odelola Street, Off nnobi Surulere Lagos.
                                        <br><br>
                                        <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling"></i> <b>Branch Office:</b> 3, Oludele fakunle Street, Sawmill, Ifako, Gbagada Lagos.<br>
                                    
                                    </p>
                                </span>
                                
                            </div> 
    

                            <div class="c_footer_five_container_one_B">

                                <span  class="c_footer_five_container_paragraph_one c_footer_five_container_paragraph_one_light">Enquires 24/7:</span> 
                                <br><br> 
                                <span class="c_footer_five_container_paragraph_one">
                                    
                                <i class="fa fa-mobile-phone c_icon_general_styling c_icon_footer_five_general_styling"></i>  Health Support: <a class="c_contact_href" href="tel:+234 808 806 8257">+234 808 806 8257</a></span>
                                <br><br>
                                <span class="c_footer_five_container_paragraph_one"><i class="fa fa-gears c_icon_general_styling c_icon_footer_five_general_styling"></i>  Information Center: <a class="c_contact_href" href="tel:+234 815 399 5516">+234 815 399 5516</a></span> 
                                <br><br>
                                <span class="c_footer_five_container_paragraph_one"> 
                                    <i class="fa fa-envelope-square c_icon_general_styling c_icon_footer_five_general_styling"></i> <a class="c_contact_href" href="mailto:timobhealthinternational@gmail.com">timobhealthinternational@gmail.com</a></span>
                                    <br><br>
                                <span class="c_footer_five_container_paragraph_one"> 
                                    <i class="fa fa-envelope-square c_icon_general_styling c_icon_footer_five_general_styling"></i> <a class="c_contact_href" href="mailto:timobhealthinternational@gmail.com">info@timobhealthinternational.org</a></span>
            
                            </div>

                            <div class="c_footer_five_container_one_C">
            
                                <div class="c_footer_five_container_one_B_content_A c_footer_five_container_one_B_content">

                                    <p class="c_footer_navbar_text c_website_signature c_website_signature_socialMedia">
        
                                        <a class="c_footer_navbar_text" onclick="javascriptVoid()" >Follow us </a>
        
                                        <section class="c_social_media_link_section">
                                        <i class="fa fa-facebook-official c_fa_social_icons"></i><a class="c_footer_navbar_text c_footer_social_links" href="https://www.facebook.com/toyin.asaolu.1/">Facebook</a> 
                                        </section>
        
                                        
        
                                        <section class="c_social_media_link_section">
                                        <i class="fa fa-instagram c_fa_social_icons"></i><a class="c_footer_navbar_text c_footer_social_links" href="https://www.instagram.com/hepatitiscorner/">Instagram</a> 
                                        </section>
        
                                    
        
                                        <section class="c_social_media_link_section">
                                        <i class="fa fa-whatsapp c_fa_social_icons"></i><a class="c_footer_navbar_text c_footer_social_links" href="https://wa.me/2347052223261">Whatsapp</a> 
                                        </section>
        
                                        
        
                                        <section class="c_social_media_link_section">
                                        <i class="fa fa-linkedin c_fa_social_icons"></i><a class="c_footer_navbar_text c_footer_social_links" href="https://www.linkedin.com/in/toyin-asaolu-5608a668/?originalSubdomain=ng">Linkedin</a> 
                                        </section>
                                        
                                    </p>
                                    
                                </div>
            
        
                            </div>

                            <div class="c_footer_five_container_one_D">
            
                                <div class="c_footer_five_container_one_B_content_B c_footer_five_container_one_B_content">
                                    <p class="c_footer_navbar_text c_website_signature">
                                        <span><a class="c_footer_navbar_text" href="../index.php">  Timob Health International</a></span>&nbsp| <br>
                                        <span><a class="c_footer_navbar_text" href="../pages/thi_our_story.php#hepatitis">Hepatitis Corner</a></span>&nbsp| <br>
                                        <span><a class="c_footer_navbar_text" href="../pages/thi_our_story.php#outreach">Outreach</a></span>&nbsp| <br>
                                        <span><a class="c_footer_navbar_text" href="#"><i class="fa fa-copyright"></i> 2013 - <span class="date c_footer_navbar_text" id="date"> </span> All right reserved</a></span>&nbsp| <br><a class="c_footer_navbar_text" target="_blank" href="../pages/thi_Personal_data_protection_policy.php">Terms & conditions</a> | <a class="c_footer_navbar_text" target="_blank" href="../pages/thi_Privacy_preferences.php">Privacy policy</a> | <a class="c_footer_navbar_text" target="_blank" href="#">community development</a> |  <a class="c_footer_navbar_text" target="_blank" href="#">donation</a>| <a class="c_footer_navbar_text" target="_blank" href="../pages/thi_contact.php">contact us</a> | <a class="c_footer_navbar_text" target="_blank" href="#">about us</a> | 
                                        Website Developed and Designed by <span><a class="c_footer_navbar_text" target="_blank" href="#">Brain&Geniuses</a></span>
                                    </p>
                                </div>
        
                            </div>
                        
            
                    </div>
            
                </div>

            </div>


        </footer>






        <!---javascript links-->
        <script src="../js/main.js"></script>
        <!-- <script src="../js/pages_js/pages_main.js"></script> -->


    </body>


</html>