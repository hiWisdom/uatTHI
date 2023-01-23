<?php     

$account_username_email = $_SESSION['signin-data']['thi_account_username_email'] ?? null;

$account_password = $_SESSION['signin-data']['thi_account_password'] ?? null;



unset($_SESSION['signin-data']);

?>
    
    
<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Sign-in account | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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
        <link rel="stylesheet" href="../css/pages_css/pages_main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../css/pages_css/c_general_pages_styling.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../css/font_css/fontawesome.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        

        <!---favicon-->
        <link rel="icon" type="image/x-icon" href="pictures/testing picture/faviLogo.jpg">

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
                    <!-- <p class="c_modal_content"></p> -->

                </div>

    
            </div>

            <?php
                    include '../post/blogs/c_social_share_button.php';
            ?>



            <!-- <div class="c_general_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_general_div">

                    <div class="c_c_t_h_c c_content_title_container c_general_container">

                        <div class="c_general_one">
                            <h1 class="c_content_title c_general">
                            Sign in account
                            </h1>
                            
                            <p>
                            Sign in today with us and stay updated with our latest newsletter, outreach and programs.
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
                                        
                                                                                
                                <?php

                                    if(isset($_GET["newpassword"])) {
                                        if($_GET["newpassword"] == "passwordupdated") {
                                            echo '<p class="c_alert_message c_success_message">Your password has been reset! Sign in.</p>';
                                        }
                                    }

                                ?>
                                    </div>

                                    <?php
                                
                                elseif(isset($_SESSION['thi_sign_in_account'])) : ?> 

                                    <div class="c_alert_message c_error_message">
                                        <p> 
                                            
                                            <?= $_SESSION['thi_sign_in_account'];
                                              unset($_SESSION['thi_sign_in_account']);                                                                  ?> 
                                        
                                        </p>
                                    </div>
                            
                                <?php endif?>

                                <form method="POST" action="c_signin_logic.php" class="c_signin_createanaccount">

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <label for="c_create_an_account_accountName" id="c_create_an_account_accountName" class="c_create_an_account_labels"> Account Name</label>
                                        <input type="text" id="c_create_an_account_accountName" name="thi_account_username_email" class="c_create_an_account_inputs" value="<?= $account_username_email ?>"/>
                                    </div>
                                    
                                    <br>
                                       
                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_create_an_account_accountPassword" id="c_create_an_account_accountPassword" class="c_create_an_account_labels"> Account Password</label>
                                        <input type="password" id="c_create_an_account_accountPassword" name="thi_account_password" class="c_create_an_account_inputs" value="<?= $account_password ?>"/>
                                    </div>
                                    
                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <label for="c_create_an_account_accountSubmit" id="c_create_an_account_accountSubmit" class="c_create_an_account_labels">Sign in Account </label>
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" value="Sign in" name="thi_account_signin"/>
                                    </div>

                                </form>
                                
                                 <br>

                                Forgot your password<a href="../pages/reset_user_password.php"> Reset now</a>
                                <br>
                                <br>

                                Don't have an account <a href="../pages/thi_create_an_account.php">Sign up</a>

                            </div>
                            

                            
                        </div>

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
        <script src="../js/pages_js/pages_main.js?v=<?php echo time(); ?>"></script>


    </body>


</html>