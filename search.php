<?php
$page_title = "Search Spaces :: Spacer | Find Space, Rent Space";
$current_page = "search";
session_start();
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid main-form">
            <div class="row console">
                <div class="col-md-10">
                    <h1>Search For Space</h1>
                    <form id="main_search" enctype="multipart/form-data" method="post" action="includes/update_user.php" class="form-horizontal">
                        <div class="form-group">
                            <select id="space_type" class="form-control">
                                <option selected="selected" disabled="disabled">Space Type</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                            <input type="text" id="space_city" class="form-control" placeholder="City">
                            <input type="text" id="space_state" class="form-control" placeholder="State">
                        </div>
                        <button href="#results" class="btn btn-primary" id="search_submit" type="submit">Search For a Space</button>
                    </form>
                    <div id="results">

                    </div>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>