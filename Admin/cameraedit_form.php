<?php session_start();?>
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
                                <h4 class="title">Edit CameraDetails</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="camera_update_code.php">
                                    <?php 
                                    $qry="select * from camera c,media m WHERE c.media_id=m.media_id and c.cam_id=".$_REQUEST['cid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group"> 
                                              <input type="hidden" Name="hdncid" value="<?php echo $lst['cam_id'];?>">     
                                              <input type="text" Name="camname" required placeholder="" value="<?php echo $lst['cam_name'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Camera Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group"> 
                                            <select class="form-control" name="brandid" required="">
                                            <?php 
                                            $qry="select * from brand";
                                            $result=mysqli_query($con,$qry);
                                            while($lst1=mysqli_fetch_array($result)) 
                                            {
                                            ?>
                                            <option value="<?php echo $lst1['brand_id']; ?>"><?php echo $lst1['name']; ?></option>
                                              <?php 
                                              }
                                              ?> 
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
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
                                                 <img  height="100px" width="100px" name="media_image" id="media_image" style="visibility:visible;" src="../admin/media/<?php echo $mid[1];?>"/>
                                                 <br><br>
                                                <?php endif; ?> -->
                                                <button type="button" class="btn btn-dark pull" data-toggle="modal" data-target="#exampleModal"> Select Media</button> 
                                                <img height="100px" width="100px" id="media_image" src="media/<?php echo $lst['media_url']; ?>" name="txtmid">
                                                <input type="hidden" name="txtmid" id="txtmid" value="<?php echo $lst['media_id']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc1" required placeholder="" value="<?php echo $lst['description1'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description1</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc2" required placeholder="" value="<?php echo $lst['description2'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc3" required placeholder="" value="<?php echo $lst['description3'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description3</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="warranty" required placeholder="" value="<?php echo $lst['warranty'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Warranty</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="price" required placeholder="" value="<?php echo $lst['price'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Price</label>
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
        <?php include("footer.php"); ?>
    </div>
</div>
    <?php include("bootomfooter.php");?>
</body>
                                    