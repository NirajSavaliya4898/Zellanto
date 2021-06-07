<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//if(isset($_REQUEST['cat_id'])): 
  $catid= $_REQUEST['cat_id'];
//endif;  
?>
    <?php include("header.php"); ?>
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <div class="category-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase">Cameras</li>
        </ol>
      </div>
      <!-- Products-->
      <section class="products p-t-small">
        <div class="container">
          <header class="mb-5">
            <h1 class="heading-line">Cameras</h1>
          </header>
          <div class="row">
            <div class="col-lg-10 order-lg-2">
              <div class="row">
                <?php
                $search = $_GET['search'];

                if(isset($search)){
                    $qry="select * from camera c,media m,brand b where c.media_id=m.media_id and c.brand_id=b.brand_id AND c.cam_name LIKE '%".$search."%'";

                    $qry1="select * from lenses l,media m,brand b where l.media_id=m.media_id and l.brand_id=b.brand_id AND l.lense_name LIKE '%".$search."%'";

                    $qry2="select * from accessories a,media m,brand b where a.media_id=m.media_id and a.brand_id=b.brand_id AND a.acc_name LIKE '%".$search."%'";
                }
                else
                {

                }    
                    $result=mysqli_query($con,$qry);
                    $count = mysqli_num_rows($result);

                    $result1=mysqli_query($con,$qry1);
                    $count1 = mysqli_num_rows($result1);

                    $result2=mysqli_query($con,$qry2);
                    $count2 = mysqli_num_rows($result2);

                    if($count>0)
                    {
                      $result=$result;
                    }
                    else if ($count1>0) {
                      $result=$result1;
                    }
                    else if($count2>0) 
                    {
                      $result=$result2;
                    }
                    else
                    {

                      ?>
              <div class="col-sm-10">
                <div class="alert alert-danger text-center">* No Result Found *</div>
              </div>
            
                    <?php }


                    while($lst=mysqli_fetch_array($result))
                    {           
                ?>

              <div class="col-md-4 col-sm-6">
                  <div class="product-grid5">
                      <div class="product-image5">
                                  <a href="#">
                                      <img class="pic-2 img-thumbnail" src="../zellanto/admin/media/<?php echo $lst['media_url']; ?>">
                                      <!-- <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg"> -->
                                  </a>
                                  <ul class="social">
                                      <li><a href="cartsession.php?catid=<?php echo $catid ?>&product_id=<?php echo $lst['cam_id']; ?>" title="Add to cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="wishlistsession.php?product_id=<?php echo $lst['cam_id']; ?>" title="Wishlist" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                      <li><a href="" title="Buy Now" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  </ul>
                                  <a href="viewcamera.php?catid=<?php echo $catid[0];?>&cid=<?php echo $lst['cam_id']; ?>&name=<?php echo $lst['name']; ?>&camname=<?php echo $lst['cam_name']; ?> " class="select-options"><i class="fa fa-arrow-right"></i> View Camera... </a>
                              </div>
                              <div class="product-content">
                                  <h2 class="title"><a href="#">&nbsp;<?php echo $lst['name']."-".$lst['cam_name']; ?></a></h2>
                                 <div class="row">
                                      <div class=""><h3 class="title">Warranty :- </h3></div>
                                      <div class="Warranty">&nbsp;<?php echo $lst['warranty']; ?>Years</div>
                                  </div>
                                  <div class="row">
                                      <div class=""><h3 class="title">Price :- </h3></div>
                                      <div class="">&nbsp;<i class="fa fa-inr"> <?php echo $lst['price']; ?></i></div>
                                  </div>
                              </div><br/>     
                  </div>
              </div>
              <?php } ?>
              </div>
             
            </div>

            <?php include("sidebar.php");?>
          </div>
        </div>
      </section>
    </div>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>