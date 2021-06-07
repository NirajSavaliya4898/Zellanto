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
                                <h4 class="title">Insert Brands</h4>
                                <?php if(isset($_REQUEST['error']) == 1): ?>
                                <div class="alert alert-danger">Please fill the required fields.
                            </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <form action="brand_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="brandname" required placeholder="" value="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Brand Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group">      
                                              <input type="text" Name="buf" required placeholder="" value="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Brand Used For</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="desc" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <button type="submit" class="btn btn-dark pull-right">Insert</button>
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
</html>