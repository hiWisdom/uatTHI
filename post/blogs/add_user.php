<?php


    //get back form data if they was a registration error
    $addUserName = $_SESSION['signup-data']['add_user_username'] ?? null;
    $addUserTelephone = $_SESSION['signup-data']['add_user_telephone'] ?? null;
    $addUserEmail = $_SESSION['signup-data']['add_user_email'] ?? null;
    $addUserPassword = $_SESSION['signup-data']['add_user_password'] ?? null;
    $addUserConfirmPassword = $_SESSION['signup-data']['add_user_confirmpassword'] ?? null;
    $addUserIsAdmin = $_SESSION['signup-data']['add_user_userRole'] ?? null;
    $addUserPicture = $_SESSION['signup-data']['add_user_userpicture'] ?? null;


    unset($_SESSION['signup-data']);
?>






























<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Add User | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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
        <link rel="stylesheet" href="../../css/pages_css/pages_main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/pages_css/c_general_pages_styling.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/font_css/fontawesome.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        

        <!---favicon-->
        <link rel="icon" type="image/x-icon" href="../../pictures/testing picture/faviLogo.jpg">

        <!---js link-->
        <script src="//code.jivosite.com/widget/2umIxmovzj" async></script>

    </head>





    <body>


        <div class="overlay">


            <div class="spinner">
    
                <div class="c_page_loading_image">
                    <img src="../../pictures/testing picture/THI Jpeg 1.jpg"/>
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

            include '../../header.php';

        ?>


        <main>

            <div id="c_modal_container" class="c_modal_container">

                <div class="c_modal_content">

                    <span class="c_close_modal"> &times;</span>
                    <!-- <p class="c_modal_content"></p> -->

                </div>

    
            </div>

            <?php
                    include 'c_social_share_button.php';
            ?>
            
            <?php
                include 'dashboard_component.php';
            ?>


            <!-- <div class="c_general_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_general_div">

                    <div class="c_c_t_h_c c_content_title_container c_general_container">

                        <div class="c_general_one">
                            <h1 class="c_content_title c_general">
                            Add User
                            </h1>
                            <p>
                            Create a user account.
                            </p>  
                        </div>

                        <div class="c_general_two">


                            <div class="c_create_an_account">

                            <?php
                                
                                if(isset($_SESSION['c_success_message'])) : ?> 

                                    <div class="c_alert_message c_success_message">
                                        <p> 
                                            
                                            <?= $_SESSION['c_success_message'];
                                              unset($_SESSION['c_success_message']);                                                                  ?> 
                                        
                                        </p>
                                    </div>

                                    <?php
                                
                                elseif(isset($_SESSION['add_user'])) : ?> 

                                    <div class="c_alert_message c_error_message">
                                        <p> 
                                            
                                            <?= $_SESSION['add_user'];
                                              unset($_SESSION['add_user']);                                                                  ?> 
                                        
                                        </p>
                                    </div>
                            
                                <?php endif?>


                                <form method="POST" action="add_user_logic.php" onsubmit="" enctype="multipart/form-data" class="c_signin_createanaccount">
                                    

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="text" id="c_create_an_account_accountName" placeholder="New user name" class="c_create_an_account_inputs" placeholder="User name" name="add_user_username" value="<?= $addUserName ?>"/>
                                    </div>

                                    <br>
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                    <select id="c_tel_country_code" aria-placeholder="+234(NG)" class="c_create_an_account_inputs"></select><input type="tel" id="c_create_an_account_accountPhone" class="c_create_an_account_inputs" placeholder="New User Phone Number" name="add_user_telephone" value="<?= $addUserTelephone ?>"/>
                                    </div>

                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="email" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="New User Email" name="add_user_email" value="<?= $addUserEmail ?>"/>
                                    </div>

                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="password" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Create Password" name="add_user_password" value="<?= $addUserPassword ?>"/>
                                    </div>

                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="password" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Confirm Password" name="add_user_confirmpassword" value="<?= $addUserConfirmPassword ?>"/>
                                    </div>

                                    <br>


                                    <select name="add_user_userRole" class="blog_post_category">

                                        <option value="0">Author</option>

                                        
                                        <option value="1">Admin</option>

                                    </select> 
                                    
                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_create_an_account_accountPassword" id="c_create_an_account_userPicture" class="c_create_an_account_labels"> User Picture </label>
                                        <input type="file" id="c_create_an_account_userPicture" class="c_create_an_account_inputs" name="add_user_userpicture" value="<?= $addUserPicture ?>"/>
                                    </div>
                                       

                                    <br>
                                
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" value="Add User" name="add_user_userdataSubmit"/>
                                    </div>

                                </form>

                            </div>

                            
                        </div>

                    </div>


                </div>


            </div>

            <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
  

        </main>


        <?php
            include '../../footer.php';
        ?>






        <!---javascript links-->
        <script src="../../js/main.js?v=<?php echo time(); ?>"></script>
        <script src="../../js/pages_js/pages_main.js?v=<?php echo time(); ?>"></script>


    </body>


</html>