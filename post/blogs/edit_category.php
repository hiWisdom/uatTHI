<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Edit Category | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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

            if(isset($_GET['id'])) {
                $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

                // fetch category from database

                $query = " SELECT * FROM thi_post_categories WHERE id=$id";
                $result = mysqli_query($connectDataBase, $query);
                if(mysqli_num_rows($result) == 1) {
                    $category = mysqli_fetch_assoc($result);
                }
            }
            else {
                header('location:'.'manage_categories.php');
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
                                Edit Category
                            </h1>
                        </div>

                        <div class="c_general_two">

                            <p>
                                Edit a category from previously created category.
                            </p>  


                            <div class="c_create_an_account">

                                <?php if(isset($_SESSION['edit_category'])):?>

                                    <div class="c_alert_message c_error_message">
                                    <p> 
                                                
                                                <?= $_SESSION['edit_category'];
                                                unset($_SESSION['edit_category']);                             ?> 
                                            
                                            </p>
                                    </div>

                                <?php endif ?>
                          

                                <form method="POST" action="edit_category_logic.php" onsubmit="" class="c_signin_createanaccount">

                                <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="hidden" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="id" name="id" value="<?= $category['id']?>"/>
                                    </div>


                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="text" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Edit Category Title" name="title" value="<?= $category['title']?>"/>
                                    </div>
                                    
                                       <br> 

                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <textarea rows="4" placeholder="Edit category Description" id="c_create_an_account_accountPassword" class="c_create_an_account_inputs" name="description"><?= $category['description'] ?></textarea>
                                    </div>

                                        <br>
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" name="submit_Update_Category" value="Update Category"/>
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