<section class="product-2">
        <div class="container">
          <header class="animated bounceInLeft">
            <h2 class="h3 heading-line">Lenses Collection</h2>
          </header>
          <div class="row d-flex flex-row align-items-stretch">
            <div class="col-lg-5">
              <div class="item item-big text-right">
                <h2>EF70-200mm</h2>
                <h3> f/2.8L IS III USM </h3></h2>
                <h4 class="title">Warranty :- 2 Years</h4>
                <h4 class="title">Price :- ₹ 125000.00</h4>
                <div>
                  <a href="http://localhost/zellanto/viewlense.php?catid=2&lid=1&name=Canon&lensename=EF70-200mm%20f/2.8L%20IS%20III%20USM" target="_blank" class="btn btn-unique btn-lg">Shop Now</a>
                  <center><img class="img-responsive" class="img-fluid" style="height: 500px !important;width: 400px !important;" src="img/EF70-200mm.jpg" alt="Lense"></center>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <?php
                $con=mysqli_connect("localhost","root","") or die("Could not connect");
                mysqli_select_db($con,"zellanto") or die("Could not select db");
                $qry="select * from lenses l,media m,brand b where l.media_id=m.media_id and l.brand_id=b.brand_id order by lense_id Desc limit 4";
                $result=mysqli_query($con,$qry);
                while($lst=mysqli_fetch_array($result))
                {
                ?>
                <div class="col-md-6">
                  <div class="item">
                    <div class="product-grid5">
                      <div class="product-image5">
                                    <a href="#">
                                        <img class="pic-2 img-thumbnail" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>"><br/>
                                        <!-- <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg"> -->
                                    </a>
                                    <ul class="social">
                                        <li><a href="cartsession.php?catid=<?php echo $catid[1]; ?>&lense_id=<?php echo $lst['lense_id']; ?>&addcart=1" title="Add to cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="wishlistsession.php?lense_id=<?php echo $lst['lense_id']; ?>" title="Wishlist" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cartsession.php?catid=<?php echo $viewcatid;?>&lense_id=<?php echo $lst['lense_id']; ?>&buy_now=1" title="Buy Now" title="Buy Now" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    </ul>
                                    <a href="viewlense.php?catid=<?php echo $catid[1]; ?>&lid=<?php echo $lst['lense_id']; ?>&name=<?php echo $lst['name']; ?>&lensename=<?php echo $lst['lense_name']; ?>" class="select-options"><i class="fa fa-arrow-right"></i> View Lense... </a>
                                </div>
                                <h4><?php echo $lst['name']."-".$lst['lense_name']; ?></h4>
                                <p class="text-primary">₹ <?php echo $lst['price']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
              </div>
          </div>
        </div>
      </section>