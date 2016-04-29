<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "profile";
session_start();
require_once ('includes/get_spaces.php');
require_once ('includes/functions.php');
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main">
                    <h1>Spaces</h1>
                    <?php show_spaces($view); ?>
                    <a href="createspace.php">[Create a New Space]</a>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>