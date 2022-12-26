

<!DOCTYPE html>
<html>

<head>  




    <!---meta names and contents-->
    <title>Search Post Timob Health International | Hepatitis Corner | Outreach</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timob Health International | Hepatitis Corner | Outreach"/>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8" >
    <meta name="keywords" content="Timob Health International | Hepatitis Corner | Outreach">
    <meta name="description" content="Check out Timob Health International | Hepatitis Corner | Outreach here, health tips and healthy living. Infection prevention.">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="lp-version" content="v6.23.11"> -->

    <!---stylesheet links-->
    <link rel="stylesheet" href="css/pages_css/c_contact.css"/>
    <link rel="stylesheet" href="css/font_css/fontawesome.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />



    <!---favicon-->
    <link rel="icon" type="image/x-icon" href="pictures/testing picture/faviLogo.jpg">

    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="//code.jivosite.com/widget/2umIxmovzj" async></script>

    
</head>


    <?php 
        
        include 'header.php';

        // check if the user enter a value
        if(isset($_GET['search']) && isset($_GET['submit_search']) ) {


            $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $query = " SELECT * FROM blog_post WHERE title LIKE '%$search%' ORDER BY date_time DESC";
            $posts = mysqli_query($connectDataBase, $query);
        }

        
        else {
            header('location:'.'index.php');
            die();
        }

    ?>


    <main>


        <?php if(mysqli_num_rows($posts) > 0) : ?>

            <div class="c_articles_row">


                <?php while($post = mysqli_fetch_assoc($posts)) : ?>

                    <div class="c_articles_column c_articles_column_A">

                        <div class="c_articles_column_header">
                            <span class="c_articles_column_category">
                                
                            <a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $posted_category['id']?>">

                            <?php if($posted_category = mysqli_fetch_assoc($postedCategories)) : ?>

                                    <?$posted_category['id']?><?= $posted_category['title']?>

                            <?php endif ?>

                            </a>

                            </span>
                            <img class="c_articles_column_image"  src="post/blogs/images/<?= $post['image']?>"/>
                        </div>

                        <div class="c_articles_column_body">

                            <div class="c_articles_column_body_title">
                                <h2 class="c_articles_column_body_title_header"><?= $post['title'] ?></h2>
                            </div>

                            <div class="c_articles_column_body_content">
                                <p class="c_articles_column_body_content_paragraph">
                                    <?=  $post['description']?>
                                </p>
                            </div>

                            <div class="c_articles_column_body_readmore_content">
                                
                                <div class="c_readmore_container">
                                
                                    <div>

                                        <a class="c_articles_column_body_href" href="<?= ROOT_URL?>post/blogs/blog.php?id=<?= $post['id'] ?>">
                                        Read more 
                                        
                                        <i class="fa fa-arrow-right c_icon_general_styling c_icon_read_general_styling"></i>
                                
                                    </a> 


                                    <?php

                                        //fetch author from timob_health_international_users_account table using author_id

                                        $author_id = $post['author_id'];
                                        $author_query = " SELECT * FROM timob_health_international_users_account WHERE id=$author_id ";
                                        $author_result = mysqli_query($connectDataBase, $author_query);
                                        $author = mysqli_fetch_assoc($author_result);

                                    ?>

                                    <img src="post/blogs/images/<?= $author['user_picture']?>" width="20px" height="20px"/>By 
                                    <?= $author['account_name']?>

                            
                                    <span><?= date("M d, Y - H:i", strtotime($post['date_time']))?></span>
                                    
                                    </div>



                                </div>


                            </div>

                        </div>

                    </div>

                <?php endwhile ?>



                <div class="c_articles_load_button_container">
                    <button class="c_articles_load_button"><p> <i class="fa fa-plus"></i> Load More Articles</p></button>
                </div>

            </div> 

        <?php else :?>
            <div class="c_alert_message c_error_message">
                <p> <?= "Search not found." ?> </p>
            </div>

        <?php endif ?>


    </main>

    <?php
     include 'footer.php';
    ?>


</html>