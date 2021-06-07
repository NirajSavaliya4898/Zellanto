<?php
  error_reporting(E_WARNING); 
  $catid= $_REQUEST['cat_id'];
?>
    <?php include('header.php');?>
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <div class="category-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase">Accessories</li>
        </ol>
      </div>
      <!-- Products-->
      <section class="products p-t-small">
        <div class="container">
          <header class="mb-5">
            <h1 class="heading-line">Accessories</h1>
          </header>
          <div class="row">
            <div class="col-lg-10 order-lg-2">
              <div class="row">
                <?php
                $limit = 9;  
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
                $start_from = ($page-1) * $limit;
                $qry="select * from accessories a,media m,brand b,accessoriesmaster am where a.media_id=m.media_id and a.brand_id=b.brand_id and a.Acc_cat_id=am.acc_cat_id order by Acc_id Desc LIMIT $start_from, $limit";
                $result=mysqli_query($con,$qry);
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
                                        <li><a href="cartsession.php?catid=<?php echo $catid ?>&Acc_id=<?php echo $lst['Acc_id']; ?>&ad_cart=1" title="Add to cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="wishlistsession.php?Acc_id=<?php echo $lst['Acc_id']; ?>" title="Wishlist" data-tip="Quick View"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="cartsession.php?catid=<?php echo $catid ?>&Acc_id=<?php echo $lst['Acc_id']; ?>&buy_now=1" title="Buy Now" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                    </ul>
                                    <a href="viewaccessories.php?catid=<?php echo $catid ?>&aid=<?php echo $lst['Acc_id']; ?>&name=<?php echo $lst['name']; ?>&Accname=<?php echo $lst['acc_name']; ?>" class="select-options"><i class="fa fa-arrow-right"></i> View Accessories... </a>
                                </div>
                                <div class="product-content">
                                    <h2 class="title"><a href="#">&nbsp;<?php echo $lst['name']."-".$lst['acc_name']; ?></a></h2>
                                    <div class="row">
                                        <div class=""><h3 class="title">Product Type :- </h3></div>
                                        <div class="Warranty">&nbsp;<?php echo $lst['acc_cat']; ?></div>
                                    </div>
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
                    <?php 
                    }
                    ?>
            </div>
            </div>
            <?php include("sidebar.php");?>
          </div>
        </div>
        <div class="col-md-12">
        <?php
          $sql = "SELECT COUNT(Acc_id) FROM accessories";  
          $rs_result = mysqli_query($con,$sql);  
          $row = mysqli_fetch_row($rs_result);  
          $total_records = $row[0];  
          $total_pages = ceil($total_records / $limit);  
          $pagLink = "<nav aria-label='Page navigation example' class='pull-right'><ul class='pagination pg-blue'>";  
          for ($i=1; $i<=$total_pages; $i++) {
              if($_REQUEST['page'] == $i) { $cls="page-item active"; } else { $cls="page-item"; }  
                $pagLink .= "<li class='".$cls."' ><a class='page-link' href='camera.php?page=".$i."'>".$i."</a></li>";  
          };  

          echo $pagLink . "</ul>";
        ?>
      </div>
      </section>
    </div>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>