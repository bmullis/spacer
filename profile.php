<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main">
                    <h1>Profile</h1>
                    <img src="<?php echo $_SESSION['prof_pic']; ?>">
                    <p>First Name: <?php echo $_SESSION['f_name']; ?></p>
                    <p>Last Name: <?php echo $_SESSION['l_name']; ?></p>
                    <p>City: <?php echo $_SESSION['city']; ?></p>
                    <p>State: <?php echo $_SESSION['state']; ?></p>
                    <p>Bio: <?php echo $_SESSION['bio']; ?></p>
                    <a href="editprofile.php">[Edit Profile]</a>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>