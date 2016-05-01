<div class="col-md-3 sidebar">
    <ul class="nav nav-sidebar">
        <li><a <?php if ($current_page == 'dashboard') { echo "class='prof_active'"; } ?> href="dashboard.php">Your Dashboard</a></li>
        <li><a <?php if ($current_page == 'profile') { echo "class='prof_active'"; } ?> href="profile.php">Your Profile</a></li>
        <li><a <?php if ($current_page == 'spaces') { echo "class='prof_active'"; } ?> href="spaces.php">Your Spaces</a></li>
        <li><a <?php if ($current_page == 'about') { echo "class='prof_active'"; } ?> href="#">Spaces You've Used</a></li>
        <li><a <?php if ($current_page == 'search') { echo "class='prof_active'"; } ?> href="search.php">Search Spaces</a></li>
    </ul>
</div>