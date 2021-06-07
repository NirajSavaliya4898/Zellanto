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
                                <h4 class="title">Media Details</h4>
                                <p class="category">Modify the Details of Media</p>
                            </div>
                            <div class="content table-responsive table-full-width">     
                                <?php include('mediadetail.php');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
;        <?php include("footer.php");?>
    </div>
</div>
</body>
<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
    <!--   Core JS Files   -->
    <?php include("bootomfooter.php");?>
</html>
