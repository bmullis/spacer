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
                } else {
                    echo "<img src='" . $_SESSION['prof_pic'] . "'>\n";
                }
                ?>
                <h3>Welcome to Spacer</h3>
                <a href="search.php" class="btn btn-primary">Find a Space</a>
                <a href="spaces.php" class="btn btn-primary">Host a Space</a>
            </div>
            <?php include_once ('layout/sidebar.php'); ?>
        </div>
    </div>
</section>

<?php include_once ('layout/footer.php'); ?>
