<div class="col-md-3 sidebar">
    <ul class="nav nav-sidebar">
        <li><a <?php if ($current_page == 'dashboard') { echo "class='prof_active'"; } ?> href="dashboard.php">
                <i class="fa fa-dashboard"></i> &nbsp; Dashboard
            </a></li>
        <li><a <?php if ($current_page == 'inbox') { echo "class='prof_active'"; } ?> href="inbox.php">
                <i class="fa fa-envelope"></i> &nbsp; Inbox
            </a></li>
        <li><a <?php if ($current_page == 'profile') { echo "class='prof_active'"; } ?> href="profile.php">
                <i class="fa fa-user"></i> &nbsp; Profile
            </a></li>
        <li><a <?php if ($current_page == 'spaces') { echo "class='prof_active'"; } ?> href="spaces.php">
                <i class="fa fa-home"></i> &nbsp; Your Spaces
            </a></li>
        <li><a <?php if ($current_page == 'search') { echo "class='prof_active'"; } ?> href="search.php">
                <i class="fa fa-search"></i> &nbsp; Search
            </a></li>
    </ul>
</div>