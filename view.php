<?php
$page_title = "Search :: Spacer | Find Space, Rent Space";
$current_page = "search";
$current_space = $_POST['current_space'];
session_start();
require_once ('includes/get_spaces.php');
require_once ('includes/get_users.php');
require_once ('includes/functions.php');
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main">
            <div class="row">
                <div class="col-md-12">
                    <h1>Search</h1>
                </div>
            </div>
            <div class="row console">
                <div class="col-md-6 col-md-offset-3">
                    <?php show_space($users, $view, $current_space); ?></div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>