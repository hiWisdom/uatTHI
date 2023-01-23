






<!DOCTYPE HTML>

    <htnl>


        <head>




                <!---meta names and contents-->
            <title>Blog Post | timob health international</title>
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
            <link rel="stylesheet" href="../../css/pages_css/c_contact.css?v=<?php echo time();?>"/>
            <link rel="stylesheet" href="../../css/pages_css/pages_main.css?v=<?php echo time();?>"/>
            <link rel="stylesheet" href="../../css/main.css?v=<?php echo time();?>"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

            <!-- Link Swiper's CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
            

            <!---favicon-->
            <link rel="icon" type="image/x-icon" href="../../pictures/testing picture/faviLogo.jpg">

            <!---js link-->
            <script src="//code.jivosite.com/widget/2umIxmovzj" async></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


            

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

                    $query_post_comment = " SELECT * FROM blog_post_comment WHERE  id=$id";

                    $result = mysqli_query($connectDataBase, $query);

                    
                    $postedComment = mysqli_query($connectDataBase, $query_post_comment);

                    $post = mysqli_fetch_assoc($result);
                    
                    $commentPost = mysqli_fetch_assoc($postedComment);
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



                <div class="c_content">

                        <!-- <div class="c_main_2_header" id="c_blog">
                            
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
                            
                        </div> -->

                        <div class="c_content_title_header_container">

                            <div class="c_c_t_h_c c_content_title_container">
                                <h1 class="c_content_title">
                                    <?= $post['title']?> &nbsp
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

                                <p><sub>by</sub></p> <?= $author['account_name']?> <img src="<?=ROOT_URL?>post/blogs/images/<?= $author['user_picture']?>"/>  &nbsp &nbsp
                                


                                <span>
                                    <p>
                                        <?= date("M d, Y - H:i", strtotime($post['date_time']))?>
                                    </p>
                                </span>

                            
                            </div>

                            <!-- <div class="c_c_t_h_c c_table_of_content_modal">
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
                            </div> -->

                        </div>




                            <div class="c_content_paragraph">

                                
                                    <div class="c_content_paragraph_one">
                                        <img class="c_share_social_image" src="images/<?= $post['image']?>"/> 
                                    </div>


                                    <div class="c_content_paragraph_two">

                                        <?=  $post['description']?>

                                    </div>

                            </div>

                            <!-- <div class="c_content_like_dislike_container">

                                <div class="c_content_like_dislike">

                                    <div class="c_content_like">
                                        <button class="c_content_like_button"><span class="c_liked_icon"><i class="far fa-thumbs-up"></i></span> Like <span class="c_user_content_like_count">0</span></button>
                                    </div>

                                    <div class="c_content_dislike">
                                        <button class="c_content_dislike_button">Dislike <span class="c_user_content_like_count"></span></button>
                                    </div>

                                </div>

                            </div> -->

                            <div class="c_share_content_button_container">

                              <p class="c_share_content_title">
                                    <b>Share Article With Friends <i>Via</i></b>
                                </p>

                                  <!-- 

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

                                </div> -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->

<div class="addthis_inline_share_toolbox">


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63c7066844ef0df4"></script>

</div>


                            </div>
                            </div>



                            <div class="c_posted_comment_container bg-white p-2">

                                <?php

                                    //fetch comment post from database if the id is set

                                        // $query_post_comment = " SELECT * FROM blog_post_comment WHERE id=$id";
                                        // $postedComment = mysqli_query($connectDataBase, $query_post_comment);
                                    
                                    
                                    //fetch commentauthor from timob_health_international_users_account table using author_id

                                    // $commentauthor_id = $postedComment['author_id'];
                                    // $commentauthor_query = " SELECT * FROM timob_health_international_users_account WHERE id=$author_id ";
                                    // $commentauthor_result = mysqli_query($connectDataBase, $commentauthor_query);
                                    // $commentPostAuthor = mysqli_fetch_assoc($commentauthor_result);

                                    //fetch blog comment post data from database
                                    // if(isset($_GET['id'])) {
                                    //     $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
                                    //     $query_post_comment = " SELECT * FROM blog_post_comment WHERE id=$id";
                                    //     $result = mysqli_query($connectDataBase, $query);
                                    //     $post = mysqli_fetch_assoc($result);
                                    // }

                                            //fetch blog data from database

                                    // $query_blog_post = " SELECT * FROM blog_post";

                                    // // query datas
                                    // $blogs_posts = mysqli_query($connectDataBase, $query_blog_post);

                                    // $query_post_comment = " SELECT * FROM blog_post_comment";

                                    // // query datas
                                    // $postedComment = mysqli_query($connectDataBase, $query_post_comment);

                                    

                                ?>

                               
                            

                                    <div>
                                        
                                        <div class="d-flex flex-row user-info">
                                            <img src="<?=ROOT_URL?>pictures/testing picture/background_images/thi-default-person.png" alt="" height="25" width="30" class="rounded-circle">
                                            <div class="d-flex flex-column justify-content-start nl-2">
                                                <span class="d-block font-weight-boldn name"></span><?= date("M d, Y - H:i", strtotime($commentPost['date_time']))?>
                                            </div>
                                        </div>

                                        <div class="nt-2">
                                            <p class="comment-text"><?= $commentPost['comment_post']?></p>
                                        </div>

                                        <!-- <div class="bg-white">
                                            <div class="d-flex flex-row fs-12">
                                                <div class="like p-2 cursor">
                                                    <i class="fa fa-thumbs-o-up"></i>
                                                    <span class=""nl-1>like</span>
                                                </div>
                                                <div class="d-flex flex-row fs-12">
                                                    <div class="like p-2 cursor">
                                                        <i class="fa fa-commenting-o"></i>
                                                        <span class=""nl-1>comment</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row fs-12">
                                                    <div class="like p-2 cursor">
                                                        <i class="fa fa-share"></i>
                                                        <span class=""nl-1>share</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                

                            </div>

                            <form id="c_article_form" class="c_article_feedback_form" action="../../php/c_blog_comment_form_submit.php" method="post" >

                                <div class="c_form_title">
                                    <h2>
                                        Leave us your comment.
                                    </h2>
                                </div>

                                <div class="col-nd-8">
                                    <div class="bg-light p-2">

                                        <div class="d-flex flex-row align-items-start">

                                            <img src="<?=ROOT_URL?>post/blogs/images/<?= $author['user_picture']?>" alt="" class="rounded-circle" width="40">
                                            <textarea class="form-control nl-1 shadow-none textarea" name="c_comment_input"></textarea>

                                        </div>

                                        <div class="nt-2 text-right">
                                            <button class="btn btn-success btn-sm shadow-none" value="post comment" type="submit" name="c_post_comment">post comment</button>
                                            <button class=" btn btn-outline-danger btn-sm- nl-1 shadow-none" type="button">cancel</button>
                                        </div>
                                        
                                    </div>
                                </div>

                            </form>

                                        



                </div>

                <a id="c_back_to_top" class="c_back_to_top" href="#"><i class="fa fa-arrow-up c_back_to_top_icon"></i></a>
    

            </main>


            <?php
                include '../../footer.php';
            ?>






            <!---javascript links-->
            <script src="../../js/main.js?v=<?php echo time();?>"></script>
            <script src="../../js/pages_js/pages_main.js?v=<?php echo time();?>"></script>


        </body>


    </html>