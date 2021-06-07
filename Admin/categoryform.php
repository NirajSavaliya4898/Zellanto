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
                                <h4 class="title">Insert CategoryDetails</h4>
                            </div>
                            <div class="content">
                                <form action="category_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="group">      
                                              <input type="text" Name="catname" required placeholder="" value="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Category Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc" required placeholder="" value="">
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
                                                <button type="button" class="btn btn-dark pull" data-toggle="modal" data-target="#exampleModal"> Add Media 
                                                </button>
                                                <img id="media_image" height="100px" width="100px" name="media_image" style="visibility:hidden;" src="">
                                                <input type="hidden" name="txtmid" id="txtmid">
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-dark pull-right">Insert</button>
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
