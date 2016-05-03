<?php
$page_title = "Profile :: Spacer | Find Space, Rent Space";
$current_page = "spaces";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard">
        <div class="container main">

            <div class="row console">
                <div class="col-md-10">
                    <h1>Your Spaces</h1>
                    <?php show_spaces($view); ?>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>