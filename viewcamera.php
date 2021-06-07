    <?php 
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
      $viewcatid=$_REQUEST['catid'];
    ?>
    <?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <div class="details-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"><a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase"><a href="camera.php" class="text-primary">Cameras</li></a>
          <li class="breadcrumb-item active text-uppercase"><?php echo $_REQUEST['name']; ?>-<?php echo $_REQUEST['camname']; ?></li>
        </ol>
      </div>
      <!-- Item details -->
      <section class="item-details p-t-small p-b-small">
        <div class="container">
          <?php
          $qry="select * from camera c,media m,brand b where c.media_id=m.media_id and c.brand_id=b.brand_id  and c.cam_id=".$_REQUEST['cid'];
          $result=mysqli_query($con,$qry);
          $lst=mysqli_fetch_array($result);
          ?>
          <div class="row">
            <div class="col-md-6" align="center">
              <div data-slider-id="1" class="owl-carousel item-slider">
                <div class="item"> <img style="height: 400px !important;width: 400px !important;" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="Camera"></div>
                <div class="item"> <img style="height: 400px !important;width: 400px !important;" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="Camera"></div>
                <div class="item"> <img style="height: 400px !important;width: 400px !important;" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="Camera"></div>
              </div>
              <div data-slider-id="1" class="owl-thumbs">
                <button class="owl-thumb-item"><img src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="lens"></button>
                <button class="owl-thumb-item"><img src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="lens"></button>
                <button class="owl-thumb-item"><img src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" alt="lens"></button>
              </div><!-- 
              <img style="height: 300px !important;width: 250px !important;" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>" class="img-responsive" alt=""/> -->
              <div class="tabs">
          <ul class="menu_drop">
            <li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
              <ul>
                <li class="subitem1">
                  <a href="#"><?php echo $lst['description1']; ?>
                  <?php echo $lst['description2']; ?><?php echo $lst['description3']; ?></a>
                </li>
              </ul>
            </li>
            <li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
              <ul>
              <ul>
            <li class="subitem1"><a href="#">https://in.canon/en/consumer/products/search?category=photography&subCategory=ef-lenses</a></li>
          </ul>
          </ul>
        </li>
        <li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
          <ul>
            <li class="subitem1"><a href="#">Motorola Pulse Escape Wireless Over-Ear Headphones</a></li>
          </ul>
        </li>
      </ul>
        </div>
            </div>
            <div class="col-md-6">
              <h1 class="h2"><?php echo $lst['name']."-".$lst['cam_name']; ?></h1>
              <div class="price d-flex justify-content-between align-items-center text-primary"><i class="fa fa-inr"><?php echo $lst['price']; ?></i>
                <div class="d-flex justify-content-center">
                  <ul class="rate list-inline">
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
                </div>
              </div>
              <div class="model">
                <ul class="list-unstyled">
                  <li><span class="text-uppercase">Item No:</span><?php echo $lst['name']."-".$lst['cam_name']; ?></li>
                  <li><span class="text-uppercase">Category: </span></li>
                  <li><span class="text-uppercase">Availability: </span></li>
                </ul>
              </div>
              <div class="description">
                <p><?php echo $lst['description1']; ?></p>
                <p><?php echo $lst['description2']; ?></p>
                <p><?php echo $lst['description3']; ?></p>
              </div>
              <form action="#" method="get">
                <div class="row d-flex justify-content-between">
                  <div class="col-lg-6">
                    <ul class="product-quantity list-inline">
                      <li class="list-inline-item"> 
                        <h3 class="h5">Quantity</h3>
                      </li>
                      <li class="list-inline-item"> 
                        <div class="counter d-flex align-items-center justify-content-start">
                          <div class="minus-btn"><i class="icon-android-remove"></i></div>
                          <input type="text" value="1" class="quantity">
                          <div class="plus-btn"><i class="icon-android-add"></i></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="CTAs"> 
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="cartsession.php?catid=<?php echo $viewcatid ?>&product_id=<?php echo $lst['cam_id']; ?>&add_cart=1" class="add-cart item_add" class="btn btn-unique">Add To Cart</a>
                      <a href="cartsession.php?catid=<?php echo $catid[0];?>&product_id=<?php echo $lst['cam_id']; ?>&buy_now=1" class="add-cart item_add">BUY NOW</a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Related Items                         -->
      <section class="related-items p-t-small p-b-small">
        <div class="container">
          <h3 class="heading-line">You May Also Like</h3>
          <div class="row">
            <?php
                    $qry="select * from camera c,media m,brand b where c.media_id=m.media_id and c.brand_id=b.brand_id  order by cam_id Desc limit 3";
                    $result=mysqli_query($con,$qry);
                    while($lst=mysqli_fetch_array($result))
                    {           
                ?> 
              <div class="col-md-4 col-sm-6">
                  <div class="product-grid5">
                      <div class="product-image5">
                                  <a href="#">
                                      <img style="height: 300px !important;width: 250px !important;" class="pic-2 img-thumbnail" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>">
                                      <!-- <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg"> -->
                                  </a>
                                  <ul class="social">
                                      <li><a href="cartsession.php?catid=<?php echo $viewcatid;?>&product_id=<?php echo $lst['cam_id']; ?>&addcart=1" title="Add to cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="wishlistsession.php?product_id=<?php echo $lst['cam_id']; ?>" title="Wishlist" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="cartsession.php?catid=<?php echo $catid[0];?>&product_id=<?php echo $lst['cam_id']; ?>&buy_now=1" title="Buy Now" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  </ul>
                              </div>
                              <div class="product-content">
                                  <h2 class="title"><a href="#"><?php echo $lst['name']."-".$lst['cam_name']; ?></a></h2>
                                  <div class="row">
                                      <div class=""><h3 class="title">Price :- <i class="fa fa-inr"> <?php echo $lst['price']; ?></i></h3></div>
                                  </div>
                              </div><br/>     
                  </div>
              </div>
              <?php } ?>  
          </div>
        </div>
      </section>
    </div>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>