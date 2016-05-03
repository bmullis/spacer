<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main">
            <div class="row">
                <div class="col-md-12">
                    <h1>Profile</h1>
                </div>
            </div>
            <div class="row console">
                <div class="col-md-6 col-md-offset-3">
                    <?php get_profile_info(); ?>
                    <a href="editprofile.php" class="btn btn-primary btn-lg">Edit Profile</a>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>