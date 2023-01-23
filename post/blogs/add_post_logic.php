<?php



require '../../database.php';



if(isset($_POST['blog_post_submit'])) {
    //get form data

    $author_id = $_SESSION['user-id'];

    $blogTitle = mysqli_real_escape_string($connectDataBase, $_POST['blog_post_title']);
    
    $blogDescription = mysqli_real_escape_string($connectDataBase, $_POST['blog_post_description']);

    $blogCategory = mysqli_real_escape_string($connectDataBase, $_POST['blog_post_category']);
    
    $blogFeatured = mysqli_real_escape_string($connectDataBase, $_POST['blog_post_featured']);

    $blogPicture = $_FILES['blog_post_picture'];



    //set category featured
    $blogFeatured = $blogFeatured == 1 ?: 0;


    if(!$blogTitle) {
        $_SESSION['add_post'] = "Enter title";
    }

    elseif(!$blogPicture) {
        $_SESSION['add_post'] = "Select an Image to post";
    }

    elseif(!$blogDescription) {
        $_SESSION['add_post'] = "Enter Description";
    }

    
    elseif(!$blogCategory) {
        $_SESSION['add_post'] = "Select a category";
    }

    else {
        //work on picture
        //rename the image

        $time = time(); //make each image name unique
        $thumbnail_name = $time . $blogPicture['name'];
        $thumbnail_tmp_name = $blogPicture['tmp_name'];
        $thumbnail_destination_path = 'images/' . $thumbnail_name;


        //make sure the file is an image
        $allowed_files = ['PNG', 'jpg', 'jpeg'];
        $extention = explode('.', $thumbnail_name);
        $extention = end($extention);

        if(in_array($extention, $allowed_files)) {
            //make sure file is not too large(2mb+)
            if(!empty ($thumbnail_name[1] < 2000000)) {
                //upload avatar
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            }

            else {
                $_SESSION['add_post'] = "Picture size too big. Should be less than 1 megabyte";
            }
        }

        else {
            $_SESSION['add_post'] = "File should be png, jpg or jppeg";
        }


    }

    //check if they is any error so far, if any error redirect back with form

    if(isset($_SESSION['add_post'])) {
        $_SESSION['add_post_data'] = $_POST;
        header('location:' . 'add_post.php');
        die();
    }

    else {
        if($blogFeatured == 1) {
            $zero_all_is_featured_query = " UPDATE blog_post SET is_featured = 0";
            $zero_all_is_featured_result = mysqli_query($connectDataBase, $zero_all_is_featured_query);
        }

        //insert post into database

        $query = " INSERT INTO blog_post (title, description, image, category_id, author_id, is_featured) VALUES ('$blogTitle','$blogDescription', '$thumbnail_name', $blogCategory,'$author_id', '$blogFeatured' )";

        $result = mysqli_query($connectDataBase, $query);

        if(!mysqli_errno($connectDataBase)) {
            //redirect to dashboard with success message
            $_SESSION['c_success_message'] = "$blogTitle posted successful.";             
            header('location: ' . 'dashboard.php');
            die();
        }
    }


}

else {
    //if button was not clicked then return to sign up page and die

    header('location: ' . 'add_post.php');
    die();
}