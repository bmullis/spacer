    <div class="container-fluid online_widget">
        <div class="row">
            <div class="col-md-12 text-left">
                <h3>Online Users:</h3>
                <?php $online = get_online_users($online_users); ?>
                <?php
                    for ($i = 0; $i < count($online); $i++) {
                        $key = show_owner($users, $online[$i]);
                        echo "<a href='view_profile.php?user=" . base64_encode($key->value->email) . "'><img class='owner_pic' src='" . $key->value->prof_pic . "'></a>\n";
                    }
                ?>
            </div>
        </div>
    </div>