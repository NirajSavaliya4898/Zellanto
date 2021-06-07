<nav class="navbar navbar-expand-lg px-lg-0">
      <div class="container position-relative">
        <!-- Navbar Brand-->
        <a href="index.php" class="navbar-brand"> <img src="./img/zeel.png" alt="logo"></a>
        <!-- Toggle Button-->
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Menu-->
        <?php
              error_reporting(E_ERROR);
              foreach ($_SESSION['cart'] as $key => $value){
                $qty=$qty+$value['cart_qty'];
                $qaty=$value['cart_qty']+$value['cart_qty'];
              }
        ?>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <div class="navbar-nav ml-auto align-items-lg-center">
            <div class="nav-item dropdown">
              <a id="navbarHome" data-target="#" href="index.php" class="nav-link nav-ba">Home<i class="fa fa-caret"></i></a></div>
                <div class="nav-item">
                  <a id="navbarCategory" data-target="#" href="index.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Category<i class="fa fa-caret-down"></i></a>
                    <div aria-labelledby="navbarCategory" class="dropdown-menu" style="left:auto;">
                      <a href="camera.php" class="dropdown-item">Cameras</a>
                      <a href="lenses.php" class="dropdown-item">Lenses</a>
                      <a href="accessories.php" class="dropdown-item">Accessories</a></div>
                    </div>
            <!-- Megamenu-->
            <div class="nav-item"><a href="#" data-toggle="dropdown" class="nav-link">Our Products<i class="fa fa-caret-down"></i></a>
              <div class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-4 d-none d-lg-block">
                    <div>&nbsp;</div>
                    <div><img height="350px" width="350px" src="./img/sidebar.png"></div> 
                  </div>
                  <div class="col-lg-8">
                    <div class="row px-lg-3 py-lg-5">
                      <div class="col-lg-4">
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Homepage</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="index.php" class="megamenu-list-link">Homepage  </a></li>
                            </ul>
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Categories</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="camera.php" class="megamenu-list-link">Cameras</a></li>
                              <li class="megamenu-list-item"><a href="lenses.php" class="megamenu-list-link">Lenses</a></li>
                              <li class="megamenu-list-item"><a href="accessories.php" class="megamenu-list-link">Accessories</a></li>
                            </ul>
                      </div>
                      <div class="col-lg-4">
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Order process</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="cart.php" class="megamenu-list-link">Shopping cart + checkout   </a></li>
                              <li class="megamenu-list-item"><a href="wishlist.php" class="megamenu-list-link">Wishlist   </a></li>
                            </ul>
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Blog</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="blog.php" class="megamenu-list-link">Blog</a></li>
                              <li class="megamenu-list-item"><a href="ourteam.php" class="megamenu-list-link">Our Team</a></li>
                            </ul>
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Contact Us</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="contact.php" class="megamenu-list-link">Contact Us</a></li>
                            </ul>
                      </div>
                      <div class="col-lg-4">
                            <!-- Megamenu list-->
                            <h6 class="heading-line">Information</h6>
                            <ul class="megamenu-list list-unstyled">
                              <li class="megamenu-list-item"><a href="page.php?page-id=5" class="megamenu-list-link">About Us   </a></li>
                              <li class="megamenu-list-item"><a href="page.php?page-id=1" class="megamenu-list-link">Tream & Conditions   </a></li>
                              <li class="megamenu-list-item"><a href="page.php?page-id=2" class="megamenu-list-link">Privancy Policy   </a></li>
                              <li class="megamenu-list-item"><a href="page.php?page-id=3" class="megamenu-list-link">Shipping Policy   </a></li>
                              <li class="megamenu-list-item"><a href="page.php?page-id=4" class="megamenu-list-link">Return and Refund Policy   </a></li>
                            </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Megamenu end    -->
            <!-- <div class="nav-item"><a href="#" data-toggle="dropdown" class="nav-link">Our Products<i class="fa fa-caret-down"></i></a>
              <div class="nav-item dropdown-menu">
                Hay 
              </div>
            </div> -->
            <!-- Multi level dropdown    -->
            <!-- <div class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown<i class="fa fa-caret-down"></i></a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a>
                <div class="dropdown-submenu"><a id="navbarDropdownMenuLink2" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">Multilevel dropdown<i class="fa fa-caret-down"></i></a>
                  <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a>
                    <div class="dropdown-submenu"><a id="navbarDropdownMenuLink3" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">
                         
                        Another action<i class="fa fa-caret-down"></i></a>
                      <div aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Action</a></div>
                    </div><a href="#" class="dropdown-item">Something else here</a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Multi level dropdown end      -->
            <div class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></div>
            <div class="nav-item">
                    <?php include("registration.php");?>
                    <?php include("login.php");?>
            </div>
            <div class="nav-item">
              <ul class="list-inline">
                <li class="list-inline-item"><a id="search" href="#" class="nav-link">
                    <div class="icon search"><i class="icon-magnifying-glass"></i></div></a></li>
                <li class="list-inline-item"><a href="cart.php" class="nav-link">
                    <div class="icon cart"><i class="icon-cart"></i></div>
                    <?php if(!empty($qty))
                    { ?>
                    <span class="d-md-none d-lg-inline"><span class="no"><?php echo $qty;?></span>items</span>
                   <?php } ?>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

