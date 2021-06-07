                    <?php
                                if(isset($_COOKIE['username']) and isset ($_COOKIE['password']))
                                {
                                    // $username=$_COOKIE['username'];
                                    // $password=$_COOKIE['password'];
                                    // echo $_COOKIE['username'];
                                    echo "<script type='text/javascript'>
                                            document.getElementById('username').value='test';
                                            document.getElementById('password').value=".$_COOKIE['password'].";
                                            </script>";
                                }
                ?>
                    <li class="list-inline-item">
                        <?php if(! isset($_SESSION['user'])){ ?>
                            <a href="login" id="login_link" name="login_link" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <?php } else {?>
                            <a href="login" id="login_link" name="login_link" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["user"];?><span class="caret"></span></a>
                            <div aria-labelledby="lang" class="dropdown-menu">
                                <a href="myprofile.php">MY PROFILE</a><br/>
                                <a href="myprofile_edit.php">UPDATE PROFILE</a><br/>
                                <a href="orderhistory.php">MANAGE ORDER</a><br/>
                                <a href="wishlist.php">WISHLIST</a><br/>
                                <a href="logout.php">LOGOUT</a><br/>
                            </div>
                        <?php }?>
                        <ul id="login-dropdown" class="dropdown-menu dropdown-lr" role="menu">
                            <div class="col-lg-12 login-section">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="logincode.php" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username1">Username</label>
                                        <input type="text" name="username" id="username1" tabindex="1" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember" />
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="cartforgot.php" tabindex="5" class="forgot-password" id="forgot-password" >Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>
                            </div>

                            <!-- Forgot pass -->

                            <div class="col-lg-12 forgot-pass-section hide">
                                <div class="text-center"><h3><b>Forgot Password</b></h3></div>
                                <form id="ajax-login-form" action="forgot_code.php" method="post" role="form" autocomplete="off">
                                <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" required name="email" id="email" tabindex="1" class="form-control" placeholder="Your E-mail Address... .. ." value="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-success" value="Reset Password">
                                            </div>
                                        </div>
                                </div>
                                <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>
                            </div>

                        </ul>
                    </li>
                    <!--set cookie-->
<style type="text/css">
    .my-login-list li{
    float: left !important;
    padding-right: 10px;
}
.hide{
    display: none;
}
</style>