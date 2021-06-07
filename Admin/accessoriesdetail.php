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
        <div align="right">
            <a href='accessoriesform.php' class="btn btn-round btn-dark">Insert</a>
        </div>
        <?php
        $qry="select * from accessories a,media m,brand b,accessoriesmaster am where a.media_id=m.media_id and a.brand_id=b.brand_id and a.Acc_cat_id=am.acc_cat_id order by Acc_id Desc";
        $result=mysqli_query($con,$qry);
        ?>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="brand" data-sortable="true">Brand</th>
                <th data-field="media" data-sortable="true">Media</th>
                <th data-field="accname" data-sortable="true">AccName</th>
                <th data-field="warranty" data-sortable="true">Warranty</th>
                <th data-field="des1" data-sortable="true">Description1</th>
                <th data-field="des2" data-sortable="true">Description2</th>
                <th data-field="price" data-sortable="true">Price</th>
                <th data-field="edit" data-sortable="true">Update</th>
                <th data-field="delete" data-sortable="true">Delete</th>
            </thead>
            <tbody>
            <?php
            while($lst=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$lst['name']." ".$lst['acc_cat']."</td>";
                echo "<td><img  style='height:100px;width:100px;' src='./media/".$lst['media_url']."'></td>";
                echo "<td>".$lst['acc_name']."</td>";
                echo "<td>".$lst['warranty']."</td>";
                echo "<td>".$lst['description1']."</td>";
                echo "<td>".$lst['description2']."</td>";
                echo "<td>".$lst['price']."</td>";
                echo "<td><a href='accessoriesedit_form.php?aid=".$lst['Acc_id']."'><i class='fa fa-edit'></i></a></td>";
                echo "<td><a href='accessories_delete.php?aid=".$lst['Acc_id']."'><i class='fa fa-trash'></i></a></td>";
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