<?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>          
          <br/>   
           <div id="address-form" class="container address-form">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <div class="form">
                <div class="note">
                    <p>Forgot Password</p>
                </div>
                <div class="form-content">
                  <form action="forgot_code.php" method="post" role="form" autocomplete="off">
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="text" class="form-control" name="email" placeholder="E-Mail">
                    </div>
                    <div class="form-group" align="right">
                      <button id="shipping-submit" class="oder-now btn btn-unique btn-lg">Reset Password</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
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
<!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>