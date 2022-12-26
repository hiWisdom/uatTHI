<?php



require '../../database.php';


if(isset($_POST['submit_edit_POST'])) {


    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $previous_Picture = filter_var($_POST['previous_picture'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $postedCategory = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $isFeatured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);

    $new_Picture = $_FILES['image'];

    //validate input

    $isFeatured = $isFeatured == 1 ? : 0;


    if(!$title) {
        $_SESSION['edit_post'] = "Invalid form input on edit category page";
    }

    else {

        //delete existing picture if new pciture is avaliable

        if($new_Picture['name']) {
            $previous_Picture_Path = 'images/' . $previous_Picture;
            if($previous_Picture_Path) {
                unlink($previous_Picture_Path);
            }


            //Work on new picture
            //rename the new picture

            $time = time();
            $new_picture_name = $time . $new_Picture['name'];
            $new_picture_tmp_name = $new_Picture['tmp_name'];
            $new_picture_destination_path = 'images/' . $new_picture_name;


            //make sure the new picture is an image and allowed format is png, jpg or jpeg
            $allowedPictureFiles = ['png', 'jpg', 'jpeg'];
            $extension = explode('.', $new_picture_name);
            $extension = end($extension);
            if(in_array($extension, $allowedPictureFiles)) {
                //make sure avatar is not too large 2mb+
                if($new_Picture['size'] < 2000000) {
                    //upload picture
                    move_uploaded_file($new_picture_tmp_name, $new_picture_destination_path);

                }

                else {
                    $_SESSION['edit_post'] = " Counldn't update post. Picture size to big. Should be less than 2 megabyte.";
                }
            }

            else {
                $_SESSION['edit_post'] = " Counldn't update post. Picture size to big. Should be less than 2 megabyte.";
            }

        }




        else {
            //set isFeatured of all post to 0 if isFeatured for this post is 1
            if($isFeatured == 1) {
                $zero_all_is_featured_query = " UPDATE blog_post SET is_featured=0";
                $zero_all_is_featured_result = mysqli_query($connectDataBase, $zero_all_is_featured_query);
            }

            //set picture name if a new one was uploaded, else keep old picture name
            $picture_to_insert = $new_Picture ?? $previous_Picture;

            $query = "UPDATE blog_post SET title='$title', description='$description', image='$picture_to_insert', is_featured=$isFeatured WHERE id=$id LIMIT 1";


            $result = mysqli_query($connectDataBase, $query);
        }

        if(mysqli_errno($connectDataBase)) {
            $_SESSION['edit_post'] = "$title couldn't update post";
        }

        else {
            $_SESSION['c_success_message'] = "$title post updated Successfully.";
            header('location:'.'dashboard.php');
            die();
        }
    }





}







