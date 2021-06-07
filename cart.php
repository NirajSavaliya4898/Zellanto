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
          <li class="breadcrumb-item active text-uppercase">Shopping Cart</li>
        </ol>
      </div>
      <!-- Shopping Cart Section-->
      <section class="cart">
        <div class="container">
          <div class="cart-holder">
            <div class="shipping-main">
                <h3 class="heading-line">Shopping Cart</h3>
                <?php if(isset($_REQUEST['error']) == 1): ?>
                    <div class="alert alert-danger">Please fill the required fields.</div>
                <?php endif; ?>
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
              error_reporting(E_ERROR);
              $cnt = count($_SESSION['cart']);
              if($cnt != 0){ 
              $total = 0;
              foreach ($_SESSION['cart'] as $key => $value){
                $total = $total + $value['cart_total'];
               ?>
              <div class="row cart-item">
                <div class="col-5">
                  <div class="product-overview text-left d-flex"><a href="#" class="product-img"><img height="90px" width="90px" src="Admin/media/<?php echo $value['cart_img']; ?>" alt="product" class="img-fluid"></a>
                    <div class="product-details"><a href="#">
                        <h3 class="h6"><?php echo $value['cart_title']; ?></h3></a></div>
                  </div>
                </div>
                <div class="col-2"><strong><i class="fa fa-inr"> <?php echo number_format($value['cart_price'],2); ?></i></strong></div>
                <div class="col-2">
                  <div class="product-quantity d-flex align-items-center justify-content-center">
                    <div data="<?php echo $key; ?>" id="minus-btn" class="minus-btn"><i class="icon-android-remove"></i></div>
                    <input id="cart_qty" value="<?php if(isset($value['cart_qty'])) { echo $value['cart_qty']; } ?>" min="1" max="99" class="quantity">
                    <div data="<?php echo $key; ?>" id="plus-btn" class="plus-btn"><i class="icon-android-add"></i></div>
                  </div>
                </div>
                <div class="col-2"><strong><i class="fa fa-inr"> <span id="cart_total_<?php echo $key ?>" ><?php echo number_format($value['cart_total'],2); ?></i></span></strong></div>
                <div class="col-1"><a href="cart_delete.php?key=<?php echo $key; ?>"><img src='img/delete_png.png' height='20px' width='20px'></i></a></div>
              </div>
          <?php } ?>
          <div class="row cart-item">
                <div class="col-6"></div>
                <div class="col-2"></div>
                <div class="col-2">
                  <strong>Total:- </strong><br/>
                  <strong>CGST[6%] :- </strong><br/>
                  <strong>SGST[6%] :- </strong>
                </div>
                <div class="col-2">
                  <i class="fa fa-inr"><?php echo number_format($total,2); ?></i><br/>
                  <i class="fa fa-inr"> <?php echo number_format($total*6/100,2); ?></i><br/>
                  <i class="fa fa-inr"> <?php echo number_format($total*6/100,2); ?></i>
                </div>
          </div>    
          <div class="total-price text-right">
            <div class="container">
              <div class="d-flex justify-content-end align-items-center"><span class="h3">Total Bill: &nbsp;</span><strong class="h2 text-primary"><i class="fa fa-inr"> <?php echo $ftot= number_format($total+$total*6/100+$total*6/100,2); ?></i></strong></div>
            </div>
          </div>
          
        <?php } else { ?>
          <div>
            <img src="../zellanto/img/emptycart.png" class="img-responsive" alt="emptycart" class="img-fluid">
          </div>
          <div>
            <a href="wishlist.php"><i class="fa fa-plus">Add Items From Wishlist</i></a>
          </div>
          <p>&nbsp;</p>
        <?php } ?>
          </div>
        </div>
         <?php 
        { ?>
       <?php  }
      ?>
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