<?php
$page_title = "Spacer | Find Space, Rent Space";
$current_page = "index";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<!-- header -->
<header class="jumbotron">

    <?php
    if (isset($_SESSION['error_message'])) {
        echo "<div class='has-error' id='error_box'>" . $_SESSION['error_message'] . "</div>\n";
    }
    ?>

    <h1>Spacer</h1>
    <h2>Find Space, Rent Space, Leave No Space Unused</h2>
</header>

<!-- first info section -->
<section class="example">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Find the space you need to unleash your creativity.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="img/painting.jpg">
            </div>
            <div class="col-md-6">
                <img src="img/crafting.jpg">
            </div>
        </div>
    </div>
</section>

<!-- second info section -->
<section class="example">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>What projects will you get done?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="img/workspace.jpg">
            </div>
            <div class="col-md-6">
                <img src="img/garage.jpg">
            </div>
        </div>
    </div>
</section>

<section class="ribbon">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Find Your Perfect Space</h2>
            </div>
        </div>
    </div>
</section>

<?php include_once ('includes/login.php'); ?>

<?php include_once ('layout/footer.php'); ?>
