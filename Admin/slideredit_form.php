<?php session_start(); ?>
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
                                <h4 class="title">Edit SliderDetails</h4>
                            </div>
                            <div class="content">
                                <form action="slider_update_code.php">
                                    <?php 
                                    $qry="select * from slider s,media m WHERE s.media_id=m.media_id and s.slider_id=".$_REQUEST['sid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
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
                                              <input type="hidden" Name="hdnsid" value="<?php echo $lst['slider_id'];?>">     
                                              <input type="text" Name="title" required placeholder="" value="<?php echo $lst['title'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Title</label>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="subtitle" required placeholder="" value="<?php echo $lst['sub_title'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Sub Title</label>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">
                                                <button type="button" class="btn btn-dark pull" data-toggle="modal" data-target="#exampleModal"> Add Media 
                                                </button>
                                                <img src="media/<?php echo $lst['media_url']; ?>" height="100" width="100">
                                                <input type="hidden" name="txtmid" id="txtmid" value="<?php echo $lst['media_url'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="btntext" required placeholder="" value="<?php echo $lst['btn_text'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Button Text</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="btnurl" required placeholder="" value="<?php echo $lst['btn_url'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Button URL</label>
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
                                    