<?php $message_count = count(get_messages($messages)); ?>

<div class="col-md-2 sidebar">
    <ul class="nav nav-sidebar text-xs-center">
        <li><a <?php if ($current_page == 'dashboard') { echo "class='prof_active'"; } ?> href="dashboard.php">
                <i class="fa fa-dashboard"></i><span class="no_under"> &nbsp; </span>Dashboard
            </a></li>
        <li><a <?php if ($current_page == 'inbox') { echo "class='prof_active'"; } ?> href="inbox.php">
                <i class="fa fa-envelope"></i><span class="no_under"> &nbsp; </span>Inbox (<?php echo $message_count; ?>)
            </a></li>
        <li><a <?php if ($current_page == 'profile') { echo "class='prof_active'"; } ?> href="profile.php">
                <i class="fa fa-user"></i><span class="no_under"> &nbsp; </span>Profile
            </a></li>
        <li><a <?php if ($current_page == 'spaces') { echo "class='prof_active'"; } ?> href="spaces.php">
                <i class="fa fa-home"></i><span class="no_under"> &nbsp; </span>Your Spaces
            </a></li>
        <li><a <?php if ($current_page == 'search') { echo "class='prof_active'"; } ?> href="search.php">
                <i class="fa fa-search"></i><span class="no_under"> &nbsp; </span>Search
            </a></li>
    </ul>
</div>