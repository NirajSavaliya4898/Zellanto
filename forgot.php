<li class="list-inline-item">
    <a href="forgot" class="dropdown-toggle" data-toggle="dropdown"></a>
                        <ul class="dropdown-menu dropdown-lr animated" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Forgot Password</b></h3></div>
                                <form id="ajax-login-form" action="index.php" method="post" role="form" autocomplete="off">
                                <div class="form-group">
                                        <label for="username">E-mail</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Your E-mail Address" value="" autocomplete="off">
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