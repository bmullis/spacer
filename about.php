<?php
$page_title = "About :: Spacer | Find Space, Rent Space";
$current_page = "about";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

<!-- header -->
<header class="jumbotron">
    <h1>How It Works</h1>
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
