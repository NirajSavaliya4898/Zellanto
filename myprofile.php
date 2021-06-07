<?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <?php if(! isset($_SESSION['user'])){ ?>
      <?php include("cartlogin.php");?>
    <?php } else {?>  
    <div class="contact-page">
      <!-- Breadcrumb -->
      <div class="container">
            <div>&nbsp;</div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
              <li class="breadcrumb-item text-uppercase">My Profile</a></li>
            </ol>
      </div>
      <!-- Contact page-->
       <br>
       <div id="address-form" class="container address-form">
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <div class="form">
                        <div class="note">
                            <p>My Profile</p>
                        </div>
                        <div class="form-content">
                        <form action="myprofile_edit.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12" align="right">
                            <button id="shipping-submit" class="oder-now btn btn-unique btn-lg">Edit Profile</button>                                
                        </div>
                        <?php

                            $qry="select * from user WHERE user_name='".$_SESSION['user']."'";
                            $result=mysqli_query($con,$qry);
                            $lst=mysqli_fetch_array($result);

                            $cust_qry="select * from customer WHERE user_id =".$lst['user_id'];
                            $result1=mysqli_query($con,$cust_qry);
                            $lst1=mysqli_fetch_array($result1);
                            
                        ?>
                        <div class="row">
                                    <div class="col-md-6">
                                        <strong>Name:</strong>
                                        <input type="hidden" name="hdnmid" required value="<?php echo $lst1['cust_id'];?>">
                                        <input type="text" Name="name" disabled required="" class="form-control" value="<?php echo $lst1['name'];?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Contact Number:</strong>
                                        <input type="text" Name="number" disabled required="" class="form-control" value="<?php echo $lst1['contact'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Address:</strong>
                                        <input type="text" Name="add" disabled required="" class="form-control" value="<?php echo $lst1['address'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Locality:</strong>
                                        <input type="text" Name="locality" disabled required="" class="form-control" value="<?php echo $lst1['locality'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Pincode:</strong>
                                        <input type="text" Name="pincode" disabled required="" class="form-control" value="<?php echo $lst1['pincode'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>City:</strong>
                                        <input type="text" Name="city" disabled required="" class="form-control" value="<?php echo $lst1['city'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>State:</strong>
                                        <input type="text" Name="state" disabled required="" class="form-control" value="<?php echo $lst1['state'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Land Mark:</strong>
                                        <input type="text" Name="landmark" disabled required="" class="form-control" value="<?php echo $lst1['landmark'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Alternate No:</strong>
                                        <input type="text" Name="acontect" disabled required="" class="form-control" value="<?php echo $lst1['alternateno'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>E-Mail ID:</strong>
                                        <input type="text" Name="email1" disabled required="" class="form-control" value="<?php echo $lst['email'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>User Name:</strong>
                                        <input type="text" Name="username1" disabled required="" class="form-control" value="<?php echo $lst['user_name'];?>" />
                                    </div>
                                    <div class="col-md-12">
                                        <strong>Password:</strong>
                                        <input type="password" Name="pass1" disabled required="" class="form-control" value="<?php echo $lst['password'];?>" />
                                    </div>
                                    <div>&nbsp;</div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
        <?php }?>
<style type="text/css">
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #000000 , #b1b4bb);
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
.section {
    padding: 5px 0 !important;
}
</style>

    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>