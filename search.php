<?php
$page_title = "Search Spaces :: Spacer | Find Space, Rent Space";
$current_page = "search";
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid main-form">
            <div class="row console">
                <div class="col-md-10">
                    <div class="search_header">
                        <h1>Search Spaces</h1>
                    </div>
                    <form id="main_search" enctype="multipart/form-data" method="post" action="includes/update_user.php" class="form-horizontal">
                        <div class="form-group">
                            <select id="space_type" class="form-control" required>
                                <option selected="selected" disabled="disabled">Space Type</option>
                                <option>Art Space</option>
                                <option>Garage Space</option>
                                <option>Fitness Space</option>
                                <option>Office Space</option>
                                <option>Work Space</option>
                                <option>All Spaces</option>
                            </select>
                            <input type="text" id="space_city" class="form-control" placeholder="City" required>
                            <input type="text" maxlength="2" id="space_state" class="form-control" placeholder="State" required>
                        </div>
                        <button href="#results" class="btn btn-primary" id="search_submit" type="submit">Search Spaces</button>
                    </form>
                    <div id="results">

                    </div>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>