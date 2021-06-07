<?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <?php 
    $qry = "SELECT * FROM pagemaster WHERE page_id = '".$_REQUEST['page-id']."' ORDER BY page_id DESC LIMIT 1";
    $result = mysqli_query($con,$qry);
    while($lst=mysqli_fetch_array($result)){?>

    <div class="contact-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item active text-uppercase"><?php echo $lst['page_title']; ?></li>
        </ol>
      </div>
      <!-- Contact page-->
      <section class="contact p-t-small">
        <div class="container">

          <header class="mb-5">
            <h1 class="heading-line"><?php echo $lst['page_title']; ?></h1>
            <p class="lead text-muted">
              <?php echo $lst['content']; ?>
            </p>
          </header>
          
        </div>
      </section>
      
    </div>
  <?php } ?>
    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>