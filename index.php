


<!DOCTYPE html>

<html>


<head>




    <!---meta names and contents-->
    <title>Timob Health International | Hepatitis Corner | Outreach</title>
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
        


        //fetch data from database

        $query_blog_post = " SELECT * FROM blog_post";

        $query_timob_health_international_users_account = " SELECT * FROM timob_health_international_users_account";

        $query_thi_post_categories = "SELECT * FROM thi_post_categories";

        // query datas
        $postedCategories = mysqli_query($connectDataBase, $query_thi_post_categories);

        $blogs_posts = mysqli_query($connectDataBase, $query_blog_post);

        $timob_health_international_users_account = mysqli_query($connectDataBase, $query_timob_health_international_users_account);

    
    ?>



        
    <main>

        <div id="c_modal_container" class="c_modal_container">

            <div class="c_modal_content">

                <span class="c_close_modal"> &times;</span>
                <!-- <p class="c_modal_content"></p> -->

            </div>


        </div>


        <div class="c_main_0">


                        
            <div
            style="--swiper-navigation-color: black; --swiper-pagination-color: black;"
            class="swiper mySwiper"
            >

            <div
                class="parallax-bg"
                style="
                background-image: url(https://evercaregroup.com/wp-content/uploads/2020/12/Vision_images-2048x1180.jpg);
                "
                data-swiper-parallax="-23%"
            >
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="c_swiper_details_container">
                        <!-- <div class="title" data-swiper-parallax="-300">Welcome to Timob Health International</div>
                        <div class="subtitle" data-swiper-parallax="-200">About Us</div> -->
                        <div class="text" data-swiper-parallax="-100">
                        <p>
                
                            Timob Health International believes healthcare is a fundamental human right for everyone, so it invests in emerging markets to bring quality driven health information to meet the needs of local and global people. The Organization was created in response to a global challenge to ensure well-being at all ages is provided to those living in developing and developed countries as a pillar to support sustainable economic development. 
                        </p>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide">
                    
                <div class="c_swiper_details_container">
                <div class="title" data-swiper-parallax="-300">Our Mission</div>
                <div class="subtitle" data-swiper-parallax="-200"></div>
                <div class="text" data-swiper-parallax="-100">
                    <p>
                        We are leading the way and transforming the traditional healthcare model through delivery quality health information in our platform, our impact driven model and our quality driven professional are providing quality healthcare information for millions of people across the Globe
                    </p>
                </div>
                </div>
                </div>

                <div class="swiper-slide">

                    
                <div class="c_swiper_details_container">
                <div class="title" data-swiper-parallax="-300">Our Values</div>
                <div class="subtitle" data-swiper-parallax="-200"></div>
                <div class="text" data-swiper-parallax="-100">
                    <p>
                    Our Quality, Integrity, Passion, Respect and Innovative allows us to improve our experience, increase caregiver engagement and ensure the health people across the globe.
                    </p>
                </div>
                </div>
                </div>

                <div class="swiper-slide">

                    
                    <div class="c_swiper_details_container">
                    <div class="title" data-swiper-parallax="-300">Our Values</div>
                    <div class="subtitle" data-swiper-parallax="-200"></div>
                    <div class="text" data-swiper-parallax="-100">
                        <p>
                        Our Quality, Integrity, Passion, Respect and Innovative allows us to improve our experience, increase caregiver engagement and ensure the health people across the globe.
                        </p>
                    </div>
                    </div>
                    </div>

            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> -->
            </div>


            <!-- 
                    <div class="c_slide_container active">
                        
                        <div class="c_slide">

                            <div class="c_content">
                                <h3>Welcome to Timob Health International</h3>
                                <p>Your health is as important to us as it is to you.
                                    Let’s take care of you because We Care..</p>

                                <a href="#" class="c_slide_content_btn">Learn more</a>
                                
                            </div>

                            <div class="c_image">
                                <img src="pictures/testing picture/MrDaniel_THI_logoImage 2022-11-27 at 11.00.19 - Copy.jpeg"/>
                            </div>


                        </div>

                    </div>

                    <div class="c_slide_container">
                        
                        <div class="c_slide">

                            <div class="c_content">
                                <h3>Any Health Concerns or Challenges</h3>
                                <p>Click on learn more and read our medical contents to guide you.</p>

                                <a href="pages/thi_medical_specialty.php" class="c_slide_content_btn">Learn more</a>
                            </div>

                            <div class="c_image">
                                <img src="pictures/testing picture/WhatsApp Image 2022-11-27 at 11.00.20.jpeg"/>
                            </div>


                        </div>

                    </div>

                    <div class="c_slide_container">
                        
                        <div class="c_slide">

                            <div class="c_content">
                                <h3></h3>
                                <p>Gastroenterology is an area of medicine that focuses on the health of the digestive system, or the gastrointestinal (GI) tract, as well as the liver. Gastroenterologists can treat everything from irritable bowel syndrome (IBS) to hepatitis C. Here’s a look at what these specialists do and when you should consider seeing one.</p>

                                <a href="#" class="c_slide_content_btn">Learn more</a>
                            </div>

                            <div class="c_image">
                                <img src="pictures/testing picture/WhatsApp Image 2022-11-27 at 11.00.19 (1).jpeg"/>
                            </div>


                        </div>

                    </div>

                    <div id="c_prev" class="c_landingPage_slideShow_btns_container"> <i class="fa fa-arrow-left c_landingPage_slideShow_btns_icons"></i> </div>
                    <div id="c_next" class="c_landingPage_slideShow_btns_container"> <i class="fa fa-arrow-right c_btn c_landingPage_slideShow_btns_icons"></i> </div> 
                
                -->

        </div>



        <div class="c_about_us_container">

            <div class="c_about_us c_about_us_A">

                <div>
                    <h2>Timob Health International is transforming Healthcare all over the globe</h2>


                    <a class="c_about_us_B_button" href="#"><p> <i class="fa fa-sitemap"></i> Learn More</p></a>

                    
                    <p>
                        
                        Timob Health International believes healthcare is a fundamental human right for everyone, so it invests in emerging markets to bring quality driven health information to meet the needs of local and global people and to educate them on how to prevent disease especially gastro and stomach infection.

                    </p>

                </div>

            </div>

            <div class="c_about_us c_about_us_B">

                <div>
                    <h2>About us</h2>

                    <p>
                        
                        We are leading the way and transforming the traditional healthcare model through delivery quality health information in our platform, our impact driven model and our quality driven professional are providing quality healthcare information for millions of people across the Globe.Timob Health International believes healthcare is a fundamental human right for everyone, so it invests in emerging markets to bring quality driven health information to meet the needs of local and global people.Our Quality, Integrity, Passion, Respect and Innovative allows us to improve our experience, increase caregiver engagement and ensure the health people across the globe.
                    
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
                        
                        We are committed to providing one of the best-in-class healthcare platform for all in wellness, health and preventive healthcare:
                    
                    </p>


                </div>

                <div>
                    <img src="pictures/testing picture/background_images/green-775x500.jpg"/>
                </div>

            </div>

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
                                    <p>We are passionate about healthcare and the care we provide</p>
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

                
                <h2 class="c_about_our_team_accordion">Leadership Team</h2>
                <div class="c_about_our_team_acordion_panel">

                    <div class="c_our_team_container_main">

                        <h4>

                            Our leadership team are the best in what they do and each brings a wealth of experience to support our vision of providing healthy living in the world.
                        </h4>

                        <div class="c_our_team_details_container">

                            <div class="c_our_team_details c_our_team_details_A">
                                <div class="c_our_team_details_img">
                                    <img src="../pictures/testing picture/background_images/thi-default-person.png"/>
                                </div>
                                <div>
                                    <div class="c_our_team_details_names">
                                        <p>Olutoyin Asaolu</p>
                                        <p>Director & Gastroenterology</p>
                                        <p><a href="#">Request appoinment</a></p>
                                    </div>
                                    <div class="c_our_team_details_social_networks">
                                        <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                        <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                        <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                        <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="c_our_team_details c_our_team_details_B">
                                <div class="c_our_team_details_img">
                                    <img src="../pictures/testing picture/background_images/thi-default-person.png"/>
                                </div>
                                <div>
                                    <div class="c_our_team_details_names">
                                        <p>Ristopher mogren</p>
                                        <p>Consultant General Surgeon</p>
                                        <p><a href="#">Request appoinment</a></p>
                                    </div>
                                    <div class="c_our_team_details_social_networks">
                                        <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                        <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                        <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                        <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="c_our_team_details c_our_team_details_C">
                                <div class="c_our_team_details_img">
                                    <img src="../pictures/testing picture/background_images/thi-default-person.png"/>
                                </div>
                                <div>
                                    <div class="c_our_team_details_names">
                                        <p>Stephen Holland</p>
                                        <p>Consultant Dietician</p>
                                        <p><a href="#">Request appoinment</a></p>
                                    </div>
                                    <div class="c_our_team_details_social_networks">
                                        <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                        <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                        <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                        <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="c_our_team_details c_our_team_details_D">
                                <div class="c_our_team_details_img">
                                    <img src="../pictures/testing picture/background_images/thi-default-person.png"/>
                                </div>
                                <div>
                                    <div class="c_our_team_details_names">
                                        <p>Ping Zhang</p>
                                        <p>Certified Nurse Practitioner</p>
                                        <p><a href="#">Request appoinment</a></p>
                                    </div>
                                    <div class="c_our_team_details_social_networks">
                                        <p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
                                        <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
                                        <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                        <p><a href="#"><i class="fa fa-instagram"></i></a></p>
                                    </div>
                                </div>
                            </div>

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

                
                <div class="c_main_0_A" id="c_main_0_A_B">

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


            </div>

        </div>


        <!---main 1 page-->
        <div class="c_main_1">

            <div class="c_main_1_main">

                <div class="c_main_0_A_header" id="c_Medical_Articles">

                    <h2>Explore articles</h2>

                    <div><i class="fa fa-arrow-down"></i></div>

                </div>

                <div class="c_main_1_main_title_container">
                            
                    <div class="c_main_1_main_title_A">
                        <h2>Explore articles</h2>
                    </div>

                    <div class="c_main_1_main_title_B">
                        <h2><a href="#">See More</a></h2>
                    </div> 

                </div>   

                <div class="c_main_1_main_content_container">
                    
                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.rasmussen.edu/degrees/health-sciences/blog/what-is-community-health/">
                                <img src="pictures/testing picture/background_images/what is community health.jpg">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>what is community health...</h2>
                                <p><a target="_blank" href="https://www.rasmussen.edu/degrees/health-sciences/blog/what-is-community-health/">rasmussen.edu</a></p>
                            
                        </span>

                    </div>

                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.who.int/thailand/news/detail/14-10-2020-Thailand-IAR-COVID19">
                                <img src="pictures/testing picture/background_images/dFQROr7oWzulq5Fa4Mu6IsArzmpD6PotDgAIOZAlmW98o42uw264Z0xe9IgeMjfKdX5.png">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>Thailand 10 for Health...</h2>
                                <p><a target="_blank" href="https://www.who.int/thailand/news/detail/14-10-2020-Thailand-IAR-COVID19">thairath.co.th</a></p>
                            
                        </span>

                    </div>

                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.medicalnewstoday.com/articles/150999">
                                <img src="pictures/testing picture/background_images/GettyImages-1207485707_header-1024x575-1.jpg">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>what is health, defining and p...</h2>
                                <p><a target="_blank" href="https://www.medicalnewstoday.com/articles/150999">medicalnewstoday.com</a></p>
                            
                        </span>

                    </div>     
                    
                                    
                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.medicinenet.com/what_is_health_and_wellness/article.htm">
                                <img src="pictures/testing picture/background_images/what-is-health-and-wellness.jpg">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>what is health and wellness...</h2>
                                <p><a target="_blank" href="https://www.medicinenet.com/what_is_health_and_wellness/article.htm">medicinenet.com</a></p>
                            
                        </span>

                    </div>

                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.annualreviews.org/doi/10.1146/annurev.publhealth.20.1.287">
                                <img src="pictures/testing picture/background_images/Happy-family-going-for-picnic-947036638_3869x2579-1-1024x683.jpg">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>Is enviromental health a soci...</h2>
                                <p><a target="_blank" href="https://www.annualreviews.org/doi/10.1146/annurev.publhealth.20.1.287">priviahealthh.com</a></p>
                            
                        </span>

                    </div>

                    <div class="c_main_1_main_content_one">

                        <span class="c_main_1_main_content_one_image">
                            <a target="_blank" href="https://www.cignahealthbenefits.com/en/">
                                <img src="pictures/testing picture/background_images/homepage_hero1.jpg">
                            </a>
                        </span>

                        <span class="c_main_1_main_content_one_text">
                            <h2>Cigna health benefit...</h2>
                                <p><a target="_blank" href="https://www.cignahealthbenefits.com/en/">cignahealthbenefit.com</a></p>
                            
                        </span>

                    </div> 

                </div>

            </div>            
            
        </div>



        <!---main 2 page-->
        <div class="c_main_2">

            <div class="c_main_0_A_header">

                <h2>Explore Health Blog</h2>

                <div><i class="fa fa-arrow-down"></i></div>

            </div>

            <div class="c_main_2_header" id="c_blog">
                    
                <div class="c_main_2_title">
                    <h1 class="c_main_2_title_text">Blogs Post</h1>
                </div>

                <div class="c_main_2_content_search">


                    <div class="c_search_container">

                        <form action="search.php" method="GET">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit" name="submit_search"><p>Search</p><i class="fa fa-search"></i></button>
                        </form>

                    </div>

                    
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
                            </div>
            
                            <div class="c_articles_column_body_content">
                                <p class="c_articles_column_body_content_paragraph">
                                    <?=  $bloged_post['description']?>
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

                            
                                    <span><?= date("M d, Y - H:i", strtotime($bloged_post['date_time']))?></span>
                                    
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

        </div>


        <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
        

    </main>


    <?php
     include 'footer.php';
    ?>





        <!---javascript links-->
        <script src="js/main.js"></script>
            
        <script>



        var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        spaceBetween: 30,
        centeredSlides: false,
        autoplay: {
          delay: 1010,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      
          </script>

</body>


    </html>