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
                                <h4 class="title">Camera Details</h4>
                                <p class="category">Modify the Details of Cameras</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <!-- <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Camera ID</th>
                                    	<th>Camera Name</th>
                                        <th>Brand ID</th>
                                        <th>Media ID</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>Description3</th>
                                        <th>Warranty</th>
                                        <th>Body Price</th>
                                        <th>Body+Lense Price</th>
                                    </thead>
                                    <?php 
                                    $con=mysqli_connect("localhost","root","") or die(mysqli_error());
                                    mysqli_select_db($con,"zellanto") or die(mysqli_error());
                                    $qry="select * from camera c,media m,brand b where c.media_id=m.media_id and c.brand_id=m.brand_id";
                                    $result=mysqli_query($con,$qry);
                                    while($lst=mysqli_fetch_array($result))
                                    {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>".$lst['cam_id']."</td>";
                                        echo "<td>".$lst['cam_name']."</td>";
                                        echo "<td>".$lst['brand_id']."</td>";
                                        echo "<td>".$lst['media_url']."</td>";
                                        echo "<td>".$lst['description1']."</td>";
                                        echo "<td>".$lst['description2']."</td>";
                                        echo "<td>".$lst['description3']."</td>";
                                        echo "<td>".$lst['warranty']."</td>";
                                        echo "<td>".$lst['bodyprice']."</td>";
                                        echo "<td>".$lst['bodywithlenseprice']."</td>";
                                        echo "</tr>"; 
                                        echo "</tbody>";  
                                    }
                                    ?>      
                                </table> -->
                                <?php include('cameradetail.php');?>
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

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
