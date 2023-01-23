<?php     



?>
    
    
<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>create new password | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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
        <link rel="stylesheet" href="../css/pages_css/c_general_pages_styling.css"/>
        <link rel="stylesheet" href="../css/main.css"/>
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

                    <?php

                        $selector = $_GET["selector"];
                        $validator = $_GET["validator"];


                        if(empty($selector) || empty($validator)) {
                            echo "Could not validate your request";
                        }

                        else {

                            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                                ?>


                            <form method="POST" action="reset_user_new_password.php" class="c_signin_createanaccount">

                            <input type="hidden" id="c_create_reset_accountPassword" name="selector" class="c_create_an_account_inputs" placeholder="Enter e-mail address..." value="<?php echo $selector ?>"/>

                            
                            <input type="hidden" id="c_create_reset_accountPassword" name="validator" class="c_create_an_account_inputs" placeholder="Enter e-mail address..." value="<?php echo $validator ?>"/>

                                                                
                            <div class="c_create_an_account_section c_create_an_account_section_four">
                                <label for="c_create_reset_accountPassword" id="c_create_an_account_accountPassword" class="c_create_an_account_labels"> User new password</label>
                                <input type="password" id="c_create_reset_accountPassword" name="thi_reset_account_password" class="c_create_an_account_inputs" placeholder="Enter new password" value=""/>
                            </div>

                            <br>

                            <div class="c_create_an_account_section c_create_an_account_section_four">
                                <label for="c_create_reset_accountPassword" id="c_create_an_account_accountPassword" class="c_create_an_account_labels"> Repeat new password</label>
                                <input type="password" id="c_create_reset_accountPassword" name="thi_repeat_reset_account_password" class="c_create_an_account_inputs" placeholder="Repeat new password" value=""/>
                            </div>

                            <br>

                            <div class="c_create_an_account_section c_create_an_account_section_five"> 
                                <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" value="Submit" name="c_reset_new_password"/>
                            </div>

                            </form>

                                <?php
                            }
                        }

                    ?>



                </div>


            </div>

            <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
  

        </main>


        <?php
            include '../footer.php';
        ?>






        <!---javascript links-->
        <script src="../js/main.js"></script>
        <script src="../js/pages_js/pages_main.js"></script>


    </body>


</html>