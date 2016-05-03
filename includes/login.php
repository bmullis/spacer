<div id="modal" style="display:none;">
    <div class="container">
        <div class="row">
            <section class="login_header col-md-8 col-md-offset-2">
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </section>
        </div>

        <div class="row">
            <section class="user_login col-md-4 col-md-offset-2">
                <form method="post" action="includes/get_user.php" class="form-horizontal">
                    <div class="form-group">
                        <h1>Sign In</h1>
                        <input type="email" id="log_email" name="email" class="form-control" placeholder="Email address" required>
                        <input type="password" id="log_password" name="password" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" id="log_submit" name="log_submit" type="submit">Sign in</button>
                </form>
            </section>

            <section class="user_register col-md-4">
                <form method="post" action="includes/create_user.php" class="form-horizontal">
                    <div class="form-group">
                        <h1>Register</h1>
                        <input type="email" id="reg_email" name="email" class="form-control" placeholder="Email address" required>
                        <input type="password" id="reg_password" name="password" class="form-control" placeholder="Password" required>
                        <input type="password" id="conf_password" name="conf_password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button class="btn btn-lg btn-primary" id="reg_submit" name="reg_submit" type="submit">Register</button>
                </form>
                <div id="error"></div>
            </section>
        </div>
    </div>
</div>