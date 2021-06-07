<section class="product-1">
        <div class="container">
          <header class="animated bounceInLeft">
            <h2 class="h3 heading-line">Cameras Collection</h2>
          </header>
          <div class="row d-flex flex-row align-items-stretch">
            <div class="col-lg-12">
              <div class="row">
                <?php
                  $qry="select * from camera c,media m,brand b where c.media_id=m.media_id and c.brand_id=b.brand_id  order by cam_id Desc limit 6";
                  $result=mysqli_query($con,$qry);
                  while($lst=mysqli_fetch_array($result))
                  {
                                
                ?>
                <div class="col-md-4">
                  <div class="item">
                    <div class="product-grid5">
                      <div class="product-image5">
                            <a href="#">
                                <img class="pic-2 img-thumbnail" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>">
                                <!-- <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg"> -->
                            </a>
                            <ul class="social">
                                <li><a href="cartsession.php?catid=<?php echo $catid[0];?>&product_id=<?php echo $lst['cam_id']; ?>&addcart=1" title="Add to cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="wishlistsession.php?product_id=<?php echo $lst['cam_id']; ?>" title="Wishlist" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cartsession.php?catid=<?php echo $catid[0];?>&product_id=<?php echo $lst['cam_id']; ?>&buy_now=1" title="Buy Now" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            </ul>
                            <a href="viewcamera.php?catid=<?php echo $catid[0];?>&cid=<?php echo $lst['cam_id']; ?>&name=<?php echo $lst['name']; ?>&camname=<?php echo $lst['cam_name']; ?>" class="select-options"><i class="fa fa-arrow-right"></i> View Camera... </a>
                        </div><br/>
                      </div>
                      <h4><?php echo $lst['name']."-".$lst['cam_name']; ?></h4>
                      <p class="text-primary">₹ <?php echo $lst['price']; ?></p>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </section>