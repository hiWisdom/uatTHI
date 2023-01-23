


<!DOCTYPE html>

<html>


<head>




    <!---meta names and contents-->
    <title>Timob Health International | Hepatitis Corner | Outreach</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timob Health International | Hepatitis Corner | Outreach | toyin asaolu"/>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8" >
    <meta name="keywords" content="Timob Health International, Hepatitis Corner, Outreach, Gastroenterologist, Gastroenterology , Infection control, Medicine, Health Wellness, Health, Stomach, Fever, Human, Outreach, Hepatitis ">
    <meta name="description" content="Check out Timob Health International | Hepatitis Corner | Outreach here, healthy living tips and Infection prevention control tips.">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="lp-version" content="v6.23.11"> -->

    <!---stylesheet links-->
    <link rel="stylesheet" href="css/pages_css/pages_main.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="css/pages_css/c_contact.css?v=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>"/>  
    
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <!---favicon-->
    <link rel="icon" type="image/x-icon" href="pictures/testing picture/faviLogo.jpg?v=<?php echo time(); ?>">

    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="//code.jivosite.com/widget/2umIxmovzj" async></script>

    
</head>


<body>


    <div class="overlay">


        <div class="spinner">

            <div class="c_page_loading_image">
                <img src="pictures/testing picture/THI Jpeg 1.jpg"/>
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
    
        include 'header.php';


        // fetch featured post from database

        $featured_query = " SELECT * FROM blog_post WHERE is_featured=1";
        $featured_result = mysqli_query($connectDataBase, $featured_query);
        $featured = mysqli_fetch_assoc($featured_result);
        

        //fetch article data from database

        $query_article_post = " SELECT * FROM article_post";

        $query_timob_health_international_users_account = " SELECT * FROM timob_health_international_users_account";

        $query_thi_post_categories = "SELECT * FROM thi_post_categories";

        // query datas
        $postedCategories = mysqli_query($connectDataBase, $query_thi_post_categories);

        $article_posts = mysqli_query($connectDataBase, $query_article_post);

        $timob_health_international_users_account = mysqli_query($connectDataBase, $query_timob_health_international_users_account);






        //fetch blog data from database

        $query_blog_post = " SELECT * FROM blog_post";

        // query datas
        $blogs_posts = mysqli_query($connectDataBase, $query_blog_post);


    
    ?>



        
    <main>

        <div id="c_modal_container" class="c_modal_container">

            <div class="c_modal_content">

                <span class="c_close_modal"> &times;</span>
                <!-- <p class="c_modal_content"></p> -->

            </div>


        </div>


        <div class="c_main_0">

                                <div class="c_slide_container active">
                        
                        <div class="c_slide">

                            <div class="c_content">

                            <h1>Timob Health Vision and mission is focus on healthy living.</h1>
                                <p>Click on learn more and to see and read our medical article and medical blog contents.</p>


                                <a href="#c_Medical_Articles" class="c_slide_content_btn">Learn more on our medical article and medical blog.</a>
                                
                            </div>

                            <div class="c_image">
                                <img src="data:image/jpeg;base64,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"/>
                            </div>


                        </div>

                    </div>

                    <div class="c_slide_container">
                        
                        <div class="c_slide">

                            <div class="c_content">
                            <h1 style="font-size:medium;">Timob Health International is a fundamental human right healthcare organization for everyone. We focus on family health managment and living generally, and we specialist in the listed health management below:</h1>
                                <p>
                                    <ul>
                                        <li>Gastro Medicine Treatment</li>
                                        <li>Liver Medicine Treatment</li>
                                        <li>Hepatitis Medicine Treatment</li>
                                    </ul>
                                </p>
                                <a href="pages/thi_medical_specialty.php" class="c_slide_content_btn">Learn more</a>
                            </div>

                            <div class="c_image">
                                <img src="https://www.niddk.nih.gov/-/media/Images/Health-Information/Diabetes/landing/nutrition.png"/>
                            </div>


                        </div>

                    </div>

                    <div class="c_slide_container">
                        
                        <div class="c_slide">

                            <div class="c_content">
                                <h3>Meet one of our Leader and Medical Consultant</h3>
                                <p>Dr. Olutoyin Asaolu</p>

                                <a href="#c_Leadership_Articles" class="c_slide_content_btn">Learn more</a>
                            </div>

                            <div class="c_image">
                                <img src="pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>
                            </div>


                        </div>

                    </div>

                    <div id="c_prev" class="c_landingPage_slideShow_btns_container"> <i class="fa fa-arrow-left c_landingPage_slideShow_btns_icons"></i> </div>
                    <div id="c_next" class="c_landingPage_slideShow_btns_container"> <i class="fa fa-arrow-right c_btn c_landingPage_slideShow_btns_icons"></i> </div> 

        </div>



        <div class="c_about_us_container">

            <div class="c_about_us c_about_us_A">

                <div>

                    <h2>
                        Timob Health International is transforming Healthcare all over the globe
                    </h2>


                    <a class="c_about_us_B_button" href="#"><p> <i class="fa fa-sitemap"></i> Learn More</p></a>

                    
                    <p>
                        
                        Timob Health International believes healthcare is a fundamental human right, so it in emerging markets to bring quality driven health information to meet the needs of good healthy living across the globe and to educate them on how to stay safe, live healthy, family health planning, preventive disease especially gastro and stomach infection.

                    </p>

                </div>

            </div>

            <div class="c_about_us c_about_us_B">

                <div>

                    <h2>About us</h2>

                    <p>
                        
                        We are leading the way through delivery quality health information in our platform, our impact driven model and our quality driven professional are providing quality healthcare information for millions of people across the Globe.
                    
                    </p>

                        <a class="c_about_us_B_button" href="#"><p><i class="fa fa-sitemap"></i> Read More</p></a>
                    

                </div>

                <div>
                    <img src="pictures/testing picture/togetherness.jpg"/>
                </div>

            </div>

            <div class="c_about_us c_about_us_C">

                <div>
                    <!-- <h2>Our Vision and Mission</h2> -->

                    <h2>Our Vision</h2>
                    <p>
                        
                        To provide integrated healthcare network platform accessible to millions of people in developed and developing countries.
                    
                    </p>
                    <br>
                    <br>
                    
                    <h2>Our Mission</h2>
                    <p>
                        
                        To build a platform of impact driven in healthcare for health, wellness and preventive healthcare.
                    
                    </p>
                    <br>
                    <br>
                    
                    <h2>Our Values</h2>
                    <p>
                        
                        We are committed to providing healthy living and life in one of the best-in-class healthcare platform for all in family and friends wellness, health and preventive healthcare:
                    
                    </p>


                </div>

                <div>
                    <img src="pictures/testing picture/background_images/green-775x500.jpg"/>
                </div>

            </div>
            
            <br>
            <br>
            
            <div class="c_about_us c_about_us_D">

                <div class="c_about_us_D_container">

                    <ul>
                        <li>

                            <div class="c_about_us_D_details">
                                <div class="c_about_us_D_detials_image">
                                    <img src="pictures/testing picture/images-25.png">
                                </div>

                                <div class="c_about_us_D_detials_paragraph">
                                    <h3>Quality</h3>
                                    <p>We are committed to providing quality healthcare for everyone.</p>
                                </div>
                            </div>

                        </li>
                        
                        <li>
                            
                            <div class="c_about_us_D_details">
                                <div class="c_about_us_D_detials_image">
                                    <img src="pictures/testing picture/images-24.png">
                                </div>

                                <div class="c_about_us_D_detials_paragraph">
                                    <h3>Integrity</h3>
                                    <p>We love doing the right thing, every time</p>
                                </div>
                            </div>

                        </li>
                        
                        <li>
                            
                            <div class="c_about_us_D_details">
                                <div class="c_about_us_D_detials_image">
                                    <img src="pictures/testing picture/images-23.png">
                                </div>

                                <div class="c_about_us_D_detials_paragraph">
                                    <h3>Healthcare</h3>
                                    <p>We are committed to providing quality healthcare information about health, preventive and wellness healthcare. </p>
                                </div>
                            </div>

                        </li>
                        
                        <li>
                            
                            <div class="c_about_us_D_details">
                                <div class="c_about_us_D_detials_image">
                                    <img src="pictures/testing picture/images-22.png">
                                </div>

                                <div class="c_about_us_D_detials_paragraph">
                                    <h3>Passion</h3>
                                    <p>We are passionate about health, wellness and our lives.</p>
                                </div>
                            </div>

                        </li>

                        <li>
                            
                            <div class="c_about_us_D_details">
                                <div class="c_about_us_D_detials_image">
                                    <img src="pictures/testing picture/images.jpeg-41.jpg">
                                </div>

                                <div class="c_about_us_D_detials_paragraph">
                                    <h3>Respect</h3>
                                    <p>We are respectful of everyone regardless of our differences and diversity</p>
                                </div>
                            </div>

                        </li>

                        
                    </ul>
                </div>

            </div>


            <div class="c_about_us c_about_us_E">

                
                <h2 class="c_about_our_team_accordion" id="c_Leadership_Articles">Leadership Team</h2>
                <div class="c_about_our_team_acordion_panel">

                    <div class="c_our_team_container_main">

                        <h4>
                            Our leadership team are the best in what they do and each brings a wealth of experience to support our vision of providing healthy living in the world.
                        </h4>

                        <div class="c_our_team_details_container">

                            <div class="c_our_team_details c_our_team_details_A">
                                <div class="c_our_team_details_img">
                                    <img src="pictures/testing picture/Dr.-Olutoyin-Asaolu-e1598141460833.png"/>
                                </div>
                                <div>
                                    <div class="c_our_team_details_names">
                                        <p>Olutoyin Asaolu</p>
                                        <p>Director & Gastroenterology</p>
                                    </div>
                                    <div class="c_our_team_details_social_networks">
                                        <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                        <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                        <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                        <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="c_our_team_details c_our_team_details_B">-->
                            <!--    <div class="c_our_team_details_img">-->
                            <!--        <img src="../pictures/testing picture/background_images/thi-default-person.png"/>-->
                            <!--    </div>-->
                            <!--    <div>-->
                            <!--        <div class="c_our_team_details_names">-->
                            <!--            <p>Ristopher mogren</p>-->
                            <!--            <p>Consultant General Surgeon</p>-->
                            <!--        </div>-->
                            <!--        <div class="c_our_team_details_social_networks">-->
                            <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--<div class="c_our_team_details c_our_team_details_C">-->
                            <!--    <div class="c_our_team_details_img">-->
                            <!--        <img src="../pictures/testing picture/background_images/thi-default-person.png"/>-->
                            <!--    </div>-->
                            <!--    <div>-->
                            <!--        <div class="c_our_team_details_names">-->
                            <!--            <p>Stephen Holland</p>-->
                            <!--            <p>Consultant Dietician</p>-->
                            <!--        </div>-->
                            <!--        <div class="c_our_team_details_social_networks">-->
                            <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="c_our_team_details c_our_team_details_D">-->
                            <!--    <div class="c_our_team_details_img">-->
                            <!--        <img src="../pictures/testing picture/background_images/thi-default-person.png"/>-->
                            <!--    </div>-->
                            <!--    <div>-->
                            <!--        <div class="c_our_team_details_names">-->
                            <!--            <p>Ping Zhang</p>-->
                            <!--            <p>Certified Nurse Practitioner</p>-->
                            <!--        </div>-->
                            <!--        <div class="c_our_team_details_social_networks">-->
                            <!--            <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-twitter"></i></a></p>-->
                            <!--            <p><a href="#"><i class="fa fa-instagram"></i></a></p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                        </div>

                    </div>
                </div>

            </div>




        </div>


        <section style="display: flex; flex-wrap: wrap; width: fit-content;">
            <img style="width: 100%;" src="pictures/testing picture/covid-19-pnp-nigeria-banner.png"/>
        </section>

        
        <div class="c_main_0_A_container">

            <div class="c_main_0_A_header">

                <h2>Shared Videos Health Talks</h2>

                <div><i class="fa fa-arrow-down"></i></div>

            </div>

            
            <div class="c_main_0_A_content_container">

                <div class="c_main_0_A" id="c_main_0_A_A">

                    <div>
                        <h2>World Hepatitis Day 2022</h2>
                    </div>

                    <div class="c_main_0_A_iframe_contains">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XYE9t1fpYO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div>
                        <span style="color:blue">#PublichealthinrealLife #worldhepatitisday #Hepatitistreatmentanddiagnosis</span>
                        <h4>World Hepatitis Day 2022 | Bringing hepatitis care closer to you | Dr. Toyin Asaolu</h4>
                    </div>

                </div>

                
                <!--<div class="c_main_0_A" id="c_main_0_A_B">-->

                <!--    <div>-->
                <!--        <h2>World Hepatitis Day 2022</h2>-->
                <!--    </div>-->

                <!--    <div class="c_main_0_A_iframe_contains">-->
                <!--        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XYE9t1fpYO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!--    </div>-->

                <!--    <div>-->
                <!--        <span style="color:blue">#PublichealthinrealLife #worldhepatitisday #Hepatitistreatmentanddiagnosis</span>-->
                <!--        <h4>World Hepatitis Day 2022 | Bringing hepatitis care closer to you | Dr. Toyin Asaolu</h4>-->
                <!--    </div>-->

                <!--</div>-->


            </div>

        </div>


        <!---main 1 page-->
        <div class="c_main_1">

            <div class="c_main_1_main">

                <div class="c_main_0_A_header" id="c_Medical_Articles">

                    <h2>Explore Health Article</h2>

                    <div><i class="fa fa-arrow-down"></i></div>

                </div>

                <div class="c_main_1_main_title_container">
                            
                    <div class="c_main_1_main_title_A">
                        <h2>Explore Article</h2>
                    </div>

                    <div class="c_main_1_main_title_B">
                        <h2><a href="#">See More</a></h2>
                    </div> 

                </div>   

                <div class="c_main_1_main_content_container">

                    <?php while($articled_post = mysqli_fetch_assoc($article_posts)) : ?>
                        
                        <div class="c_main_1_main_content_one">

                        

                            <span class="c_main_1_main_content_one_image">
                                <a target="_blank" href="<?= ROOT_URL?>post/blogs/article.php?id=<?= $articled_post['id'] ?>">
                                                                        <h2 style="font-size: medium;">
                                        <b>Article Title:</b> <?= substr($articled_post['title'], 0, 80) ?> 
                                    </h2>
                                    <img src="post/blogs/images/<?= $articled_post['image']?>">
                                </a>
                            </span>

                            <span class="c_main_1_main_content_one_text">
                                
                                    <a target="_blank" href="<?= ROOT_URL?>post/blogs/article.php?id=<?= $articled_post['id'] ?>">
                                
                                    <p>
                                      Published 
                                      <?= date("d M, Y - H:i", strtotime($articled_post['date_time']))?>
                                    
                                    </p>Read more...
                                    
                                    </a>
                                
                            </span>

                        </div>

                    <?php endwhile ?>


                </div>

            </div>            
            
        </div>



        <!---main 2 page-->
        <div class="c_main_2">

            <div class="c_main_0_A_header">

                <h2>Health is Wealth</h2>

                <div><i class="fa fa-arrow-down"></i></div>

            </div>

                    
            <div class="c_main_1_main_title_container">
                
                <div class="c_main_1_main_title_A">
                    <h2>Explore Blog</h2>
                </div>

                <div class="c_main_1_main_title_B">
                    <h2><a href="#">See More</a></h2>
                </div> 
        
            </div> 
                

            <div class="c_articles_row">


                <?php while($bloged_post = mysqli_fetch_assoc($blogs_posts)) : ?>

                    <div class="c_articles_column c_articles_column_A">

                        <div class="c_articles_column_header">
                            <span class="c_articles_column_category">
                                
                            <a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $posted_category['id']?>">

                            <?php if($posted_category = mysqli_fetch_assoc($postedCategories)) : ?>

                                    <?$posted_category['id']?><?= $posted_category['title']?>

                            <?php endif ?>

                            </a>

                            </span>
                            <img class="c_articles_column_image"  src="post/blogs/images/<?= $bloged_post['image']?>"/>
                        </div>

                        <div class="c_articles_column_body">

                            <div class="c_articles_column_body_title">
                                <h2 class="c_articles_column_body_title_header"><?= $bloged_post['title'] ?></h2>
                            </div><br>
            
                            <div class="c_articles_column_body_content">
                                <p class="c_articles_column_body_content_paragraph"><?= substr($bloged_post['description'], 0, 180) ?>
                                </p>
                            </div>

                            <div class="c_articles_column_body_readmore_content">
                                
                                <div class="c_readmore_container">
                                
                                    <div>

                                        <a class="c_articles_column_body_href" href="<?= ROOT_URL?>post/blogs/blog.php?id=<?= $bloged_post['id'] ?>">
                                        Read more 
                                        
                                        <i class="fa fa-arrow-right c_icon_general_styling c_icon_read_general_styling"></i>
                                
                                    </a> 


                                    <?php

                                        //fetch author from timob_health_international_users_account table using author_id

                                        $author_id = $bloged_post['author_id'];
                                        $author_query = " SELECT * FROM timob_health_international_users_account WHERE id=$author_id ";
                                        $author_result = mysqli_query($connectDataBase, $author_query);
                                        $author = mysqli_fetch_assoc($author_result);

                                    ?>

                                    <img src="post/blogs/images/<?= $author['user_picture']?>" width="20px" height="20px"/>By 
                                    <?= $author['account_name']?>

                            
                                    <span><?= date('M d, Y - H:i:s', strtotime($bloged_post['date_time']))?></span>
                                    
                                    </div>
            
        

                                </div>

    
                            </div>

                        </div>

                    </div>

                <?php endwhile ?>



                <!--<div class="c_articles_load_button_container">-->
                <!--    <button class="c_articles_load_button"><p> <i class="fa fa-plus"></i> Load More Blogs</p></button>-->
                <!--</div>-->

            </div> 

        </div>


        <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
        

    </main>


    <?php
     include 'footer.php';
    ?>





        <!---javascript links-->
        <script src="js/main.js?v=<?php echo time(); ?>"></script>
            


</body>


    </html>