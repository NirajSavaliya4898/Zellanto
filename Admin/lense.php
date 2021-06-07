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
                                <h4 class="title">Lense Details</h4>
                                <p class="category">Modify the Details of Lenses</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <!-- <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Lense ID</th>
                                    	<th>Lense Name</th>
                                        <th>Brand ID</th>
                                        <th>Media ID</th>
                                        <th>Filter Size</th>
                                        <th>MaxAperature</th>
                                        <th>warranty</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </thead>
                                    <?php 
                                    $con=mysqli_connect("localhost","root","") or die(mysqli_error());
                                    mysqli_select_db($con,"zellanto") or die(mysqli_error());
                                    $qry="select * from lenses";
                                    $result=mysqli_query($con,$qry);
                                    while($lst=mysqli_fetch_array($result))
                                    {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>".$lst['lense_id']."</td>";
                                        echo "<td>".$lst['lense_name']."</td>";
                                        echo "<td>".$lst['brand_id']."</td>";
                                        echo "<td>".$lst['media_id']."</td>";
                                        echo "<td>".$lst['filtersize']."</td>";
                                        echo "<td>".$lst['maxaperature']."</td>";
                                        echo "<td>".$lst['warranty']."</td>";
                                        echo "<td>".$lst['description']."</td>";
                                        echo "<td>".$lst['price']."</td>";
                                        echo "</tr>"; 
                                        echo "</tbody>";  
                                    }
                                    ?>      
                                </table> -->
                                <?php include('lensedetail.php');?>
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
