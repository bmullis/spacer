<?php
$page_title = "Edit Space :: Spacer | Find Space, Rent Space";
$current_page = "spaces";
require_once ('includes/functions.php');
require_once ('includes/get_spaces.php');

session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}

$this_space = $_GET['space'];
$space_row = get_single_space($view, $this_space);
?>

<?php include_once ('layout/header.php'); ?>

    <section class="dashboard" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid main-form">

            <div class="row console">
                <div class="col-md-10">
                    <div class="search_header">
                        <h1>Edit Space</h1>
                    </div>
                    <br><br>
                    <form enctype="multipart/form-data" method="post" action="includes/update_space.php" class="form-horizontal">
                        <div class="form-group">
                            <input value="<?php echo $space_row->value->title; ?>" type="text" id="space_name" name="space_name" class="form-control" placeholder="Name Your Space" required>
                            <select id="space_type" name="space_type" class="form-control" required>
                                <option selected="selected" disabled="disabled">Space Type</option>
                                <option <?php if ($space_row->value->space_type == "Art Space") echo " selected"; ?>>Art Space</option>
                                <option <?php if ($space_row->value->space_type == "Garage Space") echo " selected"; ?>>Garage Space</option>
                                <option <?php if ($space_row->value->space_type == "Fitness Space") echo " selected"; ?>>Fitness Space</option>
                                <option <?php if ($space_row->value->space_type == "Office Space") echo " selected"; ?>>Office Space</option>
                                <option <?php if ($space_row->value->space_type == "Work Space") echo " selected"; ?>>Work Space</option>
                                <option <?php if ($space_row->value->space_type == "Other Space") echo " selected"; ?>>Other Space</option>
                            </select>
                            <input value="<?php echo $space_row->value->city; ?>"type="text" id="space_city" name="space_city" class="form-control" placeholder="City" required>
                            <input value="<?php echo $space_row->value->state; ?>"type="text" id="space_state" name="space_state" class="form-control" placeholder="State (use 2 letter abbrev)" maxlength="2" required>
                            <textarea id="space_desc" name="space_desc" class="form-control" placeholder="Describe Your Space" required><?php echo $space_row->value->desc; ?></textarea>
                            <br><img id="prev_space" class="owner_pic" src="<?php echo $space_row->value->image; ?>"><br><br>
                            <p>Change Space Image: </p>
                            <input type="file" id="space_image" name="space_image" >
                            <input type="hidden" name="space_curr_image" value="<?php echo $space_row->value->image; ?>">
                        </div>
                        <button class="btn btn-primary" id="update_submit" name="update_submit" type="submit">Update This Space</button>
                        <a href="spaces.php" class="btn btn-primary cancel">Cancel</a>
                    </form>
                </div>
                <?php include_once ('layout/sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php include_once ('layout/footer.php'); ?>