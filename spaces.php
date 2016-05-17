<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "spaces";
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
                        <h1>Your Spaces</h1>
                    </div>
                    <?php show_spaces($view, $_SESSION['user']); ?>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>