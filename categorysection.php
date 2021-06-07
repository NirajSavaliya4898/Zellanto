<section id="category_section" class="categories">
        <div class="container">
          <div class="categories-inner">
            <header>
              <h2 class="h5 heading-line d-none d-md-block">Categories</h2>
            </header>
            <?php if(isset($_SESSION['login_success'])){ ?>
              <div class="text-center alert alert-primary">Welcome To  <?php echo $_SESSION["user"];?> In Zellanto.com.</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['login_success']);?>

            <?php if(isset($_SESSION['login_fail'])){ ?>
              <div class="text-center alert alert-primary">User Not Login... .. .!!</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['login_fail']);?>

            <?php if(isset($_SESSION['register_success'])){ ?>
              <div class="text-center alert alert-primary">Thank you Registration With Zellanto.com.Visit Our Website.... ...</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['register_success']);?>

            <?php if(isset($_SESSION['register_fail'])){ ?>
              <div class="text-center alert alert-primary">Don't Registration... .. .!!</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['register_fail']);?>

            <?php if(isset($_SESSION['forgot_success'])){ ?>
              <div class="text-center alert alert-primary">Your Password has been sent to your email id... .. .!!</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['forgot_success']);?>

            <?php if(isset($_SESSION['forgot_fail'])){ ?>
              <div class="text-center alert alert-primary">... .. .Not. .. ...</div>  
              <p>&nbsp;</p>
            <?php } unset($_SESSION['forgot_fail']);?>

            <div class="row text-center">
              <?php
                    $qry="select * from category";
                    $result=mysqli_query($con,$qry);
                    $i=0;
                    while($lst=mysqli_fetch_array($result))
                    {
                    $catid[$i]=$lst['cat_id'];
                    ?>
                  <div class="col-md-4 item"><a href="<?php echo $lst['cat_name']; ?>.php?cat_id=<?php echo $lst['cat_id']; ?>">
                    <h4><?php echo $lst['cat_name']; ?></h4>
                    <p><?php echo $lst['description']; ?></p>
                    <div class="image"><img src="../zellanto/Admin/image/<?php echo $lst['media_url']; ?>" alt="" class="img-fluid"></div></a>
                  </div>
                <?php 
                  $i++;
                }
                ?>
          </div>
        </div>
      </section>