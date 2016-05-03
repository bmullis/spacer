<?php
$page_title = "Search :: Spacer | Find Space, Rent Space";
$current_page = "search";
$current_space = $_POST['current_space'];
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main">

            <div class="row console">
                <div class="col-md-10">
                    <h1>View Space</h1>
                    <?php show_space($users, $view, $current_space); ?></div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>