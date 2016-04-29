<?php
$page_title = "Dashboard :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<section class="dashboard">
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <?php
                if ($_SESSION['prof_pic'] == "") {
                    echo "<img src='img/blank_user.png'>\n";
                } else {
                    echo "<img src='" . $_SESSION['prof_pic'] . "'>\n";
                }
                ?>
                <h3>Welcome to Spacer, <?php echo $_SESSION['user']; ?></h3>
            </div>
            <?php include_once ('layout/sidebar.php'); ?>
        </div>
    </div>
</section>

<?php include_once ('layout/footer.php'); ?>
