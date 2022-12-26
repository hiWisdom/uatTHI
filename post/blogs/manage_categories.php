<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>Manage Categories | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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

            //fetch current user categories

            $query = "SELECT * FROM thi_post_categories";
            $currentCategories = mysqli_query($connectDataBase, $query);

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

            <?php




                //fetch users from database but not the current user


                $post_category_id = $_SESSION['user-id'];

                $query = " SELECT * FROM thi_post_categories WHERE NOT id=$post_category_id ";

                $posts_category = mysqli_query($connectDataBase, $query);




            ?>


            <!-- <div class="c_general_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_general_div">

                    <div class="c_c_t_h_c c_content_title_container c_general_container">

                        <div class="c_general_one">
                            <h1 class="c_content_title c_general">
                            Manage Categories
                            </h1>

                            <h5 class="c_general_pages_date_update"></h5>
                        </div>

                        <div class="c_general_two">

                            <p>
                            Manage website account categories here.
                            </p>  


                            <div class="c_create_an_account">

                            <?php
                                
                                if(isset($_SESSION['c_success_message'])) : ?> 

                                    <div class="c_alert_message c_success_message">
                                        <p> 
                                            
                                            <?= $_SESSION['c_success_message'];
                                              unset($_SESSION['c_success_message']);                        ?> 
                                        
                                        </p>

                                </div>
                                        <?php
                                
                                elseif(isset($_SESSION['add_category'])) : ?> 

                                    <div class="c_alert_message c_error_message">
                                        <p> 
                                            
                                            <?= $_SESSION['add_category'];
                                              unset($_SESSION['add_category']);                             ?> 
                                        
                                        </p>
                                    </div>
                            
                                <?php endif?> 

                                <form method="" action="" onsubmit="" enctype="multipart/form-data">

                                    <section class="c_blog_dashboard">

                                        <div class="c_blog_dashboard_container">

                                            <aside>

                                                <ul>
                                                <a href="add_category.php">Add Category</a>
                                                

                                                    <a href="edit_category.php">Edit Category</a>
                                                    
                                                    
                                                    <br>

                                                    <a href="add_post.php">Add Post</a>

                                                    
                                                    <br>

                                                    <a href="edit_post.php">Edit Post</a>
                                                    
                                                    <br>

                                                    <a href="add_user.php">Add User</a>

                                                    <br>

                                                    <a href="edit_user.php">Edit User</a>
                                                    
                                                    <br>

                                                    <a href="manage_users.php">Manage Users</a>
                                                    
                                                    <br>

                                                    <a href="manage_categories.php">Manage Categories</a>

                                                </ul>
                                                
                                            </aside>



                                            <table>

                                            <?php if(mysqli_num_rows($currentCategories) > 0) : ?>

                                                <thead>

                                                    <tr>

                                                        <th>Title</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                <?php while($post_category = mysqli_fetch_assoc($posts_category)) : ?>

                                                    <tr>

                                                        <td><?= $post_category['title']?></td>
                                                        <td><a href="edit_category.php?id=<?= $post_category['id']?>" class="c_dashboard_editbutton">Edit</a</td>
                                                        <td><a href="delete_category.php?id=<?= $post_category['id']?>" class="c_dashboard_button c_dashboard_deletebutton">Delete</a></td>

                                                    </tr>
                                                        <?php endwhile ?>

                                                    </tbody>

                                                <?php else: ?>

                                                    <div class="c_alert_message c_error_message">
                                                        <p> <?= "No Category found" ?> </p>
                                                    </div>

                                                <?php endif ?>

                                            </table>

                                        </div>

                                    </section>

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