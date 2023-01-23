<?php

    


    //fetch current user from the database

    if(isset($_SESSION['user-id'])) {
        $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
        $query = " SELECT user_picture FROM timob_health_international_users_account WHERE id= $id ";
        $result = mysqli_query($connectDataBase, $query);
        $avatar = mysqli_fetch_assoc($result);
    }

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


<!DOCTYPE html>

<html>


    <footer>

    <div class="c_footer_container">

    <div class="c_footer c_footer_one" id="c_about_us">

        <div class="c_Subscribe_form">

            <div class="c_subscribe_form_container">

                <div class="c_landing_page_subscribe_form">
                
                    <form method="post" action="#" class="c_subscribe_form_process c_subscribe_main_form" id="c_subscribe_form_process">

                        <div class="c_subscribe_title_container">
                                    <div class="c_footer_image_logo_container">
            <p class="c_footer_image_logo">
                <img src="<?= ROOT_URL ?>pictures/testing picture/THI Jpeg 1.jpg"/>
            </p>
        </div>

        <div class="c_footer_content_text_container">    
            <p class="c_footer_paragraph c_footer_paragraph_for_one">
                Your health is as important to us as it is to you.<br> Let’s take care of you because We Care.
            </p>
        </div>
                            <h2 class="c_Subscribe_to_our_Newsletter">
                                <i class="fa fa-envelope-open-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_Subscribe_to_our_Newsletter"></i><br>Subscribe to our Newsletter</h2>
                        </div>

                        <input type="text" value="" placeholder="Name" name="name" class="c_subscribe_input_types" required>
                        <input type="text" value="" placeholder="Email address" class="c_subscribe_input_types" name="mail" required>

                        <label class="c_subscribe_Daily_Newsletter">
                            <input type="checkbox" checked="checked" name="subscribe"> <span class="c_subscribe_Daily_Newsletter_text">Daily Newsletter</span> 
                        </label>
                    
                        <div class="c_Subscribe_button_container">
                        <input type="submit" value="Subscribe" class="c_Subscribe_submit_button">
                        </div>
                    </form>

                </div>

            </div>


        </div>
        
        <div class="c_contact_map">

                    <div class="c_contact_details_three c_contact_details">

                        <div>

                            <p class="c_contact_map_text_container">
                                <span class="c_contact_map_text c_contact_map_text_A"> 
                                    <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling c_icon_map_location"></i> Locate us </span> <span class="c_contact_map_text c_contact_map_text_B">:</span> <br><span class="c_contact_map_text c_contact_map_text_C"> Head Office: 10, Odelola Street, Off nnobi Surulere Lagos. </span> <span class="c_contact_map_text c_contact_map_text_D">|</span> 

                            </p>

                            <div class="c_contact_map">            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63427.97620267909!2d3.3087804184700915!3d6.490184080418627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c0f7bc8de87%3A0x62650fcb3d2c8fb1!2sSurulere%2C%20101241%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1663881357757!5m2!1sen!2sng" >
                
                                </iframe>
                    
                            </div>

                        </div>

                        <div>

                            <p class="c_contact_map_text_container">
                                <span class="c_contact_map_text c_contact_map_text_A"> 
                                    <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling c_icon_map_location"></i> Locate us </span> <span class="c_contact_map_text c_contact_map_text_B">:</span> <br>
                                    <span class="c_contact_map_text c_contact_map_text_C"> Branch Office: 3, Oludele fakunle Street, Sawmill, Ifako, Gbagada Lagos. </span> <span class="c_contact_map_text c_contact_map_text_D">|</span> 

                            </p>

                            <div class="c_contact_map">            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3963.7234761273753!2d3.3920744147289876!3d6.556550524597339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1672345253004!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                            </div>
                            
                        </div>

                    </div>

        </div>


    </div>


    <div class="c_footer c_footer_two"> 
                

        <div class="c_footer_two_contain">
            
            <ul class="c_footer_two_content_list">


                <h5 class="c_more_content c_more_content_A">
                    <i class="fa fa-newspaper-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_related_articles"></i>FEATURED ARTICLES</h5>

                    
                <?php if(mysqli_num_rows($featured_result) == 1) :?>



                        <a class="c_footer_two_content_hyperlink" href="<?= ROOT_URL?>post/blogs/blog.php?id=<?= $bloged_post['id'] ?>">
                            <li class="c_footer_two_content_list_items c_footer_RELATED_ARTICLES">
                                <img src="<?= ROOT_URL?>post/blogs/images/<?= $featured['image']?>" class="c_related_articles">
                                    <p class="c_related_articles_paragraph"><?= substr($featured['description'], 0, 25)?>
                                        <span>...</span> <br> <a href="<?= ROOT_URL?>post/blogs/blog.php?id=<?= $bloged_post['id'] ?>">Read more</a>
                                    </p>
                            </li>
                        </a>


                <?php endif ?>


            </ul>


        </div>

        <div class="c_footer_two_contain">

            <ul class="c_footer_two_content_list">
                <h5 class="c_more_content c_more_content_C">
                    <i class="fa fa-address-card-o c_icon_general_styling c_icon_footer_five_general_styling c_icon_about_us"></i>ABOUT US</h5>
            <a href="<?= ROOT_URL?>pages/thi_contact.php"><li class="c_footer_two_content_list_items">Contact Us</li></a>
            <a href="<?= ROOT_URL?>pages/thi_Privacy_preferences.php"><li class="c_footer_two_content_list_items">Privacy Policy</li></a>
            <a href="<?= ROOT_URL?>pages/thi_Personal_data_protection_policy.php"><li class="c_footer_two_content_list_items">Terms of Use</li></a>
            
            </ul>

        </div>

        <div class="c_footer_two_contain">

            <ul class="c_footer_two_content_list">
                
            <h5 class="c_more_content c_more_content_D"><i class="fa fa-link c_icon_general_styling c_icon_footer_five_general_styling c_icon_related_articles"></i>QUICK LINKS</h5>

            <?php

                $all_categories_query = " SELECT * FROM thi_post_categories";
                $all_categories = mysqli_query($connectDataBase, $all_categories_query);
                
            ?>

            <?php while($category = mysqli_fetch_assoc($all_categories)) :?>

            <a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $category['id']?>"><li class="c_footer_two_content_list_items"><?= $category['title']?></li></a>



            <?php endwhile ?>


            
            </ul>

        </div>
        
        <div class="c_footer_two_contain">

            <ul class="c_footer_two_content_list">
                <h5 class="c_more_content c_more_content_C">
                    <i class="fa fa-info c_icon_general_styling c_icon_footer_five_general_styling c_icon_about_us"></i> FIND US 24/7</h5>
                    
                    <span class="c_footer_five_container_paragraph_one">
                        <p class="c_contact_href">
                            <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling"></i><b> Head Office:</b> 10, Odelola Street, Off nnobi Surulere Lagos.
                            <br><br>
                            <i class="fa fa-map-marker c_icon_general_styling c_icon_footer_five_general_styling"></i> <b>Branch Office:</b> 3, Oludele fakunle Street, Sawmill, Ifako, Gbagada Lagos.<br>
                        
                        </p>
                    </span>
            
            </ul>

        </div>

        <div class="c_footer_two_contain">

            <ul class="c_footer_two_content_list">
                
            <h5 class="c_more_content c_more_content_D"><i class="fa fa-question-circle c_icon_general_styling c_icon_footer_five_general_styling c_icon_related_articles"></i> ENQUIRES 24/7</h5>

                                <span class="c_footer_five_container_paragraph_one">
                        
                    <i class="fa fa-mobile-phone c_icon_general_styling c_icon_footer_five_general_styling"></i>  Health Support: <a class="c_contact_href" href="tel:+234 808 806 8257">+234 808 806 8257</a></span>
                    <br><br>
                    <span class="c_footer_five_container_paragraph_one"><i class="fa fa-gears c_icon_general_styling c_icon_footer_five_general_styling"></i>  Information Center: <a class="c_contact_href" href="tel:+234 815 399 5516">+234 815 399 5516</a></span> 
                    <br><br>
                    <span class="c_footer_five_container_paragraph_one"> 
                        <i class="fa fa-envelope-square c_icon_general_styling c_icon_footer_five_general_styling"></i> <a class="c_contact_href" href="mailto:timobhealthinternational@gmail.com">timobhealthinternational@gmail.com</a></span>
                        <br><br>
                    <span class="c_footer_five_container_paragraph_one"> 
                        <i class="fa fa-envelope-square c_icon_general_styling c_icon_footer_five_general_styling"></i> <a class="c_contact_href" href="mailto:timobhealthinternational@gmail.com">info@timobhealthinternational.org</a></span>


            
            </ul>

        </div>
        


    </div>
                            
    
    <div class="c_footer_signature">

                            
        <span>Follow us</span> &nbsp&nbsp
                    
        <span><a class="c_footer_navbar_text" href="https://www.facebook.com/toyin.asaolu.1/"><i class="fa fa-facebook-official c_fa_social_icons" style="font-size: large;color:#4267B2;"></i></a></span> &nbsp&nbsp
        
        <span><a class="c_footer_navbar_text" href="https://www.instagram.com/hepatitiscorner/"><i class="fa fa-instagram c_fa_social_icons" style="font-size: large;color:#C13584;"></i></a> </span> &nbsp&nbsp
                
        <span><a class="c_footer_navbar_text" href="http://api.whatsapp.com/send?phone=+23408035768694" target="_blank" ><i class="fa fa-whatsapp c_fa_social_icons" style="font-size: large;color:#25D366;"></i></a> </span> &nbsp&nbsp
                        
                            
    <span><a class="c_footer_navbar_text" href="https://www.linkedin.com/in/toyin-asaolu-5608a668/?originalSubdomain=ng"><i class="fa fa-linkedin c_fa_social_icons" style="font-size: large; color:#0077b5;"></i></span> &nbsp&nbsp&nbsp
                            
    <span></a> <a class="c_footer_navbar_text" href="<?= ROOT_URL?>index.php">  Timob Health International</a></span></span>&nbsp | &nbsp
    
    <span><a class="c_footer_navbar_text" href="<?= ROOT_URL?>pages/thi_our_story.php#hepatitis">Hepatitis Corner</a></span>&nbsp |  &nbsp
    
    <span><a class="c_footer_navbar_text" href="<?= ROOT_URL?>pages/thi_our_story.php#outreach">Outreach</a></span>&nbsp | &nbsp
    
    <span><a class="c_footer_navbar_text" href="#"><i class="fa fa-copyright"></i> 2013 - <span class="date c_footer_navbar_text" id="date"> </span> All right reserved</a></span>&nbsp |&nbsp
    
    <span><a class="c_footer_navbar_text" target="_blank" href="<?= ROOT_URL?>pages/thi_Personal_data_protection_policy.php">Terms & conditions</a></span>
                        
   </div> 
                   
  
                      
                    



    </div>


    </footer>

</html>
