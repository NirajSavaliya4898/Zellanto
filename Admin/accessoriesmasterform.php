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
                                <h4 class="title">Insert AccessoriesMaster</h4>
                                <?php if(isset($_REQUEST['error']) == 1): ?>
                                <div class="alert alert-danger">Please fill the required fields.
                            </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <div class="container-fluid">
                                <form action="accessoriesmaster_insert.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="acccat" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Accessories Category</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="des" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
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
</body>
</html>
