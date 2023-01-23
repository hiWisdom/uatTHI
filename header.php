



<!DOCTYPE HTML>

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
                            &nbsp
                            <div class="c_header_contact_items c_header_contact_container_A_items c_header_contact_B_item">
                                <p>Timob Health International , NO_10, Odelola Street Kilo G82X+4QP, Surulere 101241, Lagos</p>
                            </div>   
                        </div> &nbsp&nbsp&nbsp

                        <div class="c_header_contact_container c_header_contact_container_B">
                            <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_C_item">
                                <i class="fa fa-phone c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_B"></i>
                            </div>
                            &nbsp
                            <div class="c_header_contact_items c_header_contact_container_B_items c_header_contact_D_item">
                                <p>Any question: <a class="c_contact_href_header" href="tel:+234 803 576 8694">+234 803 576 8694</a></p>
                            </div>   
                        </div>&nbsp&nbsp&nbsp

                        <div class="c_header_contact_container c_header_contact_container_C">
                            <div class="c_header_contact_items c_header_contact_container_C_items c_header_contact_E_item">
                                <i class="fa fa-clock-o c_icon_general_styling c_icon_header_content_general_styling c_icon_header_content_C"></i>
                            </div>
                            &nbsp
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

                <div class="c_mobile_user_account">
                    <?php if(isset($_SESSION['user-id'])):?>

                    <div class="c_dropdown" id="c_mobile_user_account_first_div">   
                        <label class="c_dashboard">
                            <?php
                                //fetch user picture from timob_health_international_users_account table using user picture

                                $user_id = $_SESSION['user-id'];
                                $user_query = " SELECT * FROM timob_health_international_users_account WHERE id=$user_id ";
                                $user_result = mysqli_query($connectDataBase, $user_query);
                                $user = mysqli_fetch_assoc($user_result);

                            ?>
                            <img src="<?= ROOT_URL?>post/blogs/images/<?= $user['user_picture']?>"/> <h5 style="margin-top:-1%;">Hello! <?= $user['account_name']?></h5>
                        </label> 
                        <!-- <li class="c_menu_list c_menu_accordion active">
                            <a class="c_menu_options_items c_menu_options_home">
        
                            </a>
                        </li> -->
                        <div class="c_menu_acordion_panel c_mobile_user_account_list">

                                                                <ul class="c_menu_acordion_panel_list">

                                
                                    <a href="<?= ROOT_URL ?>post/blogs/dashboard.php"> <i class="fa fa-home"></i> User Dashboard</a>
                                    <br>
                                    <br>
                                    
                                    <a href="<?= ROOT_URL ?>post/blogs/add_post.php"><i class="fas fa-plus"></i> Add Post</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/dashboard.php"><i class="far fa-edit"></i> Edit Post</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/add_article.php"><i class="fas fa-plus"></i> Add New Article</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/dashboard.php"><i class="far fa-edit"></i> Edit Article</a>
                                    <?php //if(isset($_SESSION['user_is_admin'])) : ?>

                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/add_category.php"><i class="fas fa-plus"></i> Add Category</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/manage_categories.php"><i class="far fa-edit"></i> Edit Category</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/manage_categories.php"><i class="	fas fa-sitemap"></i> Manage Categories</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/add_user.php"><i class="fa fa-user-plus"></i> Add User</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/manage_users.php"><i class="fas fa-user-edit"></i> Edit User</a>
                                    <br>
                                    <br>
                                    <a href="<?= ROOT_URL ?>post/blogs/manage_users.php"><i class="fas fa-user-cog"></i> Manage Users</a>
                                    
                                    
                                    <?php// endif ?>
                                       <br>
                                        <br>
                                    <a href="<?= ROOT_URL ?>thi_log_out.php "> <i class="fas fa-person-booth"></i> Logout</a>

                                </ul>
                        </div>
                    </div>

                    <?php else : ?>

                    <div class="c_dropdown" id="c_mobile_user_account_second_div">
                        <label class="c_dashboard">
                            <i class="fas fa-user-md"></i><h5>Login</h5>
                        </label>
                        <!--             
                        <li class="c_menu_list c_menu_accordion active"><a class="c_menu_options_items c_menu_options_home" href="javascript:void(0)"><p>Sign in <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li> -->

                        <div class="c_menu_acordion_panel c_mobile_user_account_list">
                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_sign_in_account.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fas fa-person-booth"></i> Sign in </span> </a></li>

                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_create_an_account.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-user-plus"></i> Create an account </span> </a></li>
                                </ul>
                        </div>
                    </div>

                    <?php endif ?>
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
                            <li class="c_menu_list c_menu_accordion active"><a class="c_menu_options_items c_menu_options_home" href="<?= ROOT_URL ?>index.php"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                    <ul class="c_menu_acordion_panel_list">
                                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>index.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-home"></i> Home </span> </a></li>
                                    </ul>
                            </div>
                        </div>

                        <div class="c_dropdown">

                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="#c_blog"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                    <ul class="c_menu_acordion_panel_list">
                                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_Medical_Articles"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Articles </span> </a></li>
                                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_blog"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Blogs </span> </a></li>
                                        <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_main_0_A_A"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Health Show </span> </a></li>
                                    </ul>
                            </div>

                        </div>



                        <div class="c_dropdown">

                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="pages/thi_contact.php"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">

                                        <ul class="c_menu_acordion_panel_list">
                                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_footer_five"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-info-circle"></i> Quick Contacts </span> </a></li>
                                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_contact.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-address-book-o"></i> Contact us</a> </span> </li>
                                            <!--<li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_about.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-group"></i> About us <span class="c_footer_five_container_paragraph_one"> </a></li>-->
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


                        <?php if(isset($_SESSION['user-id'])):?>

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
                                            <img style="border-radius: 15rem" src="<?= ROOT_URL?>post/blogs/images/<?= $user['user_picture']?>"/> <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i><h5 style="background:white;font-weight:light; font-size: smaller; border: 1px solid none; width: 50px;position:fixed; margin-left: -0.5%;">Hello! <?= $user['account_name']?></h5>
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
                                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_sign_in_account.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fas fa-person-booth"></i> Sign in </span> </a></li>

                                            <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_create_an_account.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-user-plus"></i> Create an account </span> </a></li>
                                        </ul>
                                </div>
                            </div>

                        <?php endif ?>


                        <div class="c_search_container">

                            <form action="<?=ROOT_URL?>search.php" method="GET">
                            <input type="text" placeholder="Search blog or articles..." name="search">
                            <button type="submit" name="submit_search"><p>Search</p><i class="fa fa-search"></i></button>
                            </form>

                        </div>



                    </div>

                    <div class="c_menu_options_container" id="c_mobile_options_container">




                        <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Home <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                        <div class="c_menu_acordion_panel">
                            <ul class="c_menu_acordion_panel_list">
                                <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>index.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-home"></i> Home </span> </a></li>
                            </ul>
                        </div>


                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_blog" href="javascript:void(0)"><p>Medical News Center <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>
                            <div class="c_menu_acordion_panel">
                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_Medical_Articles"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Articles </span> </a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_blog"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Blogs </span> </a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_main_0_A_A"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-newspaper-o"></i> Medical Health Show </span> </a></li>
                                </ul>
                            </div>

                    





                            <li class="c_menu_list c_menu_accordion"><a class="c_menu_options_items c_menu_options_whoweare" href="javascript:void(0)"><p>Contact Us <i class="fa fa-chevron-down c_menu_icons c_menu_icons_short"></i></p>  </a></li>

                            <div class="c_menu_acordion_panel">

                                <ul class="c_menu_acordion_panel_list">
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>#c_footer_five"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-info-circle"></i> Quick Contacts </span> </a></li>
                                    <li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_contact.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-address-book-o"></i> Contact us </span> </a></li>
                                    <!--<li class="c_menu_acordion_panel_list_details"><a href="<?= ROOT_URL ?>pages/thi_about.php"> <span class="c_footer_five_container_paragraph_one"> <i class="fa fa-group"></i> About us </span> </a></li>-->
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

                            <form action="<?=ROOT_URL?>search.php" method="GET">
                            <input type="text" placeholder="Search blog or articles..." name="search">
                            <button type="submit" name="submit_search"><p>Search</p><i class="fa fa-search"></i></button>
                            </form>

                        </div>

                        <div class="c_shortcut_menu_footer_container">

                            <div class="c_header_footer_image_logo_container">
                                <p class="c_header_footer_image_logo">
                                    <img src="<?= ROOT_URL ?>pictures/testing picture/THI Jpeg 1.jpg"/>
                                </p>
                            </div>

                            <p class="c_menu_options_shortcut_signature">
                                &copy 2013 - 2023 <a href="<?= ROOT_URL ?>index.php">Timob Health International</a> All right reserved <a href="<?= ROOT_URL ?>/pages/thi_Personal_data_protection_policy.php">Terms of use</a>. See additional information. You can <a href="<?= ROOT_URL ?>/pages/thi_contact.php">contact us</a> and also see more information <!---<a href="<?= ROOT_URL ?>/pages/thi_about.php">about us </a> and---> about our <a href="<?= ROOT_URL ?>/pages/thi_medical_specialty.php">medical specialies</a>.
                            </p>
                        </div>

                    </div>
                    
                </ul>


            </div>
        

        </header>


    </HTML>