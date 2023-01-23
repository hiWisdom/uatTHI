






<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title>User Dashboard | Timob Health International | Hepatitis Corner | Outreach | Create an account</title>
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


            //fetch current user post

            $current_user_id = $_SESSION['user-id'];
            $blogquery = "SELECT id, title, category_id, date_time FROM blog_post  WHERE author_id = $current_user_id ORDER BY id DESC";
            
            $articlequery = "SELECT id, title, date_time FROM article_post  WHERE author_id = $current_user_id ORDER BY id DESC";

            $currentBlogPost = mysqli_query($connectDataBase, $blogquery);

            
            $currentArticlePost = mysqli_query($connectDataBase, $articlequery);

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

                        <div class="c_general_one" style=" margin-left:auto; margin-right: auto; width: fit-content;">
                            <h1 class="c_content_title c_general">
                                Dashboard
                            </h1>
                             
                             <p>
                             Welcome to the user dashboard. Here is an overview of other functionalities and accessibilities.
                            </p>
                            
                        </div>

                        

                        <div class="c_general_two" style=" margin-left:auto; margin-right: auto;">


                            <div class="c_create_an_account">

                                <?php if(isset($_SESSION['c_success_message'])) : ?> 

                                    <div class="c_alert_message c_success_message">
                                        <p> 
                                            
                                            <?= $_SESSION['c_success_message'];
                                              unset($_SESSION['c_success_message']);?> 
                                        
                                        </p>
                                    </div>

                                    
                                <?php endif?>

 
                                <section class="c_blog_dashboard c_signin_createanaccount">


                                            
                                        <table>

                                            <thead>

                                                <tr>

                                                    <th>Post Title</th>
                                                    <th>Post Category</th>
                                                    <th>Post Date/Time</th>
                                                    <th>Edit Post</th>
                                                    <th>Delete Post</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                            <?php if(mysqli_num_rows($currentBlogPost) > 0) : ?>

                                                <?php while($currentBlog = mysqli_fetch_assoc($currentBlogPost)) : ?>

                                                    <!---get category title from each post from the category table--->
                                                    <?php

                                                    $category_id = $currentBlog['category_id'];
                                                    $catgegory_query = " SELECT title FROM thi_post_categories WHERE id=$category_id ";
                                                    $category_result = mysqli_query($connectDataBase, $catgegory_query);
                                                    $category = mysqli_fetch_assoc($category_result);

                                                ?>

                                                <tr>

                                                    <td><?= $currentBlog['title']?></td>

                                                    <td><?= $category['title']?></td>
                                                         
                                                                                    <td><?= date("d M, Y - H:i", strtotime($currentBlog['date_time']))?></td>

                                                    <td><a href="edit_post.php?id=<?= $currentBlog['id'] ?>" class="c_dashboard_button c_dashboard_editbutton">Edit Post</a</td>

                                                    <td><a href="delete_post.php?id=<?= $currentBlog['id'] ?>" class="c_dashboard_button c_dashboard_deletebutton">Delete Post</a></td>

                                                </tr>

                                                <?php endwhile ?>

                                                <?php else: ?>

                                                    <div class="c_alert_message c_error_message">
                                                        <p> <?= "No posts found,post and share a blog" ?> </p>
                                                    </div>

                                            <?php endif ?>


                                            <?php if(mysqli_num_rows($currentArticlePost) > 0) : ?>

                                                <?php while($articleBlog = mysqli_fetch_assoc($currentArticlePost)) : ?>

                                                <tr>

                                                    <td><?= $articleBlog['title']?></td>

                                                    <td>Article Post</td>


                                                    <td><?= date("d M, Y - H:i",strtotime( $articleBlog['date_time']))?></td>
                                                    
                                                    <td><a href="edit_article.php?id=<?= $articleBlog['id'] ?>" class="c_dashboard_button c_dashboard_editbutton">Edit Article</a</td>

                                                    <td><a href="delete_article.php?id=<?= $articleBlog['id'] ?>" class="c_dashboard_button c_dashboard_deletebutton">Delete Article</a></td>

                                                </tr>

                                                <?php endwhile ?>

                                                <?php else: ?>

                                                    <div class="c_alert_message c_error_message">
                                                        <p> <?= "No article found, post and share an article" ?> </p>
                                                    </div>

                                            <?php endif ?>

                                            </tbody>

                                        </table>

                                    

                                </section>

                              

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