<?php

    require 'database.php';


    //fetch current user from the database

    if(isset($_SESSION['user-id'])) {
        $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
        $query = " SELECT user_picture FROM timob_health_international_users_account WHERE id= $id ";
        $result = mysqli_query($connectDataBase, $query);
        $avatar = mysqli_fetch_assoc($result);
    }


    ?>



<!DOCTYPE HTML>

<HTML>

    <header>


    <div class="c_header_contact">

        <div class="c_header_contact_alignment">
        
            <div class="c_header_paragraphcontact_alignment">

                <p class="c_browser_verification"></p>
                
                <div class="c_header_contact_container c_header_contact_container_A">
                    <div class="c_header_contact_items c_header_contact_container_A_items c_header_contact_A_item">
                        <i class="fa fa-map-marker c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_A"></i>
                    </div>
                    
                    <div class="c_header_contact_items c_header_contact_container_A_items c_header_contact_B_item">
                        <p>Timob Health International , NO_10, Odelola Street Kilo G82X+4QP, Surulere 101241, Lagos</p>
                    </div>   
                </div>

                <div class="c_header_contact_container c_header_contact_container_B">
                    <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_C_item">
                        <i class="fa fa-phone c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_B"></i>
                    </div>
                    
                    <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_D_item">
                        <p>Any question: <a class="c_contact_href_header" href="tel:+234 803 576 8694">+234 803 576 8694</a></p>
                    </div>   
                </div>

                <div class="c_header_contact_container c_header_contact_container_C">
                    <div class="c_header_contact_items c_header_contact_container_C_items c_header_contact_E_item">
                        <i class="fa fa-clock-o c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_C"></i>
                    </div>
                    
                    <div class="c_header_contact_items c_header_contact_container_C_items c_header_contact_F_item">
                        <p>Mon - Sun:   24 Hours</p>
                    </div>   
                </div>

            </div> 
        
        </div>

    </div>

    <div class="c_header_navbar">


        <div class="c_menu_header">

            <a class="c_menu_header_image_link" href="<?= ROOT_URL ?>index.php">
                <img class="c_menu_header_image_logo" src="<?= ROOT_URL ?>pictures/testing picture/THI Jpeg 1.jpg"/>
            </a>
            
        </div>

        
    
        <input type="checkbox" id="checkbox"/>
        <label for="checkbox" class="c_checkbox">Menu
            <!-- <i class="fa fa-bars checkbotton"></i> -->
                <div class="c_menu_shortcut_icon_container">
                    <div class="c_bar1"></div>
                    <div class="c_bar2"></div>
                    <div class="c_bar3"></div>
                </div>
        </label> 

        <ul class="c_menu_options">

            <div class="c_shortcut_menu_header_container">

                <input type="checkbox" id="checkbox"/>
                <label for="checkbox" class="c_checkbox c_checkbox_close">Close
                        <div class="c_menu_shortcut_icon_container c_menu_shortcut_icon_container_close">
                            <div class="c_bar1"></div>
                            <div class="c_bar2"></div>
                            <div class="c_bar3"></div>
                        </div>
                </label>

                <div class="c_menu_header c_menu_header_shortcut_menu">

                    <a class="c_menu_header_image_link" href="<?= ROOT_URL ?>index.php">
                        <img class="c_menu_header_image_logo" src="<?= ROOT_URL ?>pictures/testing picture/THI Jpeg 1.jpg"/>
                    </a>
                    
                </div>

            </div>


            <div class="c_menu_options_container" id="c_desktop_options_container">


                <div class="c_dropdown">
                    <li class="c_menu_list c_menu_accordion active"><a class="c_menu_options_items c_menu_options_home" href="index.php"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                    <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>index.php"> <i class="	fa fa-home"></i> Home</a></li>
                            </ul>
                    </div>
                </div>

                <div class="c_dropdown">

                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="#c_blog"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                    <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_Medical_Articles"> <i class="fa fa-newspaper-o"></i> Medical Articles</a></li>
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_blog"> <i class="fa fa-newspaper-o"></i> Medical Blogs</a></li>
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_main_0_A_A"> <i class="fa fa-newspaper-o"></i> Medical Health Show</a></li>
                            </ul>
                    </div>

                </div>



                <div class="c_dropdown">

                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="pages/thi_contact.php"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                    <div class="c_menu_acordion_panel">

                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_footer_five"> <i class="fa fa-info-circle"></i> Quick Contacts</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_contact.php"> <i class="fa fa-address-book-o"></i> Contact us</a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_about.php"> <i class="fa fa-group"></i> About us</a></li>
                                </ul>
                    </div>

                </div>



                <div class="c_dropdown">

                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_contact" href="pages/thi_medical_specialty.php"><p>Medical Specialties <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p></a></li>
                    <div class="c_menu_acordion_panel">


                                <ul class="c_menu_acordion_panel_list">

                                    <?php

                                        $all_categories_query = " SELECT * FROM thi_post_categories";
                                        $all_categories = mysqli_query($connectDataBase, $all_categories_query);

                                    ?>

                                    <?php while($category = mysqli_fetch_assoc($all_categories)) :?>


                                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $category['id']?>"> <span class="c_footer_five_container_paragraph_one">
                                            <i class="fa fa-hospital-o"></i>  <?= $category['title']?></span></a></li>

                                    <?php endwhile ?>


                                </ul>


                    </div>

                </div>


                <?php 
                
                if(isset($_SESSION['user-id'])): 
                
                ?>

                <div class="c_dropdown">
                    <li class="c_menu_list c_menu_accordion active">
                        <a class="c_menu_options_items c_menu_options_home">
                            <p>
                                <?php
                                    //fetch user picture from timob_health_international_users_account table using user picture

                                    $user_id = $_SESSION['user-id'];
                                    $user_query = " SELECT * FROM timob_health_international_users_account WHERE id=$user_id ";
                                    $user_result = mysqli_query($connectDataBase, $user_query);
                                    $user = mysqli_fetch_assoc($user_result);

                                ?>
                                <img src="<?= ROOT_URL?>post/blogs/images/<?= $user['user_picture']?>"/> <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i>
                            </p>  
                        </a>
                    </li>
                    <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>post/blogs/dashboard.php"> <i class="fa fa-home"></i> Dashboard</a></li>

                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>thi_log_out.php "> <i class="fa fa-home"></i> Logout</a></li>
                            </ul>
                    </div>
                </div>

                <?php else : ?>
                
                <div class="c_dropdown">
                    <li class="c_menu_list c_menu_accordion active"><a class="c_menu_options_items c_menu_options_home" href="<?= ROOT_URL ?>index.php"><p>Sign in <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                    <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_sign_in_account.php"> <i class="	fa fa-home"></i> Signin</a></li>

                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_create_an_account.php"> <i class="	fa fa-home"></i> Create an account</a></li>
                            </ul>
                    </div>
                </div>

                <?php
                
                endif 
                
                ?>


                <div class="c_search_container">

                    <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><p>Search</p><i class="fa fa-search"></i></button>
                    </form>

                </div>



            </div>

            <div class="c_menu_options_container" id="c_mobile_options_container">




                <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                <div class="c_menu_acordion_panel">
                    <ul class="c_menu_acordion_panel_list">
                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>index.php"> <i class="	fa fa-home"></i> Home</a></li>
                    </ul>
                </div>


                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                    <div class="c_menu_acordion_panel">
                        <ul class="c_menu_acordion_panel_list">
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_Medical_Articles"> <i class="fa fa-newspaper-o"></i> Medical Articles</a></li>
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_blog"> <i class="fa fa-newspaper-o"></i> Medical Blogs</a></li>
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_main_0_A_A"> <i class="fa fa-newspaper-o"></i> Medical Health Show</a></li>
                        </ul>
                    </div>

            





                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="javascript:void(0)"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>

                    <div class="c_menu_acordion_panel">

                        <ul class="c_menu_acordion_panel_list">
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_footer_five"> <i class="fa fa-info-circle"></i> Quick Contacts</a></li>
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_contact.php"> <i class="fa fa-address-book-o"></i> Contact us</a></li>
                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_about.php"> <i class="fa fa-group"></i> About us</a></li>
                        </ul>
                    </div>





                    <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_contact" href="javascript:void(0)"><p>Medical Specialties <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p></a></li>
                    <div class="c_menu_acordion_panel">
                        <ul class="c_menu_acordion_panel_list">
                        <?php

                            $all_categories_query = " SELECT * FROM thi_post_categories";
                            $all_categories = mysqli_query($connectDataBase, $all_categories_query);

                            ?>

                            <?php while($category = mysqli_fetch_assoc($all_categories)) :?>


                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL?>post/blogs/category_posts.php?id=<?= $category['id']?>"> <span class="c_footer_five_container_paragraph_one">
                                <i class="fa fa-hospital-o"></i>  <?= $category['title']?></span></a></li>

                            <?php endwhile ?>
                                    
                        </ul>
                    </div>

        

                <div class="c_search_container">

                    <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><p>Search</p><i class="fa fa-search"></i></button>
                    </form>

                </div>

                <div class="c_shortcut_menu_footer_container">

                    <div class="c_header_footer_image_logo_container">
                        <p class="c_header_footer_image_logo">
                            <img src="<?= ROOT_URL ?>pictures/testing picture/THI Jpeg 1.jpg"/>
                        </p>
                    </div>

                    <p class="c_menu_options_shortcut_signature">
                        &copy 2013 - 2022 <a href="<?= ROOT_URL ?>index.php">Timob Health International</a> All right reserved <a href="<?= ROOT_URL ?>/pages/thi_Personal_data_protection_policy.php">Terms of use</a>. See additional information. You can <a href="<?= ROOT_URL ?>/pages/thi_contact.php">contact us</a> and also see more information <a href="<?= ROOT_URL ?>/pages/thi_about.php">about us</a> and our <a href="<?= ROOT_URL ?>/pages/thi_medical_specialty.php">medical specialies</a>.
                    </p>
                </div>

            </div>
            
        </ul>


    </div>
    

    </header>


</HTML>