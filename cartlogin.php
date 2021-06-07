<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$_SESSION['iscart']=$_REQUEST['cart'];
?>
<style type="text/css">
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left,  #000000 , #b1b4bb);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
           <br/>
           <div id="login-form" class="container login-form">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <div class="form">
                <div class="note">
                    <p>Login</p>
                </div>
                <div class="form-content">
                <form action="logincode.php" method="post" role="form" autocomplete="off">
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" required="" name="username" placeholder="Username">
                    <div class="input-group-append">
                    </div>
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" name="pass" required="" id="password" class="form-control" placeholder="Password" data-toggle="password">
                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-eye"></i>
                        </span>
                    </div>
                  </div>
                  <div align="right">
                    <button name="login" id="btn-submit" class="btn btn-unique btn-lg" value="Log In">Login</button>
                  </div>
                </form>
              </div>
              <div class="d-flex justify-content-center links">
                Don't have an account?<a href="cartregister.php">Sign Up</a>
              </div>
              <div class="d-flex justify-content-center">
                <a href="cartforgot.php">Forgot your password?</a>
              </div><br/>
            </div>
          </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<script  src="assets/js/bootstrap-show-password.js"></script>
