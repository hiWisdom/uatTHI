<?php
        include '../database.php';


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

<head>




    <!---meta names and contents-->
    <title>Timob Health International Contact us Email Template</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timob Health International | Hepatitis Corner | Outreach"/>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8" >
    <meta name="keywords" content="Timob Health International | Hepatitis Corner | Outreach">
    <meta name="description" content="Check out Timob Health International | Hepatitis Corner | Outreach here, health tips and healthy living. Infection prevention.">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="lp-version" content="v6.23.11"> -->

    <!---stylesheet links-->
    
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <!---favicon-->
    <link rel="icon" type="image/x-icon" href="../pictures/testing picture/faviLogo.jpg">


    <style>

        * {
            font-size: large;
            text-decoration: none;
        }

        .c_email_body_container {
            border: 2px solid none;
            width: 75%;
            height:auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2.5%;
        }

        .c_email_contents_container {
            border:  2px solid none;
            display: block ;
        }
        
        
        
        .c_footer_image_logo{
          border: 2px solid none;
          width: 100%;
          height: 3cm;
        } 
        
        .c_footer_image_logo img{
          border: 2px solid none;
          width: 40%;
          float: left;
          margin-left: 1.5%;
        } 
        
            
          .c_footer_container {
            border: 10px solid none;
            display: flex;
          }
          
          .c_footer_two {
            border: 2px solid none;
            display: flex;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
        }
          
            
      .c_footer_two_contain {
        margin-bottom: 1.5cm;
        }
        
        .c_email_template_footer {
            width:3%;
            height:50%;
        }
        
        .c_footer_signature {
            display: block;
        }
        
        .c_footer_RELATED_ARTICLES img{
            width: 20%;
        }
        
 
        

    </style>

</head>






















<body>



    <div class="c_email_body_container">
        
        

       

        <div class="c_email_contents_container">
            <p>Dear  <?php echo $fullName?>,</p>
        </div>

        <p>
 Thank you for contacting us regarding <?php echo $articleName?> article feedback/ suggestion. This is an automated response confirming the receipt of your feedback/ suggestion which we apperciate and we will get back to you as soon as possible thank you.
        </p>
        
        <p>Stay healthy!</p>
        
         
            <a class="c_footer_image_logo" href="https://timobhealthinternational.org">
            <img src="https://timobhealthinternational.org/pictures/testing%20picture/THI%20Jpeg%201.jpg"/>
            </a>
    <br>     
    <br>     
    <br>      
    <br> 

        <div class="c_footer_signature">
    
                                
            <span>Follow us</span> 
                        
            <span><a class="c_footer_navbar_text" href="https://www.facebook.com/toyin.asaolu.1/"><img src="https://i.pinimg.com/originals/41/b0/ed/41b0edd10bd1fcca1833c2e651fcfdaa.png" class="c_email_template_footer"/></a>
            </span> 
            
            <span>
                <a class="c_footer_navbar_text" href="https://www.instagram.com/hepatitiscorner/"><img src="https://i.pinimg.com/550x/58/a2/be/58a2bec02ecb40d12e507e2a212c46c6.jpg" class="c_email_template_footer"/></a> 
            </span> 
                    
            <span>
                <a class="c_footer_navbar_text" href="http://api.whatsapp.com/send?phone=+23408035768694" target="_blank" ><img src="https://i.pinimg.com/474x/25/35/48/253548b9ae0fcb6cdb9afe7257e9df9c.jpg" class="c_email_template_footer"/></a>
            </span> 
                                
            <span>
                <a class="c_footer_navbar_text" href="https://www.linkedin.com/in/toyin-asaolu-5608a668/?originalSubdomain=ng"><img src="https://i.pinimg.com/736x/ce/09/3c/ce093c7214ad357bb665cfd2f66a8b6b.jpg" class="c_email_template_footer"/></a>
            </span>
                                    
            <span>
                <a class="c_footer_navbar_text" href="<?= ROOT_URL?>index.php">  Timob Health International</a>
            </span> |
            
            <span>
                <a class="c_footer_navbar_text" href="<?= ROOT_URL?>pages/thi_our_story.php#hepatitis">Hepatitis Corner</a>
                </span> |
            
            <span>
                <a class="c_footer_navbar_text" href="<?= ROOT_URL?>pages/thi_our_story.php#outreach">Outreach</a>
            </span> |
            
            <span>
                <a class="c_footer_navbar_text" href="#"><i class="fa fa-copyright"></i> 2013 - 2023<span class="date c_footer_navbar_text" id="date"> </span> All right reserved</a>
            </span> |
            
            <span>
                <a class="c_footer_navbar_text" target="_blank" href="<?= ROOT_URL?>pages/thi_Personal_data_protection_policy.php">Terms & conditions</a>
            </span>
                            
       </div> 
                   





        


    </div>



</body>

</html>