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
                                <h4 class="title">Edit CategoryDetails</h4>
                            </div>
                            <div class="content">
                                <form action="category_update_code.php" method="post" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from category WHERE cat_id=".$_REQUEST['cid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    //echo $
                                    ?>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="group">      
                                              <input type="hidden" Name="hdncid" value="<?php echo $lst['cat_id'];?>">
                                                <input type="text" Name="catname" required value="<?php echo $lst['cat_name'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Category Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc" required placeholder="" value="<?php echo $lst['description']; ?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
                                            </div>
                                        </div>
                                    </div>
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
                                                <button type="button" class="btn btn-dark pull" data-toggle="modal" data-target="#exampleModal"> Select Media</button> 
                                                <img height="100px" width="100px" id="media_image" src="media/<?php echo $lst['media_url']; ?>" name="txtmid">
                                                <input type="hidden" name="txtmid" id="txtmid">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
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
