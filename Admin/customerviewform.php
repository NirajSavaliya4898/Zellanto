<!doctype html>
<?php include("connection.php");?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../admin/image/z.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Zellanto Admin</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>   
</head>
<body>
    
<div class="wrapper">
    <div class="fresh-table full-screen-table">
        <div>
            <a href='customer.php' class="btn btn-round btn-dark">Back</a>     
        </div>
        <?php
            $qry="select * from customer where cust_id=".$_REQUEST['cid'];
            $result=mysqli_query($con,$qry);
        ?>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="customername" data-sortable="true">Customer Name</th>
                <th data-field="address" data-sortable="true">Address</th>
                <th data-field="locality" data-sortable="true">Locality</th>
                <th data-field="pincode" data-sortable="true">Pincode</th>
                <th data-field="city" data-sortable="true">City</th>
                <th data-field="landmark" data-sortable="true">Landmark</th>
                <th data-field="state" data-sortable="true">State</th>
                <th data-field="contact" data-sortable="true">Contact</th>
                <th data-field="alternatenumber" data-sortable="true">Alternate Number</th>
            </thead>
            <tbody>
                <?php
                    while($lst=mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$lst['name']."</td>";
                        echo "<td>".$lst['address']."</td>";
                        echo "<td>".$lst['locality']."</td>";
                        echo "<td>".$lst['pincode']."</td>";
                        echo "<td>".$lst['city']."</td>";
                        echo "<td>".$lst['landmark']."</td>";
                        echo "<td>".$lst['state']."</td>";
                        echo "<td>".$lst['contact']."</td>";
                        echo "<td>".$lst['alternateno']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
    <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
        
    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'), 
            full_screen = false,
            window_height;
            
        $().ready(function(){
            
            window_height = $(window).height();
            table_height = window_height - 20;
            
            
            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: false,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: true,
                height: table_height,
                pageSize: 5,
                pageList: [25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });    
        });   
    </script>

</html>