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
                                <h4 class="title">Insert Accessories</h4>
                                <?php if(isset($_REQUEST['error']) == 1): ?>
                                <div class="alert alert-danger">Please fill the required fields.
                            </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <form action="accessories_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="accname" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Accessories Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group"> 
                                            <select class="form-control" name="acccatid" required="">
                                              <option value="">--Select  Category--</option>
                                            <?php 
                                            $qry="select * from accessoriesmaster";
                                            $result=mysqli_query($con,$qry);
                                            while($lst=mysqli_fetch_array($result)) 
                                            {
                                            ?>
                                            <option value="<?php echo $lst['Acc_cat_id']; ?>"><?php echo $lst['acc_cat']; ?></option>
                                              <?php 
                                              }
                                              ?> 
                                              </select>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="group"> 
                                            <select class="form-control" name="brandid" required="">
                                              <option value="">--Select  Brand--</option>
                                            <?php 
                                            $qry="select * from brand";
                                            $result=mysqli_query($con,$qry);
                                            while($lst=mysqli_fetch_array($result)) 
                                            {
                                            ?>
                                            <option value="<?php echo $lst['brand_id']; ?>"><?php echo $lst['name']; ?></option>
                                              <?php 
                                              }
                                              ?> 
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">
                                              <!-- <?php
                                                $midno=mysqli_insert_id($con);  

                                                if(isset($_SESSION['last_id'])):

                                                $qry="select * from media WHERE media_id='".$_SESSION['last_id']."' order by media_id desc limit 1";
                                                //echo $midno;
                                                 $result =mysqli_query($con,$qry);
                                                 $mid=mysqli_fetch_row($result);
                                                 $mid[1];
                                                 ?>
                                                 <img  height="100px" width="100px" name="media_image" style="visibility:visible;" src="../admin/media/<?php echo $mid[1];?>"/>
                                                 <br><br>
                                                <?php endif; ?> -->      
                                              <button type="button" class="btn btn-dark pull" data-toggle="modal" data-target="#exampleModal"> Add Media 
                                                </button>
                                                <img id="media_image" height="100px" width="100px" name="media_image" style="visibility:hidden;" src="">
                                                <input type="hidden" name="txtmid" id="txtmid">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="des1" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="des2" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="warranty" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Warranty</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="price" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Price</label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row"> 
                                      <div class="col-md-12">
                                      <div class="content">
                                            <button type="submit" class="btn btn-dark pull-right">Insert</button>
                                        </div>
                                      </div>
                                    </div>
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