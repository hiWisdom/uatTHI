<!DOCTYPE html>

<html>


    <head>




        <!---meta names and contents-->
       <title> Medical Specialty | Timob Health International | Hepatitis Corner | Outreach</title>
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

        <!-- <link rel="stylesheet" href="../../css/pages_css/pages_main.css"/>
        <link rel="stylesheet" href="../../css/pages_css/c_general_pages_styling.css"/>
        <link rel="stylesheet" href="../../css/main.css"/>
        <link rel="stylesheet" href="../../css/font_css/fontawesome.css"/> -->



        <link rel="stylesheet" href="../../css/pages_css/pages_main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/font_css/fontawesome.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/main.css?v=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="../../css/pages_css/c_general_pages_styling.css?v=<?php echo time(); ?>"/>
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
            $query = " SELECT * FROM blog_post WHERE category_id=$id ORDER BY date_time DESC";
            $result = mysqli_query($connectDataBase, $query);
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



            <!-- <div class="c_general_image"></div> -->

            <div class="c_content">

                <div class="c_content_title_header_container c_general_div">

                    <div class="c_c_t_h_c c_content_title_container c_general_container">

                        <div class="c_general_one" id="Different_Medical_Specialists_Do">

                            <h1 class="c_content_title c_general">
                                What Do Different Medical Specialists Do?
                            </h1>

                            <ul class="c_content_title_list">

                                <?php

                                $all_categories_query = " SELECT * FROM thi_post_categories";
                                $all_categories = mysqli_query($connectDataBase, $all_categories_query);
                                
                                ?>

                                <?php while($category = mysqli_fetch_assoc($all_categories)) :?>

                                <a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $category['id']?>"><li class="c_footer_two_content_list_items"><?= $category['title']?></li></a>


                                <?php endwhile ?>

                        
                            </ul>
                            
                        </div>


                        <div class="c_medical_general_two">


                                <section class="c_general_two_sections c_general_two_sections_medical_specialty" id="Gastroenterologist_content">

                                    <div class="c_medical_specialists_header">

                                        <div class="c_medical_specialists_header_title">
                                            <h2>

                                                <?php
                                                //fetch category from categories table using category id of post
                                                
                                                if(isset($_GET['id'])) {
                                                $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
                                                $category_id = $id;
                                                $category_query = " SELECT * FROM thi_post_categories WHERE id=$id";
                                                $category_result = mysqli_query($connectDataBase, $category_query);
                                                $category = mysqli_fetch_assoc($category_result);
                                                echo $category['title'];
                                                }
                                                ?>
                                        
                                            </h2>
                                        </div>

                                        <div class="c_medical_specialists_faq">
                                            <ul>
                                                <h3>Frequently Asked Questions</h3>

                                                <li class="c_faq_accordion active">What is a <?=$category['title']?> ?</li>
                                                <div class="c_faq_acordion_panel">
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </div>

                                                <li class="c_faq_accordion">Who is a <?=$category['title']?> ?</li>
                                                <div class="c_faq_acordion_panel">
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </div>

                                                <li class="c_faq_accordion">Importance of a <?=$category['title']?> ?</li>
                                                <div class="c_faq_acordion_panel">
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </div>

                                                <li class="c_faq_accordion">Can a <?=$category['title']?> treat ulcer?</li>
                                                <div class="c_faq_acordion_panel">
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </div>

                                                <li class="c_faq_accordion">I am having stomach pain which doctor can i see?</li>
                                                <div class="c_faq_acordion_panel">
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </div>

                                            </ul>
                                        </div>

                                        <div class="c_medical_specialists_header_image">
                                            <img src="../../pictures/testing picture/background_images/Gastroenterology.jpg"/>
                                        </div>

                                        <div class="c_medical_specialists_table_of_content">

                                            <ul> 

                                            <h4>Table of Content</h4>
                                                <li><a href="#Gastroenterologist"><?=$category['title']?></a></li>
                                                <li><a href="#Whatdoesagastroenterologistdo">What does a <?=$category['title']?> do?</a></li>
                                                <li><a href="#Education">Education</a></li>
                                                <li><a href="#Procedures">Procedures</a></li>
                                                <li><a href="#Whentoseeagastroenterologist">When to see a <?=$category['title']?></a></li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="c_medical_specialists_body">

                                        <section class="c_medical_specialists_body_sections c_medical_specialists_body_section_A" id="Gastroenterologist">

                                            <h3>
                                            <?=$category['title']?>?
                                            </h3>

                                            <div class="c_medical_specialists_body_paragraph">

                                                <p>
                                                    Gastroenterology is an area of medicine that focuses on the health of the digestive system, or the gastrointestinal (GI) tract, as well as the liver. Gastroenterologists can treat everything from irritable bowel syndrome (IBS) to hepatitis C. Here’s a look at what these specialists do and when you should consider seeing one.
                                                </p>

                                            </div>

                                        </section>

                                        <section class="c_medical_specialists_body_sections c_medical_specialists_body_section_B" id="Whatdoesagastroenterologistdo">

                                            <h3>
                                                What does a <?=$category['title']?> do?
                                            </h3>

                                            <div class="c_medical_specialists_body_paragraph">

                                                <p>
                                                    Gastroenterologists primarily diagnose and treat GI conditions. If your primary care physician has noticed an issue involving your GI tract, they will most likely recommend you see a gastroenterologist for a more detailed assessment of the issue.
                                                </p>
    
                                                <p>
                                                    Gastroenterologists perform endoscopic procedures, in which they use specialized instruments to view the GI tract and make a diagnosis.
                                                </p>
                                                    
                                                <p>
                                                    They don’t perform surgery, though in some cases, they may work closely with a GI surgeon. They primarily work in clinic or hospital settings.
                                                </p>

                                            </div>

                                        </section>
                                        
                                        <section class="c_medical_specialists_body_sections c_medical_specialists_body_section_C" id="Education">

                                            <h3>
                                            <?=$category['title']?> Education?
                                            </h3>

                                            <div class="c_medical_specialists_body_paragraph">

                                                <p>
                                                    The steps to becoming a gastroenterologist typically include:
                                                </p>

                                                <ul>
                                                    <li>a. 4-year college degree.</li>
                                                    <li>a. 4 years of medical school.</li>
                                                    <li>a. 3-year training program, called a residency, in internal medicine, which includes work alongside experienced gastroenterologists and professional mentorship.</li>
                                                </ul>

                                                <p>
                                                    After you complete your residency, you must complete a 2- or 3-year fellowship to receive more specialized training in this field. This includes training in endoscopy, which is a nonsurgical procedure doctors use to examine the GI tract.
                                                    
                                                </p>

                                                <p>
                                                    Once you’ve completed your training, you must pass a specialty certification exam for gastroenterologists. The American Board of Internal Medicine certifies you upon successful completion of the exam.
                                                </p>

                                            </div>

                                        </section>

                                        <section class="c_medical_specialists_body_sections c_medical_specialists_body_section_D" id="Procedures">

                                            <h3>
                                                What procedures do <?=$category['title']?> perform?
                                            </h3>
                                            
                                            <div class="c_medical_specialists_body_paragraph">

                                            <p>
                                                Gastroenterologists perform a range of nonsurgical procedures. This can include:
                                            </p>


                                            <ul>
                                                <li>upper endoscopy, which helps diagnose conditions of the food pipe, stomach, and small intestine</li>
                                                <li>endoscopic ultrasounds, which examine the upper and lower GI tract, as well as other internal organs</li>
                                                <li>colonoscopies, which can detect colon cancer or colon polyps</li>
                                                <li>endoscopic retrograde cholangiopancreatography, which identifies stones or tumors in the bile duct area</li>
                                                <li>sigmoidoscopy, which evaluates blood loss or pain in the lower large bowel</li>
                                                <li>liver biopsy, which assesses inflammation and fibrosis in the liver</li>
                                                <li>capsule endoscopy and double balloon enteroscopy, which both examine the small intestine</li>
                                                <li>feeding tube insertion for inserting feeding tubes in the abdomen</li>
                                            </ul>

                                            </div>

                                        </section>

                                        <section class="c_medical_specialists_body_sections c_medical_specialists_body_section_E" id="Whentoseeagastroenterologist">

                                            <h3>
                                                When should you see a <?=$category['title']?>?
                                            </h3>

                                            <div class="c_medical_specialists_body_paragraph">

                                                <p>
                                                    Your primary care doctor may refer you to a gastroenterologist if you:
                                                </p>
    
    
                                                <ul>
                                                    <li>have unexplained blood in your stool</li>
                                                    <li>have unexplained difficulty swallowing</li>
                                                    <li>are experiencing abdominal pain</li>
                                                    <li>are experiencing digestion issues, such as constant constipation or diarrhea</li>
                                                    <li>are experiencing constant acid reflux or heartburn</li>
                                                </ul>

                                                <p>
                                                    If you’re over the age of 50, you may also want to meet with a gastroenterologist for preventive care, as you may have an increased risk of colon cancer.
                                                </p>

                                                <p>
                                                    If you’re in this age group, you should get screened regularly. If you have a relative with colon cancer, you should ask your doctor about when to start getting screenings.
                                                </p>
    
                                            </div>

                                        </section>

                                        <div class="c_medical_specialists">

                                            <div class="c_medical_specialists_posted_time">

                                                <div class="c_medical_specialists_posted_times c_medical_specialists_posted_time_A">

                                                    <p>Last medically reviewed on October 25, 2021</p>

                                                </div>

                                                <div class="c_medical_specialists_posted_times c_medical_specialists_posted_time_B">
                                                    
                                                    <p>How we reviewed this article:</p>

                                                    <div class="c_medical_specialists_posted_times_button_container">

                                                        <button class="c_medical_specialists_posted_times_button c_medical_specialists_posted_times_sources_button"><i class="fa fa-stack-exchange"></i><p>SOURCES</p></button>

                                                        

                                                        <button class="c_medical_specialists_posted_times_button c_medical_specialists_posted_times_history_button"><i class="fa fa-stack-exchange"></i><p>HISTORY</p></button>
                                                        
    
                                                    </div>

                                                    <div class="c_medical_specialists_posted_times_changes">

                                                        <div class="c_article_sources_div">
                                                            <div>

                                                                <h4>Article Sources</h4>
                                                                <ul>
                                                                    <li><a href="#">News Radio</a></li>
                                                                    <li><a href="#">News Plug</a></li>
                                                                    <li><a href="#">Health News Line</a></li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                        
                                                        <div class="c_article_history_div">

                                                            <div>

                                                                <h4>Article History of Changes</h4>
                                                                <ul>
                                                                    <li><a href="#">21/11/2017 - edited by Dr. Asaolu</a></li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="c_medical_specialists_share_article">

                                                <p>Share this article</p>

                                                <div class="c_medical_specialists_share_article_buttons">

                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-print"></i> 
                                                    </a>

                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-envelope-square"></i> 
                                                    </a>

                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-twitter"></i> 
                                                    </a>

                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-linkedin"></i> 
                                                    </a>

                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-whatsapp"></i> 
                                                    </a>

                                                </div>

                                            </div>
                                            
                                            <div class="c_medical_specialists_feedback">

                                                <p>Was this article helpful?</p>

                                                <div class="c_medical_specialists_feedback_buttons">

                                                    <button id="c_medical_specialist_article_feedback_yes" class="c_medical_specialist_article_feedback c_medical_specialist_article_feedback_yes">Yes</button>
                                                    <button id="c_medical_specialist_article_feedback_no" class="c_medical_specialist_article_feedback c_medical_specialist_article_feedback_no">No</button>

                                                </div>

                                            </div>

                                        </div>



                                    </div>


                                    
                                    
                            
                                </section>

                                <div class="c_articles_row">


                                <?php if(mysqli_num_rows($result) > 0) :?>
                                    
                                    <?php while($bloged_post = mysqli_fetch_assoc($result)) : ?>

                                        <div class="c_articles_column c_articles_column_A">

                                            <div class="c_articles_column_header">
                                                <span class="c_articles_column_category">



                                                </span>
                                                <img class="c_articles_column_image"  src="images/<?= $bloged_post['image']?>"/>
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


                                <?php else :?>

                                    <div class="c_alert_message c_error_message">
                                        <p> <?= "No Post found for this category." ?> </p>
                                    </div>

                                <?php endif ?>

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
        <script src="../../js/medical_specialty.js?v=<?php echo time(); ?>"></script>
        <script src="../../js/main.js?v=<?php echo time(); ?>"></script>
        <script src="../../js/pages_js/pages_main.js?v=<?php echo time(); ?>"></script>


    </body>


</html>