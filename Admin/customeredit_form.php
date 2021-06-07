<?php include("header.php");?>
<div class="wrapper">
    <?php include("sidebar.php");?>
    <div class="main-panel">
		<?php include("navbar.php");?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit CustomerDetails</h4>
                            </div>
                            <div class="content">
                                <form action="customer_update_code.php" method="POST" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from customer WHERE cust_id=".$_REQUEST['cid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group"> 
                                              <input type="hidden" Name="hdnaid" required value="<?php echo $lst['cust_id'];?>">     
                                              <input type="text" Name="name" required placeholder=""value="<?php echo $lst['name'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="number" required placeholder="" value="<?php echo $lst['contact'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Contect Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="pincode" required placeholder="" value="<?php echo $lst['pincode'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Pincode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="locality" required placeholder="" value="<?php echo $lst['locality'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Locality</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="add" required placeholder="" value="<?php echo $lst['address'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="city" required placeholder=""value="<?php echo $lst['city'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>City</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="state" required placeholder="" value="<?php echo $lst['state'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>State</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="landmark" required placeholder="" value="<?php echo $lst['landmark'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Landmark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="acontect" required placeholder="" value="<?php echo $lst['alternateno'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Alternate ContectNumber</label>
                                            </div>
                                        </div>
                                      </div>
                                      <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">
                                              <label>Address Type</label>
                                              <div class="row">     
                                                <input type="radio" Name="home" required placeholder="Home">Home
                                                <input type="radio" Name="work" required placeholder="Work">Work
                                            </div>
                                            </div>
                                        </div>
                                      </div> -->
                                    <div>
                                        <button type="submit" class="btn btn-dark pull-right">Update</button>
                                    </div>  
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </div>
</div>
    <?php include("bootomfooter.php");?>
</body>