    <?php include("header.php"); ?>
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <div class="cart-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase">Order Details</li>
        </ol>
      </div>
      <!-- Shopping Cart Section-->
      <section class="cart">
        <div class="container">
          <div class="cart-holder">
            <div class="shipping-main">
                <h3 class="heading-line">Order Details</h3>
            <div class="cart-heading text-center">
              <div class="row">
                <div class="col-5 text-left">Product</div>
                <div class="col-2">Price</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Total</div>
                <div class="col-1"></div>
              </div>
            </div>
            <div class="cart-body text-center">
              <?php
                $qry="select * from orderdetail o,media m where o.media_id=m.media_id and order_id=".$_REQUEST['oid'];
                $result=mysqli_query($con,$qry);
                while($lst=mysqli_fetch_array($result))
                {
                ?>
              <div class="row cart-item">
                <div class="col-5">
                  <div class="product-overview text-left d-flex"><img style='height:100px;width:100px;' src="../media/<?php echo $value['media_url']; ?>" >
                    <div class="product-details">
                        <h3 class="h4"><?php echo $lst['prod_id'];?></h3></div>
                  </div>
                </div>
                <div class="col-2"><strong><?php echo $lst['price'];?></strong></div>
                <div class="col-2">
                  <div class="product-quantity d-flex align-items-center justify-content-center">
                    <input value="1" class="quantity">
                  </div>
                </div>
                <div class="col-2"><strong><?php echo $lst['price'];?></strong></div>
              </div>
              </div>
            </div>
          </div>
          <div class="total-price text-right">
            <div class="container">
              <div class="d-flex justify-content-end align-items-center"><span class="h3">Total: &nbsp;</span><strong class="h2 text-primary"><?php echo $lst['price'];?></strong></div>
            </div>
          </div>
          <?php }?>
          </div>
          </div>
        </div>
      </section>
     
      <br/>
      <?php if($cnt != 0){ ?>
      <div align="center">
            <a href='index.php' id="shipping-submit" class="oder-now btn btn-unique btn-lg">Continue Shopping</a>
            <a href='order.php?cart=1' id="shipping-submit" class="oder-now btn btn-unique btn-lg">Place Order</a>
          <?php } ?>
      </div>
    </div>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
        <!-- Footer-->
    <?php include("footer.php");?>