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
                                <h4 class="title">Edit AccessoriesMaster</h4>
                            </div>
                            <div class="content">
                                <form action="accessoriesmaster_update_code.php" method="POST" enctype="multipart/form-data">
                                    <?php 
                                    $qry="select * from accessoriesmaster WHERE Acc_cat_id=".$_REQUEST['aid'];
                                    $result=mysqli_query($con,$qry);
                                    $lst=mysqli_fetch_array($result);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">
                                               <input type="hidden" Name="hdnaid" value="<?php echo $lst['Acc_cat_id'];?>">      
                                              <input type="text" Name="acccat" required value="<?php echo $lst['acc_cat'];?>">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Accessories Category</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="des" required placeholder="" value="<?php echo $lst['description']; ?>">
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
</body>
</html>
