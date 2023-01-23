<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Edit Post | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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

            // fetch category from database

            $query = "SELECT * FROM thi_post_categories";
            $currentCategories = mysqli_query($connectDataBase, $query);


            //fetch post data from database if id is set


            if(isset($_GET['id'])) {
                $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
                $query = " SELECT * FROM blog_post WHERE id=$id";
                $result = mysqli_query($connectDataBase, $query);
            //     if(mysqli_num_rows($result) == 1) {
                $blogpost = mysqli_fetch_assoc($result);
            //     }
            }
            else {
                header('location:'.'dashboard.php');
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
                                Edit Post
                            </h1>

                            <p>
                                Edit <?= $blogpost['title']?> post.
                            </p>  

                        </div>

                        <div class="c_general_two">

                            <div class="c_create_an_account">

                            <?php if(isset($_SESSION['c_success_message'])) : ?> 

                                <div class="c_alert_message c_success_message">
                                    <p> 
                                        
                                        <?= $_SESSION['c_success_message'];
                                        unset($_SESSION['c_success_message']);  ?> 
                                    
                                    </p>
                                </div>

                                <?php elseif(isset($_SESSION['edit_post'])) : ?> 

                                    <div class="c_alert_message c_error_message">
                                        <p> 
                                            
                                            <?= $_SESSION['edit_post'];
                                            unset($_SESSION['edit_post']); ?> 
                                        
                                        </p>
                                    </div>

                                <?php endif?>

                               

                                <form method="POST" action="edit_post_logic.php" onsubmit="" enctype="multipart/form-data" class="c_signin_createanaccount">

                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        <input type="hidden" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="id" name="id" value="<?= $blogpost['id']?>"/>

                                        <input type="hidden" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="id" name="previous_picture" value="<?= $blogpost['image']?>"/>
                                    </div>

                                    <br>


                                    <div class="c_create_an_account_section c_create_an_account_section_one">
                                        Edit Blog Title <input type="text" id="c_create_an_account_accountName" class="c_create_an_account_inputs" placeholder="Title" name="title" value="<?= $blogpost['title']?>"/>
                                    </div>
                                    
                                    <br>

                                    Edit blog category: <select name="category" class="blog_post_category">

                                        <?php while($posted_category = mysqli_fetch_assoc($currentCategories)) : ?>
                                        <option value="<?$posted_category['id']?>"><?= $posted_category['title']?></option>

                                        <?php endwhile ?>

                                    </select> 

                                    <br>
                                    
                                    <div class="c_form_control">

                                     Do you want to Featured Blog Post:   <input type="checkbox" name="is_featured" id="c_blog_is_featured" value="1">
                                        <label for="c_blog_is_featured" checked> Featured </label>

                                    </div>

                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        <input type="file" id="c_blog_post_picture" class="c_create_an_account_inputs c_picture_form_file_type" name="blog_post_picture" value="<?= $blogpost['blog_post_picture']?>"/>
                                        
                                                                                                                        <div id="c_display_upload_post_avatar">
                                              
                                         <label for="c_blog_post_picture" id="picture_Upload_button">
                                                <div class="c_display_upload_pictures_content" id="c_blog_image_icon">
                                                    <h3><i>Upload Cover Post Picture</i></h3>
                                                    <i class="fa fa-file-picture-o upload_cover_post_picture"></i>
                                                </div>
                                            </label>

                                        </div>

                                        <div class="c_picture_upload_decision">
                                                <div class="c_picture_button c_left_round" id="c_cancel_picture">
                                                    <i class="fa fa-times" title="Cancel Post Picture"></i>
                                                </div>

                                                <div class="c_picture_button c_right_round" id="c_confirm_picture">
                                                    <i class="fa fa-check" title="Accept Post Picture"></i>
                                                </div>
                                        </div>
                                        
                                    </div>
                                       
                                    <br>

                                    <div class="c_create_an_account_section c_create_an_account_section_four">
                                        Edit Blog Content: <textarea cols="35" rows="7" placeholder="Description" id="blog_post_description" name="description" value="<?= $blogpost['description']?>"></textarea>
                                    </div>

                                
                                    
                                    <div class="c_create_an_account_section c_create_an_account_section_five">
                                        <input type="submit" id="c_create_an_account_accountSubmit" class="c_create_an_account_inputs" name="submit_edit_POST" value="Update Post"/>
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
                <script src="../../js/ckeditor/ckeditor.js"></script>

        <script>
            CKEDITOR.replace("blog_post_description");
        </script>
        <script>

var uploadedImages = "";
document.querySelector("#c_blog_post_picture").addEventListener("change", function() {
    
            var fileReader = new FileReader();
            fileReader.addEventListener("load", function(){
                uploadedImages = fileReader.result;
                document.querySelector("#c_display_upload_post_avatar").style.backgroundImage = `url(${uploadedImages}) `;
                document.querySelector("#c_display_upload_post_avatar").style.backgroundPosition = "center";
                document.querySelector("#c_display_upload_post_avatar").style.backgroundRepeat = "no-repeat";
                document.querySelector("#c_display_upload_post_avatar").style.backgroundSize = "contain";
                document.querySelector("#c_cancel_picture").style.display="block";
                document.querySelector("#c_confirm_picture").style.display = "block";
                document.querySelector("#c_blog_image_icon").style.display="none";
            });
            fileReader.readAsDataURL(this.files[0]);
        });

        document.querySelector("#c_cancel_picture").onclick = function() {
                document.querySelector("#c_blog_post_picture").value="";
                document.querySelector("#c_blog_image_icon").style.display="block";
                document.querySelector("#c_display_upload_post_avatar").style.backgroundImage = "none";
                document.querySelector("#c_cancel_picture").style.display="none";
                document.querySelector("#c_confirm_picture").style.display = "none";
        }            

        document.querySelector("#c_confirm_picture").onclick = function() {
            if (confirm("Please confirm upload picture!")) { 
                document.querySelector("#c_cancel_picture").style.display="none";
            } 
            
            else {
                document.querySelector("#c_cancel_picture").style.display="block";
                document.querySelector("#c_confirm_picture").style.display = "block";
            }
        }
</script>


    </body>


</html>