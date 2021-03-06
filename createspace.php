<?php
$page_title = "Create a Space :: Spacer | Find Space, Rent Space";
$current_page = "spaces";
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
                        <h1>Create a Space</h1>
                    </div>
                    <br><br>
                    <form enctype="multipart/form-data" method="post" action="includes/create_space.php" class="form-horizontal">
                        <div class="form-group">
                            <input type="text" id="space_name" name="space_name" class="form-control" placeholder="Name Your Space" required>
                            <select id="space_type" name="space_type" class="form-control" required>
                                <option selected="selected" disabled="disabled">Space Type</option>
                                <option>Art Space</option>
                                <option>Garage Space</option>
                                <option>Fitness Space</option>
                                <option>Office Space</option>
                                <option>Work Space</option>
                                <option>Other Space</option>
                            </select>
                            <input type="text" id="space_city" name="space_city" class="form-control" placeholder="City" required>
                            <input type="text" id="space_state" name="space_state" class="form-control" placeholder="State (use 2 letter abbrev)" maxlength="2" required>
                            <textarea id="space_desc" name="space_desc" class="form-control" placeholder="Describe Your Space" required></textarea>
                            <br><img id="prev_space" class="owner_pic" src="img/cube.png"><br><br>
                            <p>Change Space Image: </p>
                            <input type="file" id="space_image" name="space_image" required>
                        </div>
                        <button class="btn btn-primary" id="update_submit" name="update_submit" type="submit">Create This Space</button>
                        <a href="spaces.php" class="btn btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>