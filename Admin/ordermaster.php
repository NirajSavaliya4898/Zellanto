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
                                <h4 class="title">Order Details</h4>
                                <p class="category">Modify the Details of Order</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <!-- <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Accessories ID</th>
                                    	<th>Accessories Name</th>
                                        <th>Accessories Category ID</th>
                                        <th>Brand ID</th>
                                        <th>Media ID</th>
                                        <th>warranty</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>Price</th>
                                    </thead>
                                    <?php 
                                    include("connection.php");
                                    $qry="select * from accessories";
                                    $result=mysqli_query($con,$qry);
                                    while($lst=mysqli_fetch_array($result))
                                    {
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>".$lst['Acc_id']."</td>";
                                        echo "<td>".$lst['acc_name']."</td>";
                                        echo "<td>".$lst['acc_cat_id']."</td>";
                                        echo "<td>".$lst['brand_id']."</td>";
                                        echo "<td>".$lst['media_id']."</td>";
                                        echo "<td>".$lst['warranty']."</td>";
                                        echo "<td>".$lst['description1']."</td>";
                                        echo "<td>".$lst['description2']."</td>";
                                        echo "<td>".$lst['price']."</td>";
                                        echo "</tr>"; 
                                        echo "</tbody>";  
                                    }
                                    ?>      
                                </table> -->
                                <?php include('ordermasterdetail.php');?>
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
    <?php include("bootomfooter.php");?>


</html>
