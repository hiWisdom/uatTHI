<?php

require '../../database.php';

    if(isset($_GET['id'])) {

        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        //fetch user from database

        $query = " SELECT * FROM blog_post WHERE id=$id ";
        $result = mysqli_query($connectDataBase, $query);
        $blog_post = mysqli_fetch_assoc($result);

        //make sure we got back only one category
        // if(mysqli_num_rows($result) == 1) {
        //     $avatar_name = $category_post['user_picture'];
        //     $avatar_path = 'images/' . $avatar_name;
        //     //delete image if available
        //     if($avatar_path) {
        //         unlink($avatar_path);
        //     }
        // }



        //FOR LATER













        

        //FOR LATER
        //delete user from database

        $delete_blog_post_query = " DELETE FROM blog_post WHERE id=$id LIMIT 1";
        $delete_blog_post_result = mysqli_query($connectDataBase, $delete_blog_post_query);
        if(mysqli_errno($connectDataBase)) {
            $_SESSION['delete_post'] = "Could not delete category";
            header('location:', 'dashboard.php');
            die();
        }

        else {
        

             //redirect to manage categories page with success message
             $_SESSION['c_success_message'] = " $title post deleted successfully.";            
             header('location: ' . 'dashboard.php');
             die();
        }













        
    }

    header('location:', 'manage_users.php');
    die();