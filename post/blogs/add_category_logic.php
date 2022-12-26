<?php


require '../../database.php';

if(isset($_POST['add_category_submit'])) {
    //get form data

    $categoryTitle = filter_var($_POST['category_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $categoryDescription = filter_var($_POST['category_description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$categoryTitle) {
        $_SESSION['add_category'] = "Enter title";
    }

    elseif(!$categoryDescription) {
        $_SESSION['add_category'] = "Enter Description";
    }

    if(isset($_SESSION['add_category'])) {
        //redirect back to category page with form data if any problem 

        $_SESSION['signup-data'] = $_POST;
        header('location:'.'add_category.php');
        die();
    }

    else {
        //insert data into database

        $query = "INSERT INTO thi_post_categories (title, description) VALUES ('$categoryTitle', '$categoryDescription')";
        $result = mysqli_query($connectDataBase, $query);
        
        if(mysqli_errno($connectDataBase)) {
            $_SESSION['add_category'] = "$title couldn't add category";
            header('location:'.'add_category.php');
            die();
        }

        else {
            $_SESSION['c_success_message'] = "$title category Added Successfully.";
            header('location:'.'manage_categories.php');
            die();
        }
    }
}