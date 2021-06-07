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
          <li class="breadcrumb-item text-uppercase"> <a href="cart.php" class="text-primary">Add Cart</a></li>
          <li class="breadcrumb-item active text-uppercase">Order</li>
        </ol>
      </div>
      <!-- Contact page-->
       <br>
       <div id="address-form" class="container address-form">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="form">
                <div class="note">
                    <p>ADDRESS</p>
                </div>
                <div class="form-content">
                <form action="myprofile_update_code.php" method="POST" enctype="multipart/form-data">
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
                                    <input type="hidden" Name="hdnmid" required value="<?php echo $lst1['user_id'];?>">
                                    <input type="hidden" Name="order" required value="orderpage">
                                    <input type="text" Name="name" required class="form-control" value="<?php echo $lst1['name'];?>" />
                                </div>
                                <div class="col-md-6">
                                    <strong>Contact Number:</strong>
                                    <input type="text" Name="number" required class="form-control" value="<?php echo $lst1['contact'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>Address:</strong>
                                    <input type="text" Name="add" required class="form-control" value="<?php echo $lst1['address'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>Locality:</strong>
                                    <input type="text" Name="locality" required class="form-control" value="<?php echo $lst1['locality'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>Pincode:</strong>
                                    <input type="text" Name="pincode" required="" class="form-control" value="<?php echo $lst1['pincode'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>City:</strong>
                                    <input type="text" Name="city" required class="form-control" value="<?php echo $lst1['city'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>State:</strong>
                                    <input type="text" Name="state" required class="form-control" value="<?php echo $lst1['state'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>Land Mark:</strong>
                                    <input type="text" Name="landmark" required class="form-control" value="<?php echo $lst1['landmark'];?>" />
                                </div>
                                <div class="col-md-12">
                                    <strong>Alternate No:</strong>
                                    <input type="text" Name="acontect" required class="form-control" value="<?php echo $lst1['alternateno'];?>" />
                                </div>
                                <div class="col-md-12">
                                        <strong>E-Mail ID:</strong>
                                        <input type="text" Name="email1" disabled="" required="" class="form-control" value="<?php echo $lst['email'];?>" />
                                </div>
                                <div>&nbsp;</div>
                                <div class="col-md-12" align="right">
                                    <button href='payment.php' class="oder-now btn btn-unique btn-lg">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <div class="form">
                <div class="note">
                    <p>ORDER SUMMERY</p>
                </div>
                <form action="orderprocess.php">
                <section style="padding: 5px;" class="cart">
                <div class="container">
                        <?php if(isset($_REQUEST['error']) == 1): ?>
                            <div class="alert alert-danger">Please fill the required fields.</div>
                        <?php endif; ?>
                        <div class="cart-heading text-center">
                          <div class="row">
                            <div class="col-4 text-left">Product</div>
                            <div class="col-3">Price</div>
                            <div class="col-2">Quantity</div>
                            <div class="col-3">Total</div>
                            <div class="col-1"></div>
                          </div>
                        </div>
                        <div class="cart-body text-center">
                          <?php
                            if(isset($_SESSION['cart'])): 
                            $total = 0;
                            foreach ($_SESSION['cart'] as $key => $value){
                            $total = $total + $value['cart_total'];
                           ?>
                          <div class="row cart-item">
                            <div class="col-4">
                              <div class="product-overview text-left d-flex"><a href="#" class="product-img"><img height="90px" width="90px" src="Admin/media/<?php echo $value['cart_img']; ?>" alt="product" class="img-fluid"><h3 class="h6"><?php echo $value['cart_title']; ?></h3></a>
                              </div>
                            </div>
                            <div class="col-3"><strong><i class="fa fa-inr"> <?php echo number_format($value['cart_price'],2); ?></i></strong></div>
                            <div class="col-2">
                              <div class="product-quantity d-flex align-items-center justify-content-center">
                              <div data="<?php echo $key; ?>" id="minus-btn" class="minus-btn"><i class="icon-android-remove"></i></div>
                              <input id="cart_qty" value="<?php if(isset($value['cart_qty'])) { echo $value['cart_qty']; } ?>" min="1" max="99" class="quantity">
                              <div data="<?php echo $key; ?>" id="plus-btn" class="plus-btn"><i class="icon-android-add"></i></div>
                            </div>
                            </div>
                            <div class="col-3"><strong><i class="fa fa-inr"> <span id="cart_total_<?php echo $key ?>" ><?php echo number_format($value['cart_total'],2); ?></i></strong></div>
                          </div>
                      <?php } ?>  
                      <div class="row cart-item">
                        <div class="col-6"></div>
                        <div class="col-3">
                        <strong>Total:- </strong><br/>
                        <strong>CGST[6%] :- </strong><br/>
                        <strong>SGST[6%] :- </strong>
                      </div>
                      <div class="col-3">
                          <i class="fa fa-inr"><?php echo number_format($total,2); ?></i><br/>
                          <i class="fa fa-inr"> <?php echo number_format($total*6/100,2); ?></i>
                          <i class="fa fa-inr"> <?php echo number_format($total*6/100,2); ?></i>
                      </div>
                  </div>  
                      <div class="total-price text-right">
                        <div class="container">
                          <div class="d-flex justify-content-end align-items-center"><span class="h3">Total: &nbsp;</span><strong class="h2 text-primary"><i class="fa fa-inr"> <?php echo $ftot= number_format($total+$total*6/100+$total*6/100,2); ?></i></strong></div>
                        </div>
                        <?php else: ?>
                          <div class="alert alert-danger">Your cart is empty  !</div>
                        <?php endif; ?>
                  </div>
                </section><br/>
                <div class="col-md-12" align="right">
                    <button href='#' class="oder-now btn btn-unique btn-lg">Order Now</button>
                </div>
            </form>
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
.myorderpage .section {
    padding: 5px 0 !important;
}
</style>

    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>