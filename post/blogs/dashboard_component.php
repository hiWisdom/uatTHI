 


<!DOCTYPE HTML>

<HTML>

    <div class="c_blog_dashboard_container">

        <aside>

            <ul>

                <h3><i class="fa fa-user-o"></i> User Dashboard </h3>

                
                <a href="dashboard.php"><i class="fa fa-home" style="color: black"></i> User Dashboard</a>
                <br>

                <a href="add_post.php"><i class="fas fa-plus"></i> Add Blog Post</a>
                <br>
                <a href="dashboard.php"><i class="far fa-edit"></i> Edit Blog Post</a>
                <br>

                <a href="add_article.php"><i class="fas fa-plus"></i> Add New Article</a>
                <br>
                <a href="dashboard.php"><i class="far fa-edit"></i> Edit Article</a>
                <br>
                
                <a href="add_category.php"><i class="fas fa-plus"></i> Add Category</a>
                <?php //if(isset($_SESSION['user_is_admin'])) : ?>
                <br>
                <a href="manage_categories.php"><i class="far fa-edit"></i> Edit Category</a>
                <br>
                <a href="add_user.php"><i class="fa fa-user-plus"></i> Add User</a>
                <br>
                <a href="manage_users.php"><i class="fas fa-user-edit"></i> Edit User</a>
                <br>
                <a href="manage_users.php"><i class="fas fa-user-cog"></i> Manage Users</a>
                <br>
                <a href="manage_categories.php"><i class="fas fa-sitemap"></i> Manage Categories</a>
                <?php //endif ?>

            </ul>
            
        </aside>

    </div>

</HTML>