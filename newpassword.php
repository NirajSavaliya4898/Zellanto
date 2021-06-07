<?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>          
          <br/>
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
           <div id="address-form" class="container address-form">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <div class="form">
                <div class="note">
                    <p>New Password</p>
                </div>
                <div class="form-content">
                  <form action="newpasswordcode.php" method="post" role="form" autocomplete="off">
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                      </div>
                      <input type="password" name="pass" id="password" class="form-control" placeholder="Password" data-toggle="password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-eye"></i>
                        </span>
                      </div>
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                      </div>
                      <input type="password" name="conpass" id="password" class="form-control" placeholder="Confirm Password" data-toggle="password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-eye"></i>
                        </span>
                      </div>
                    </div>
                    <div class="form-group" align="right" >
                      <button name="register" id="btn-submit" class="btn btn-unique btn-lg" value="Log In">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
</div>
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
<!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>