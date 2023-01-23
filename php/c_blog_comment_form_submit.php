    
        <?php

        

            include '../database.php';
          
          if(isset($_POST['c_post_comment'])) {


              $blogComment = filter_var($_POST['c_comment_input'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);;

            //   $to = "akpotororodje@gmail.com";
            //   $subject = "Lets take care of you because we care!";
            //   $text = "Name = ".$name. "\r\n Email = ".$emailaddress. "\r\n Message = ". $articlefeedback. "\r\n Telephone = ". $telephone;
            //   $headers = "From: noreply@timobhealthinternational.org" . "\r\n" . "CC : somebody@example.com";
            
            if(!$blogComment) {
                $_SESSION['blog'] = "Enter your comment";
            }

            else {

                $query = "INSERT INTO blog_post_comment (comment_post) VALUES ('$blogComment')";
                $result = mysqli_query($connectDataBase, $query);
                header('location:'.'../blog.php');
                die();

            }

            //   if($emailaddress!=NULL) {
            //       mail($to, $subject, $text, $headers);
            //   }


            //   $sql = "INSERT INTO thi_article_feedback_db(name, telephone, emailaddress, articlefeedback) VALUES(?, ?, ?, ?)";
            //   $newJoin = $connectDataBase->prepare($sql);
            //   $newJoin->execute([$name, $telephone, $emailaddress, $articlefeedback]);

                  
           
          }

    