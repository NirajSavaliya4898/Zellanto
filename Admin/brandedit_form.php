<?php include("header.php");?>
<div class="wrapper">
    <?php include("sidebar.php");?>
    <div class="main-panel">
		<?php include("navbar.php");?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Brands</h4>
                            </div>
                            <div class="content">
                                <form action="brand_update_code.php" method="POST" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from brand where brand_id=".$_REQUEST['bid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="group">     
                                              <input type="hidden" name="hdnbid" value="<?php echo $lst['brand_id'];?>"> 
                                              <input type="text" Name="brandname" required placeholder="" value="<?php echo $lst['name'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Brand Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="buf" required placeholder="" value="<?php echo $lst['brandusefor']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Brand Used For</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc" required placeholder="" value="<?php echo $lst['description']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark pull-right">Update</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </div>
</div>
    <?php include("bootomfooter.php");?>
</body>
