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
                                <h4 class="title">Insert CustomerDetails</h4>
                                <?php if(isset($_REQUEST['error']) == 1): ?>
                                <div class="alert alert-danger">Please fill the required fields.
                            </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <form action="customer_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="name" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="number" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Contect Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="pincode" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Pincode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="locality" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Locality</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">      
                                              <input type="text" rows="5" Name="add" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="city" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>City</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="state" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>State</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="landmark" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Landmark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="group">      
                                              <input type="text" Name="acontact" required placeholder="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Alternate ContectNumber</label>
                                            </div>
                                        </div>
                                      </div>
                                      <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="group">
                                              <label>Address Type</label>
                                              <div class="row">     
                                                <input type="radio" Name="home" required placeholder="Home">Home
                                                <input type="radio" Name="work" required placeholder="Work">
                                            </div>
                                            </div>
                                        </div>
                                    </div> -->
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
