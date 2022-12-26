

<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Edit User | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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
        <link rel="stylesheet" href="../../css/pages_css/pages_main.css"/>
        <link rel="stylesheet" href="../../css/pages_css/c_general_pages_styling.css"/>
        <link rel="stylesheet" href="../../css/main.css"/>
        <link rel="stylesheet" href="../../css/font_css/fontawesome.css"/>
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

            // if(isset($_GET['id'])) {
            //     $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

                // fetch category from database

            //     $query = " SELECT * FROM timob_health_international_users_account WHERE id=$id";
            //     $result = mysqli_query($connectDataBase, $query);
            //     if(mysqli_num_rows($result) == 1) {
            //         $category = mysqli_fetch_assoc($result);
            //     }
            // }
            // else {
            //     header('location:'.'manage_users.php');
            //     die();
            // }


            if(isset($_GET['id'])) {
                $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
                $query = " SELECT * FROM timob_health_international_users_account WHERE id=$id";
                $result = mysqli_query($connectDataBase, $query);
            //     if(mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);
            //     }
            }
            else {
                header('location:'.'manage_users.php');
                die();
            }

        ?>


        <main>

            <div id="c_modal_container" class="c_modal_container">

                <div class="c_modal_content">

                    <span class="c_close_modal"> &times;</span>
                    <!-- <p class="c_modal_content"></p> -->

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




            <!-- <div class="c_general_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_general_div">

                    <div class="c_c_t_h_c c_content_title_container c_general_container">

                        <div class="c_general_one">
                            <h1 class="c_content_title c_general">
                            Edit User
                            </h1>

                            <h5 class="c_general_pages_date_update"></h5>
                        </div>

                        <div class="c_general_two">

                            <p>
                            Edit user account.
                            </p>  


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
                                
                                elseif(isset($_SESSION['edit_user'])) : ?> 

                                    <div class="c_alert_message c_error_message">
                                        <p> 
                                            
                                            <?= $_SESSION['edit_user'];
                                              unset($_SESSION['edit_user']);                                                                  ?> 
                                        
                                        </p>
                                    </div>
                            
                                <?php endif?>



                                <form method="POST" action="edit_user_logic.php" onsubmit="" enctype="multipart/form-data">
 
                                <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="hidden" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="id" name="id" value="<?= $user['id']?>"/>
                                    </div>

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="text" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="User name" name="account_name" value="<?= $user['account_name']?>"/>
                                    </div>

                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="tel" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Phone Number" name="account_phone"  value="<?= $user['account_phone']?>"/>
                                    </div>


                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="email" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Email" name="account_email" value="<?= $user['account_email']?>"/>
                                    </div>

                                    
 



                                    <select name="edit_user_userRole" value="<?= $user['is_admin']?>" >

                                    <option value="0">Author</option>

                                    
                                    <option value="1">Admin</option>

                                    </select> 
                                    

                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_create_an_account_accountPassword" id="c_create_an_account_userPicture" class="c_create_an_account_labels"> User Picture </label>
                                        <input type="file" id="c_create_an_account_userPicture" class="c_create_an_account_inputs" name="add_user_userpicture" value="<?= $user['user_picture'] ?>"/>
                                    </div>
                                       

                                
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" value="Update User" name="edit_user_updatedata"/>
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
        <script src="../../js/main.js"></script>
        <script src="../../js/pages_js/pages_main.js"></script>


    </body>


</html>