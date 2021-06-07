<li class="list-inline-item" >
                        <?php if(! isset($_SESSION['user'])){ ?>
                            <a href="register" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <?php }?>
                        <ul class="dropdown-menu dropdown-lr" role="menu">
                            <div class="col-lg-12" id="register-section">
                                <div class="text-center"><h3><b>Register</b></h3></div>
                                <form id="ajax-register-form" action="registrationcode.php" method="post" role="form" autocomplete="off">
                                  <div class="form-group">
                                    <input type="text" required="" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                  </div>
                                  <div class="form-group">
                                    <input type="email" required="" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" required="" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" required="" name="confirm-password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
                                      </div>
                                    </div>
                                  </div>
                                  <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>
                            </div>
                        </ul>
                    </li>
<script>
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>