<?php
$page_title = "Dashboard :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-9 main">
                <h1>Dashboard</h1>
                <img src="<?php echo $_SESSION['prof_pic']; ?>">
                <p>Welcome to Spacer, <?php echo $_SESSION['user']; ?></p>
            </div>
            <?php include_once ('layout/sidebar.php'); ?>
        </div>
    </div>
</section>

<?php include_once ('layout/footer.php'); ?>
