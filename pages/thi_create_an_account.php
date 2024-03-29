
<?php



    //get back form dataif they was a registration error
    $userAccountName = $_SESSION['signup-data']['user_accountName'] ?? null;
    $userAccountEmail = $_SESSION['signup-data']['user_accountEmail'] ?? null;
    $userAccountPhone = $_SESSION['signup-data']['user_accountPhone'] ?? null;
    $userAccountPassword = $_SESSION['signup-data']['user_accountPassword'] ?? null;
    $userAccountConfirmPassword = $_SESSION['signup-data']['user_accountConfirmPassword'] ?? null;
    $userAccountPicture = $_SESSION['signup-data']['user_accountPicture'] ?? null;


    unset($_SESSION['signup-data']);
?>









<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Create an account | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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
                                Create an account
                            </h1>
                            <p>
                            Sign up today with us and stay updated with our latest newsletter, outreach and programs
                            </p> 
                        </div>

                        <div class="c_general_two">


                            <div class="c_create_an_account">

                                <?php
                                
                                    if(isset($_SESSION['thi_create_an_account'])) : ?> 

                                        <div class="c_alert_message c_error_message">
                                            <p> 
                                                
                                                <?= $_SESSION['thi_create_an_account'];
                                                  unset($_SESSION['thi_create_an_account']);                                                                                          ?> 
                                            
                                            </p>
                                        </div>
                                
                                    <?php endif?>

                                <form method="POST" action="c_signup_logic.php"  enctype="multipart/form-data" class="c_signin_createanaccount">

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <label for="c_create_an_account_accountName" class="c_create_an_account_labels"> Account Name</label>
                                        <input type="text" id="c_create_an_account_accountName" class="c_create_an_account_inputs" value="<?= $userAccountName ?>" name="user_accountName"/>
                                    </div>
                                    <br>
                                    <div class="c_create_an_account_section c_create_an_account_section_two">
                                        <label for="c_create_an_account_accountEmail" class="c_create_an_account_labels"> Account Email</label>
                                        <input type="text" id="c_create_an_account_accountEmail" class="c_create_an_account_inputs" value="<?= $userAccountEmail ?>" name="user_accountEmail"/>
                                    </div>
                                    <br>
                                    <div class="c_create_an_account_section c_create_an_account_section_three">
                                        <label for="c_create_an_account_accountPhone" class="c_create_an_account_labels"> Account Phone</label>
                                        <select id="c_tel_country_code" class="c_create_an_account_inputs"></select> <input type="text" id="c_create_an_account_accountPhone" class="c_create_an_account_inputs" value="<?= $userAccountPhone ?>" name="user_accountPhone"/>
                                    </div>
                                    <br>
                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_create_an_account_accountPassword" class="c_create_an_account_labels"> Account Password</label>
                                        <input type="password" id="c_create_an_account_accountPassword" class="c_create_an_account_inputs" value="<?= $userAccountPassword ?>" name="user_accountPassword"/>
                                    </div>
                                    <br>
                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_create_an_account_accountConfirmPassword" class="c_create_an_account_labels"> Confirm Account Password</label>
                                        <input type="password" id="c_create_an_account_accountConfirmPassword" class="c_create_an_account_inputs" value="<?= $userAccountConfirmPassword ?>" name="user_accountConfirmPassword"/>
                                    </div>
                                    <br>
                                    
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <label for="c_display_upload_avatar" class="c_create_an_account_labels"> User Picture</label>
                                        
                                        
                                        <input type="file" id="c_create_an_account_userPicture" class="c_create_an_account_inputs" value="<?= $userAccountPicture ?>" name="user_accountPicture" accept="image/png, image/jpeg, image/jpg" style="visibility: hidden"/>
                                        
                                        <div id="c_display_upload_avatar" class="c_display_upload_pictures" title="Upload Profile Picture">

                            <label for="c_create_an_account_userPicture" id="picture_Upload_button">
                                                                            <div class="c_display_upload_pictures_content" id="c_profile_image_icon">
                                                                                <h3><i>Upload Profile Picture</i></h3>
                                                                                <i class="fa fa-user" class="c_display_upload_pictures_icons" style="font-size: 100px; text-align: center"></i>
                                                                            </div>
                                </label>
                                        </div>
                                        
                                        <div class="c_picture_upload_decision">
                                            <div class="c_picture_button c_left_round" id="c_cancel_picture">
                                                <i class="fa fa-times" title="Cancel Profile Picture"></i>
                                            </div>

                                            <div class="c_picture_button c_right_round" id="c_confirm_picture">
                                                <i class="fa fa-check" title="Accept Profile Picture"></i>
                                            </div>
                                        </div>                                        
                                        
                                        

                                    </div>
                                    
                                    
                                    <br>
                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <label for="c_create_an_account_accountSubmit" id="c_create_an_account_accountSubmit" class="c_create_an_account_labels">Register Account </label>
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" value="Sign Up" name="create_user_account_submit"/>
                                    </div>
                                    
                                </form>
                                 <br>
                                Already have an account <a href="../pages/thi_sign_in_account.php">Sign in</a>
                           

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
        


    <script>
        function loadAPICountry() {

    

    document.addEventListener('DOMContentLoaded', ()=>{
    
        const countryCodeDropDown = document.querySelector("#c_tel_country_code");
    
        fetch('https://restcountries.com/v2/all').then(res => {
        return res.json();
        }).then(data => {
        let output = "";
        data.forEach(country => {
            console.log(country.callingCodes);
            output +=`<option value="${country.callingCodes}">+ ${country.callingCodes}</option>`;
        })
        countryCodeDropDown.innerHTML = output;
        }).catch(err => {
        console.log(err);
        })
    
    });

}

loadAPICountry();
    </script>




    </body>


</html>