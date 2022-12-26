<?php

require '../../database.php';


if(isset($_POST['submit_Update_Category'])) {


    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //validate input

    if(!$title || !$description) {
        $_SESSION['edit_category'] = "Invalid form input on edit category page";
    }

    else {
        $query = " UPDATE thi_post_categories SET title='$title', description='$description' WHERE id=$id LIMIT 1";

        $result = mysqli_query($connectDataBase, $query);

        if(mysqli_errno($connectDataBase)) {
            $_SESSION['edit_category'] = "$title couldn't update category";
        }

        else {
            $_SESSION['c_success_message'] = "$title category updated Successfully.";
        }
    }





}

header('location:'.'manage_categories.php');
die();