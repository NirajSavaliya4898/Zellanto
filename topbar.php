<style type="text/css">
/* General sizing */
ul.dropdown-lr {
  width: 300px;
}
/* mobile fix */
@media (max-width: 768px) {
  .dropdown-lr h3 {
    color: #eee;
  }
  .dropdown-lr label {
    color: #eee;
  }
}
</style>
 
<div class="top-bar d-none d-sm-block">
      <div class="container">
      <?php if(isset($_REQUEST['username'])){ ?>
          <div class="alert alert-danger" align="center">Username Already Taken... .. .!!</div>  
      <?php }?>
      <?php if(isset($_REQUEST['email'])){ ?>
          <div class="alert alert-danger" align="center">E-Mail Already Taken... .. .!!</div>  
      <?php }?>
        <div class="row">
          <!-- <div class="col-sm-4 col-md-3">
            <ul class="list-inline d-flex flex-row">
              <li class="list-inline-item"> 
                <div class="dropdown"><a id="currency" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">USD</a>
                  <div aria-labelledby="currency" class="dropdown-menu"><a href="#" class="dropdown-item">EUR</a><a href="#" class="dropdown-item">EGP</a><a href="#" class="dropdown-item">AUD</a></div>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="dropdown"><a id="lang" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">English</a>
                  <div aria-labelledby="lang" class="dropdown-menu"><a href="#" class="dropdown-item">French</a><a href="#" class="dropdown-item">Spanish</a><a href="#" class="dropdown-item">Arabic</a></div>
                </div>
              </li>
            </ul>
          </div> -->
          <div class="col-sm-12 col-md-12 text-right account-details">
              <ul class="list-inline  navbar-right">
                    <?php include("registration.php");?>
                    <?php include("login.php");?>
              </ul>
          </div>
        </div>
      </div>
    </div>
