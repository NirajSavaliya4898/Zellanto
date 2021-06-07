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
                                <h4 class="title">Insert Slider</h4>
                                <?php if(isset($_REQUEST['error']) == 1): ?>
                                <div class="alert alert-danger">Please fill the required fields.
                            </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <div class="container-fluid">
                                <form action="slider_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="title" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="subtitle" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Sub Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="btntext" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Button Text</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="btnurl" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Button Url</label>
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
</html>
