<?php
$page_title = "Dashboard :: Spacer | Find Space, Rent Space";
$current_page = "dashboard";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<section class="dashboard">
    <div class="container-fluid main">
        <div class="row console">
            <div class="col-md-10">
                <h1>Dashboard</h1>
                <?php
                if (!isset($_SESSION['prof_pic'])) {
                    echo "<img src='img/blank_user.png'>\n";
                    echo "<h2>Welcome to Spacer</h2>\n";
                    echo "<h3>Get started by creating your profile</h3>\n";
                    echo "<a href='editprofile.php' class='btn btn-primary'>Create Profile</a>\n";
                } else {
                    echo "<img src='" . $_SESSION['prof_pic'] . "'>\n";
                    echo "<h3>Welcome to Spacer</h3>\n";
                    echo "<a href='search.php' class='btn btn-primary'>Find a Space</a>\n";
                    echo "<a href='spaces.php' class='btn btn-primary'>Host a Space</a>\n";
                }
                ?>
            </div>
            <?php include_once ('layout/sidebar.php'); ?>
        </div>
    </div>
</section>

<?php include_once ('layout/footer.php'); ?>
