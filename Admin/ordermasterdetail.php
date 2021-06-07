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
        <?php
        $qry="select * from ordermaster order by order_id Desc";
        $result=mysqli_query($con,$qry);
        ?>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="customer" data-sortable="true">Customer</th>
                <th data-field="date" data-sortable="true">Date</th>
                <th data-field="paymentmode" data-sortable="true">Payment Mode</th>
                <th data-field="totalqty" data-sortable="true">Total QTY</th>
                <th data-field="price" data-sortable="true">Price</th>
                <th data-field="cgst" data-sortable="true">CGST</th>
                <th data-field="sgst" data-sortable="true">SGST</th>
                <th data-field="totalprice" data-sortable="true">Total Price</th>
                <th data-field="orderstatus" data-sortable="true">Order Status</th>
                <th data-field="edit" data-sortable="true">Update</th>
                <th data-field="delete" data-sortable="true">Delete</th>
                <th data-field="view" data-sortable="true">View</th>
            </thead>
            <tbody>
            <?php
            while($lst=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$lst['cust_id']."</td>";
                echo "<td>".$lst['date']."</td>";
                echo "<td>".$lst['pay_mode']."</td>";
                echo "<td>".$lst['totalqty']."</td>";
                echo "<td>".$lst['price']."</td>";
                echo "<td>".$lst['cgst']."</td>";
                echo "<td>".$lst['sgst']."</td>";
                echo "<td>".$lst['totalprice']."</td>";
                echo "<td>".$lst['order_status']."</td>";
                echo "<td><a href='ordermasteredit_form.php?oid=".$lst['order_id']."'><i class='fa fa-edit'></i></a></td>";
                echo "<td><a href='ordermaster_delete.php?oid=".$lst['order_id']."'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a href='orderme.php?oid=".$lst['order_id']."'><i class='fa fa-eye'></i></a></td>";
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
                pageSize: 10,
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