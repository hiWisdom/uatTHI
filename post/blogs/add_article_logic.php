<?php



require '../../database.php';



if(isset($_POST['article_post_submit'])) {
    //get form data

    $author_id = $_SESSION['user-id'];

    $articleTitle = mysqli_real_escape_string($connectDataBase, $_POST['article_post_title']);
    
    $articleDescription = mysqli_real_escape_string($connectDataBase, $_POST['article_post_description']);

    // $articleCategory = filter_var($_POST['article_post_category'], FILTER_SANITIZE_NUMBER_INT);
    
    // $articleFeatured = filter_var($_POST['article_post_featured'],FILTER_SANITIZE_NUMBER_INT);

    $articlePicture = $_FILES['article_post_picture'];



    //set category featured
    // $articleFeatured = $articleFeatured == 1 ?: 0;


    if(!$articleTitle) {
        $_SESSION['add_article'] = "Enter title";
    }

    elseif(!$articlePicture) {
        $_SESSION['add_article'] = "Select an Image to post";
    }

    elseif(!$articleDescription) {
        $_SESSION['add_article'] = "Enter Description";
    }




    else {

        //work on picture
        //rename the image

        $time = time(); //make each image name unique
        $thumbnail_name = $time . $articlePicture['name'];
        $thumbnail_tmp_name = $articlePicture['tmp_name'];
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


        // if($articleFeatured == 1) {
        //     $zero_all_is_featured_query = " UPDATE article_post SET is_featured = 0";
        //     $zero_all_is_featured_result = mysqli_query($connectDataBase, $zero_all_is_featured_query);
        // }

        //insert post into database

        $query = " INSERT INTO article_post (title, description, image, author_id) VALUES ('$articleTitle','$articleDescription', '$thumbnail_name', '$author_id')";

        $result = mysqli_query($connectDataBase, $query);

        if(!mysqli_errno($connectDataBase)) {
            //redirect to dashboard with success message
            $_SESSION['c_success_message'] = "$articleTitle posted successful.";             
            header('location: ' . 'dashboard.php');
            die();
        }
    }


}

else {
    //if button was not clicked then return to sign up page and die

    header('location: ' . 'add_article.php');
    die();
}