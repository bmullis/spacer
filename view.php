<?php
$page_title = "Search :: Spacer | Find Space, Rent Space";
$current_page = "search";
$current_space = $_POST['current_space'];
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container-fluid main">

            <div class="row console">
                <div class="col-md-10">
                    <div class="console_header">
                        <h1>View Space</h1>
                    </div>
                    <?php show_space($users, $view, $current_space); ?></div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>