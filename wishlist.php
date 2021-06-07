    <?php include("header.php"); ?>
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <?php if(! isset($_SESSION['user'])){ ?>
      <?php include("cartlogin.php");?>
    <?php } else {?>
    <div class="cart-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase">My Wishlist</li>
        </ol>
      </div>
      <!-- Shopping Cart Section-->
      <section class="cart">
        <div class="container">
          <div class="cart-holder">
            <div class="shipping-main">
                <h3 class="heading-line">My Wishlist</h3>
                <?php if(isset($_REQUEST['error']) == 1): ?>
                    <div class="alert alert-danger">Please fill the required fields.</div>
                <?php endif; ?>
            <div class="cart-heading text-center">
              <div class="row">
                <div class="col-5 text-left">Product</div>
                <div class="col-2">Description</div>
                <div class="col-2">Warranty</div>
                <div class="col-2">Price</div>
                <div class="col-1"></div>
              </div>
            </div>
            <div class="cart-body text-center">
              <?php
              $cnt = count($_SESSION['wishlist']);
              if($cnt != 0): 
              foreach ($_SESSION['wishlist'] as $key => $value){
               ?>
              <div class="row cart-item" caret="#">
                <div class="col-5">
                  <div class="product-overview text-left d-flex"><a href="#" class="product-img"><img src="Admin/media/<?php echo $value['cart_img']; ?>" alt="product" class="img-fluid"></a>
                    <div class="product-details"><a href="#">
                        <h3 class="h6"><?php echo $value['cart_title']; ?></h3></a></div>
                  </div>
                </div>
                <div class="col-2"><strong><?php echo $value['cart_desc']; ?></strong></div>
                <div class="col-2"><strong><?php echo $value['cart_warr']; ?>Year Warranty</strong></div>
                <div class="col-2"><strong><i class="fa fa-inr"> <?php echo number_format($value['cart_price'],2); ?></i></strong></div>
                <div class="col-1"><a href="wishlist_delete.php?key=<?php echo $key; ?>"><img src='img/delete_png.png' height='20px' width='20px'></i></a></div>
              </div>
          <?php } ?>
        <?php else: ?>
        <div>
          <img src="../zellanto/img/emptywishlist.jpg" class="img-responsive" alt="emptycart" class="img-fluid">
        </div>
        <div>
          <p>You Have No items In Your Wishlist .Start Adding... .. .!!</p>
        </div>
        <?php endif; ?>
          </div>
        </div>
      </section><br/>
    </div>
    <?php }?>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>