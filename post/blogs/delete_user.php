<?php


session_start();

require '../../database.php';

    if(isset($_GET['id'])) {

        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        //fetch user from database

        $query = " SELECT * FROM timob_health_international_users_account WHERE id=$id ";
        $result = mysqli_query($connectDataBase, $query);
        $user = mysqli_fetch_assoc($result);

        //make sure we got back only one user
        if(mysqli_num_rows($result) == 1) {
            $avatar_name = $user['user_picture'];
            $avatar_path = 'images/' . $avatar_name;
            //delete image if available
            if($avatar_path) {
                unlink($avatar_path);
            }
        }



        //FOR LATER
        //fetch all thumbnails of user's post and delete them

        $image_query = " SELECT image FROM blog_post WHERE author_id= $id";
        $image_query_result = mysqli_query($connectDataBase, $image_query);
        
        if(mysqli_num_rows($image_query_result) > 0) {
            while($image = mysqli_fetch_assoc($image_query_result));
            $image_path = 'image/'.$image['image'];
            //delte image from images folder if exist
            if($image_path){
                unlink($image_path);
            }
        }

        //









        

        //FOR LATER
        //delete user from database

        $delete_user_query = "DELETE FROM timob_health_international_users_account WHERE id=$id";
        $delet_user_result = mysqli_query($connectDataBase, $delete_user_query);
        if(mysqli_errno($connectDataBase)) {
            $_SESSION['delete_user'] = " User $addUserName Could not delete user";
            header('location:', 'manage_users.php');
            die();
        }

        else {
        

             //redirect to add user page with success message
             $_SESSION['c_success_message'] = " User $addUserName deleted successfully.";            
             header('location: ' . 'manage_users.php');
             die();
        }













        
    }

    header('location:', 'manage_users.php');
    die();