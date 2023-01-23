<?php

//link to other pages

// include_once '../php/c_thi_user_contact_us_form_submit.php';

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
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/pages_css/c_contact.css"/>
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

         include '../header.php'

        ?>


        <main>
            
            <div id="c_modal_container" class="c_modal_container">

                <div class="c_modal_content">

                    <span class="c_close_modal"> &times;</span>

                </div>

    
            </div>

            <?php
                    include '../post/blogs/c_social_share_button.php';
            ?>



            <!-- <div class="c_contact_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_contact_div">

                    <div class="c_c_t_h_c c_content_title_container c_contact_container">

                        <div class="c_contact_one">
                            <h1 class="c_content_title c_contact">
                                contact us
                            </h1>
                        </div>

                        <div class="c_contact_two">
                            <p>
                                For a better, quality good health, please provide us with as many details as possible.
                            </p>                           
                        </div>

                    </div>


                </div>



                <!-- <div class="c_contact_details_container"> -->

                    <div class="c_contact_details_one c_contact_details">

                        <div class="c_contact_us_form">

                            <div class="c_form_title">
                                <h2>
                                    We would like to hear from you!
                                </h2>
                            </div>

                            <?php if(!empty($statusMsg)) { ?>

                                <div class="c_status_msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>

                                <?php

                                }
                            
                            ?>


                            <form id="c_contact_form" action="../php/c_thi_user_contact_us_form_submit.php" method="post">


                                <div class="c_form_item_row">
                                <label for="c_contact_form_name" id="c_contact_name" class="c_contact_form_heading">Name</label>
                                <input type="text" name="c_contact_form_name" class="c_contact_form_details" id="c_contact_form_name" required placeholder="Enter Full Name" value=""/>
                                </div>
                                
                                <br>

                                <div class="c_form_item_row">
                                <label for="c_contact_form_tel" id="c_contact_form_tel" class="c_contact_form_heading">Telephone</label>
                                <input type="tel" name="c_contact_form_tel" class="c_contact_form_details" id="c_contact_form_tel" required placeholder="Enter Telephone Number" value=""/>
                                </div>

                                <br>
                                
                                <div class="c_form_item_row">
                                <label for="c_contact_form_email" id="c_contact_form_email" class="c_contact_form_heading">Email</label>
                                <input type="email" name="c_contact_form_email" class="c_contact_form_details" id="c_contact_form_email" required placeholder="Enter Email Address" value=""/>
                                </div>
                                
                                <br>
                                
                                <div class="c_form_item_row">
                                <label for="c_contact_form_subject" id="c_contact_form_subject" class="c_contact_form_heading">Subject</label>
                                <input type="text" name="c_contact_form_subject" class="c_contact_form_details" id="c_contact_form_subject" required placeholder="Enter Topic Subject" value=""/>
                                </div>

                                <br>
                                
                                <div class="c_form_item_row">
                                <label for="c_contact_form_message" id="c_contact_form_message" class="c_contact_form_heading">Message</label>
                                <textarea name="c_contact_form_message" class="c_contact_form_details" id="c_contact_form_message" required placeholder="Enter Message" value=""></textarea>
                                </div>

                                <br>
                                
                                <div class="c_form_item_row">
                                <input type="submit" value="Send Enquires" class="c_contact_form_submit" id="c_contact_form_submit"/>
                                </div>

                            </form>

                        </div>

                        
                    </div>


                    <div class="c_contact_details_two c_contact_details">
                       
                        <div class="c_contact_details_two_details c_contact_details_two_details_one">
                            <p>General Information and Inquiries</p>
                        </div>

                        <div class="c_contact_details_two_details c_contact_details_two_details_two">
                            <p>Call :</p> <p><a href="tel:+234 1 448 0815">+234 1 448 0815</a></p> <p><a href="tel:+234 1 448 0816">+234 1 448 0816</a></p>
                        </div>

                        <div class="c_contact_details_two_details c_contact_details_two_details_three">
                            <p>Fax :</p> <p><a href="tel:+234 1 448 0815">+234 1 448 0815</a></p> <p><a href="tel:+234 1 448 0816">+234 1 448 0816</a></p>
                        </div>
                        
                        <div class="c_contact_details_two_details c_contact_details_two_details_four">
                            <p>Email :</p> <p><a href="mailto:communications@timobhealth.com">communications@timobhealth.com</a></p>
                        </div> 

                        <div class="c_contact_details_two_details c_contact_details_two_details_five">
                            <p><a href=""><i class="fa fa-facebook-official"></i>Facebook</a></p> &nbsp&nbsp <p><a href=""><i class="fa fa-twitter"></i>Twitter</p> &nbsp&nbsp   <p><a href=""><i class="fa fa-linkedin"></i>Linkedin</p>  &nbsp&nbsp  <p><a href=""><i class="fa fa-instagram"></i>Instagram</p>  &nbsp&nbsp  <p><a href=""><i class="fa fa-youtube"></i>Youtube</p>
                        </div> 
 
                        <div class="c_contact_details_two_details c_contact_details_two_details_six">
                            <p>Address :</p> <p>10, ODELOLA STREET KILO , SURULERE ,LAGOS</p>
                        </div> 

                        <div class="c_contact_details_two_details c_contact_details_two_details_seven">
                            <p>Registration Number:</p> <p>RC 2253148</p>
                            
                        </div> 
                
                        <div class="c_contact_details_two_details c_contact_details_two_details_eight">
                            <p>Registration Date:</p> <p>2 Apr 2013</p>
                            
                        </div> 

                         <div class="c_contact_details_two_details c_contact_details_two_details_nine">
                            <p>Nature of business:</p> <p>Gen. Consultants and Health Education</p>
                            
                        </div> 


                    </div>


                    <div class="c_contact_details_three c_contact_details">

                        <div>

                            <p class="c_contact_map_text_container">
                                <span class="c_contact_map_text c_contact_map_text_A"> 
                                    <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling c_icon_map_location"></i> Locate us </span> <span class="c_contact_map_text c_contact_map_text_B">:</span> <br><span class="c_contact_map_text c_contact_map_text_C"> Head Office: 10, Odelola Street, Off nnobi Surulere Lagos. </span> <span class="c_contact_map_text c_contact_map_text_D">|</span> 

                            </p>

                            <div class="c_contact_map">            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63427.97620267909!2d3.3087804184700915!3d6.490184080418627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c0f7bc8de87%3A0x62650fcb3d2c8fb1!2sSurulere%2C%20101241%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1663881357757!5m2!1sen!2sng" >
                
                                </iframe>
                    
                            </div>

                        </div>

                        <div>

                            <p class="c_contact_map_text_container">
                                <span class="c_contact_map_text c_contact_map_text_A"> 
                                    <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling c_icon_map_location"></i> Locate us </span> <span class="c_contact_map_text c_contact_map_text_B">:</span> <br>
                                    <span class="c_contact_map_text c_contact_map_text_C"> Branch Office: 3, Oludele fakunle Street, Sawmill, Ifako, Gbagada Lagos. </span> <span class="c_contact_map_text c_contact_map_text_D">|</span> 

                            </p>

                            <div class="c_contact_map">            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3963.7234761273753!2d3.3920744147289876!3d6.556550524597339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1672345253004!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                            </div>
                            
                        </div>

                    </div>



                <!-- </div> -->


                <div class="c_our_team_container">
                    
                    <div class="c_our_team_title_container">
                        <h2 class="c_our_team_title">Our Team</h2>
                    </div>

                    <div class="c_our_team_details_container">

                        <div class="c_our_team_details c_our_team_details_A">
                            <div class="c_our_team_details_img">
                                <img src="../pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>
                            </div>
                            <div>
                                <div class="c_our_team_details_names">
                                    <p>Olutoyin Asaolu</p>
                                    <p>Director & Gastroenterology</p>
                                    <!-- <p><a href="#">Read More</a></p> -->
                                </div>
                                <div class="c_our_team_details_social_networks">
                                    <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                    <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                    <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                    <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                </div>
                            </div>
                        </div>
                        
                        <!--<div class="c_our_team_details c_our_team_details_B">-->
                        <!--    <div class="c_our_team_details_img">-->
                        <!--        <img src="../pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>-->
                        <!--    </div>-->
                        <!--    <div>-->
                        <!--        <div class="c_our_team_details_names">-->
                        <!--            <p>Ristopher mogren</p>-->
                        <!--            <p>Consultant General Surgeon</p>-->
                        <!--        </div>-->
                        <!--        <div class="c_our_team_details_social_networks">-->
                        <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                      
                        <!--<div class="c_our_team_details c_our_team_details_C">-->
                        <!--    <div class="c_our_team_details_img">-->
                        <!--        <img src="../pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>-->
                        <!--    </div>-->
                        <!--    <div>-->
                        <!--        <div class="c_our_team_details_names">-->
                        <!--            <p>Stephen Holland</p>-->
                        <!--            <p>Consultant Dietician</p>-->
                        <!--        </div>-->
                        <!--        <div class="c_our_team_details_social_networks">-->
                        <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="c_our_team_details c_our_team_details_D">-->
                        <!--    <div class="c_our_team_details_img">-->
                        <!--        <img src="../pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>-->
                        <!--    </div>-->
                        <!--    <div>-->
                        <!--        <div class="c_our_team_details_names">-->
                        <!--            <p>Ping Zhang</p>-->
                        <!--            <p>Certified Nurse Practitioner</p>-->
                        <!--        </div>-->
                        <!--        <div class="c_our_team_details_social_networks">-->
                        <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                        <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                    </div>

                </div>


            </div>

            <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
  
            

        </main>


        <?php
            include '../footer.php';
        ?>






        <!---javascript links-->
        <script src="../js/main.js?v=<?php echo time(); ?>"></script>
        <!-- <script src="../js/pages_js/pages_main.js"></script> -->


    </body>


</html>