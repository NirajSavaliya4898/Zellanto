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
                                <h4 class="title">Edit MediaDetails</h4>
                            </div>
                            <div class="content">
                                <form action="media_update_code.php" method="post" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from media WHERE media_id=".$_REQUEST['mid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="hidden" Name="hdnmid" value="<?php echo $lst['media_id'];?>">
                                              <input type="hidden" Name="mediaurl" value="<?php echo $lst['media_url'];?>">
                                              <img src="../admin/media/<?php echo $lst['media_url']; ?>" height="100" width="100">
                                                <input type="file"  Name="mediafile">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Media Url</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="mediatitle" required value="<?php echo $lst['media_title']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Media Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input rows="5" required placeholder="" Name="desc" value="<?php echo $lst['description']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-dark pull-right">Update</button>
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