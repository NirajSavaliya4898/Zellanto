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
                                <h4 class="title">Edit PageMaster</h4>
                            </div>
                            <div class="content">
                                <form action="pagemaster_update_code.php" method="POST" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from pagemaster WHERE page_id=".$_REQUEST['pid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">
                                               <input type="hidden" Name="hdnpid" value="<?php echo $lst['page_id'];?>">      
                                              <input type="text" Name="pagetitle" required value="<?php echo $lst['page_title'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Page Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">   
                                              <textarea name="contain" rows="5" style="width: 100%;"><?php echo $lst['content']; ?></textarea>   
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
    <?php include("bootomfooter.php");?>
</div>
</body>
</html>
