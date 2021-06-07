<?php session_start(); ?>
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
                                <h4 class="title">Manage Order</h4>
                            </div>
                            <div class="content">
                                <form action="ordermaster_update_code.php" method="POST" enctype="multipart/form-data">
                                  <?php 
                                    $qry="select * from ordermaster where order_id=".$_REQUEST['oid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">
                                              <input type="hidden" Name="hdnoid" value="<?php echo $lst['order_id'];?>">      
                                              <input type="text" Name="custid" required placeholder="" value="<?php echo $lst['cust_id'];?>" >
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Customer ID</label>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="date" required placeholder="" value="<?php echo $lst['date'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="paymentmode" required placeholder="" value="<?php echo $lst['pay_mode'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Payment Mode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="cgst" required placeholder="" value="<?php echo $lst['cgst'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>CGST</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="sgst" required placeholder="" value="<?php echo $lst['sgst'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>SGST</label>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="price" required placeholder="" value="<?php echo $lst['price'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Price</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="totalqty" required placeholder="" value="<?php echo $lst['totalqty'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Total Quantity</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="totalprice" required placeholder="" value="<?php echo $lst['totalprice'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Total Price</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="orderstatus" required placeholder="" value="<?php echo $lst['order_status'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Order Status</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark pull-right">Update</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
    <?php include("footer.php");?>
    <?php include("bootomfooter.php");?>
</body>
