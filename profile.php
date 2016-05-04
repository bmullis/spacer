<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container-fluid main">

            <div class="row console">
                <div class="col-md-10">
                    <h1>Your Profile</h1>
                    <?php get_profile_info(); ?>
                    <a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>