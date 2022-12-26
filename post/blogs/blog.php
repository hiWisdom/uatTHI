






<!DOCTYPE HTML>

<htnl>


    <head>




        <!---meta names and contents-->
       <title>Blog Post</title>
       <meta charset="UTF-8">
       <meta name="author" content="blog post | Timob Health International | Hepatitis Corner | Outreach"/>
       <meta http-equiv="Content-Type" content="text/php; charset=UTF-8" >
       <meta name="keywords" content="Timob Health International | Hepatitis Corner | Outreach">
       <meta name="description" content="Check out Timob Health International | Hepatitis Corner | Outreach here, health tips and healthy living. Infection prevention.">
       <meta name="robots" content="noindex, nofollow">
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="lp-version" content="v6.23.11">


        <!---stylesheet links-->
        <link rel="stylesheet" href="../../css/pages_css/pages_main.css"/>
        <link rel="stylesheet" href="../../css/font_css/fontawesome.css"/>
        <link rel="stylesheet" href="../../css/main.css"/>
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



        //fetch post from database if the id is set

        if(isset($_GET['id'])) {
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            $query = " SELECT * FROM blog_post WHERE id=$id";
            $result = mysqli_query($connectDataBase, $query);
            $post = mysqli_fetch_assoc($result);
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




            <div class="c_content">

            <div class="c_main_2_header" id="c_blog">
                        
                        <div class="c_main_2_title">
                            <h1 class="c_main_2_title_text">Blogs Post</h1>
                        </div>
    
                        <div class="c_main_2_content_search">
    
    
                            <div class="c_search_container">
    
                                <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><p>Search</p><i class="fa fa-search"></i></button>
                                </form>
    
                            </div>
    
                            
                        </div>
                        
                    </div>

                <div class="c_content_title_header_container">

                    <div class="c_c_t_h_c c_content_title_container">
                        <h1 class="c_content_title">
                            <?= $post['title']?>
                        </h1>
                    </div>

                    <div class="c_c_t_h_c c_blog_author">


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

                    <div class="c_c_t_h_c c_table_of_content_modal">
                        <div class="c_table_of_content_button_container">
                            <button class="c_table_of_content_button">
                                <div class="c_table_of_content_button_bar">
                                    <div class="c_table_of_content_button_bar1"></div>
                                    <div class="c_table_of_content_button_bar2"></div>
                                    <div class="c_table_of_content_button_bar3"></div>
                                </div>
                                <p class="c_Table_of_content">Table of content</p>
                            </button>
                        </div>

                        <div class="c_table_of_content_container">
                            <div class="c_table_of_content_close_button_container">
                                <button class="c_table_of_content_close_button">
                                    <div class="c_table_of_content_button_close_bar">
                                        <div class="c_table_of_content_button_bar1_close"></div>
                                        <div class="c_table_of_content_button_bar2_close"></div>
                                        <div class="c_table_of_content_button_bar3_close"></div>
                                    </div>
                                      <p class="c_Table_of_content"> Table of content</p>
                                </button>
                            </div>

                            <div class="c_table_of_content_details_container">
                                <ul class="c_table_of_content_container_list">
                                    <li class="c_table_of_content_list_details">
                                        <a href="#c_paragraph_three_A">Information from epidemiolog</a>
                                    </li>

                                    <li class="c_table_of_content_list_details">
                                        <a href="#c_paragraph_three_B">environmental health policy</a>
                                    </li>
                                    
                                    <li class="c_table_of_content_list_details">
                                    <a href="#c_paragraph_three_C">engineering and law</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="c_content_paragraph_container">

                    <div class="c_content_paragraph">

                        
                            <div class="c_content_paragraph_one">
                                 <img class="c_share_social_image" src="images/<?= $post['image']?>"/> 
                            </div>


                            <div class="c_content_paragraph_two">

                                <?=  $post['description']?>

                                <!-- <p class="c_paragraph_three_A" id="c_paragraph_three_A">
                                    <h3 class="c_content_paragraph_header"> Information from epidemiolog </h3>
                                    Information from epidemiology, toxicology, and exposure science can be combined to conduct a risk assessment for specific chemicals, mixtures of chemicals or other risk factors to determine whether an exposure poses significant risk to human health  (exposure would likely result in the development of pollution-related diseases). This can in turn be used to develop and implement environmental health policy that, for example, regulates chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of 
                                </p>

                                <p class="c_paragraph_three_B" id="c_paragraph_three_B">
                                    <h3 class="c_content_paragraph_header"> environmental health policy </h3>
                                    environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, 2005environmental health policy that, for example, regulates chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, 2005.environmental health policy that, for example, regulates  chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, 2005.environmental health policy that, for example, regulates chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of 
                                </p>

                                <p class="c_paragraph_three_C" id="c_paragraph_three_C">
                                    <h3 class="c_content_paragraph_header"> engineering and law </h3>
                                    engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, 2005.environmental health policy that, for example, regulates chemical emissions, or imposes standards for proper sanitation.[16][page needed] Actions of engineering and law can be combined to provide risk management to minimize, monitor, and otherwise manage the impact of exposure to protect human health to achieve the objectives of environmental health policy.ConcernsOverview of main health effects on humans from some common types of pollution.[17][18][19]FEMA/EPA Hazardous Materials Team removing hazards left in the wake of Hurricane Katrina, 2005..

                                </p> -->

                            </div>

                    </div>

                    <div class="c_content_like_dislike_container">

                        <div class="c_content_like_dislike">

                            <div class="c_content_like">
                                <button class="c_content_like_button"><span class="c_liked_icon"><i class="far fa-thumbs-up"></i></span> Like <span class="c_user_content_like_count">0</span></button>
                            </div>

                            <div class="c_content_dislike">
                                <button class="c_content_dislike_button">Dislike <span class="c_user_content_like_count"></span></button>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="c_share_content_button_container">

                    <p class="c_share_content_title">
                        Share Story :
                    </p>
                    
                    <div class="c_social_link_container">
                            
                        <a href="#" target="_blank" class="c_facebook_sharing_link c_social_content_icons_share_link">
                            <div class="c_sharing_link_icon">
                                <i class="fa fa-facebook c_facebook_shared"></i> 
                            </div>
                            <div class="c_sharing_link_text">
                                <p class="c_share_button_text   c_share_on_facebook">Share on Facebook</p>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="c_twitter_sharing_link c_social_content_icons_share_link">
                            <div class="c_sharing_link_icon">
                                <i class="fa fa-twitter c_twitter_shared"></i>
                            </div>
                            <div class="c_sharing_link_text">
                                <p class="c_share_button_text c_share_on_twitter">Share on Twitter</p>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="c_linkedin_sharing_link c_social_content_icons_share_link">
                            <div class="c_sharing_link_icon">
                                <i class="fa fa-linkedin c_linkedin_shared"></i>
                            </div>
                            <div class="c_sharing_link_text">
                                <p class="c_share_button_text       c_share_on_linkedin">Share on Linkedin</p>
                            </div>
                        </a>

                        <a href="#" target="_blank" class="c_whatsapp_sharing_link c_social_content_icons_share_link">
                            <div class="c_sharing_link_icon">
                                <i class="fa fa-whatsapp c_whatsapp_shared"></i>
                            </div>
                            <div class="c_sharing_link_text">
                                <p class="c_share_button_text c_share_on_whatsapp">Share on Whatsapp</p>
                            </div>
                        </a>

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