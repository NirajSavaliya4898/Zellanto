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
            <a href='lenseform.php' class="btn btn-round btn-dark">Insert</a>
        </div>
        <?php
        $qry="select *,l.description as description from lenses l,media m,brand b where l.media_id=m.media_id and l.brand_id=b.brand_id order by lense_id Desc";
        $result=mysqli_query($con,$qry);
        ?>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="brandid" data-sortable="true">Brand</th>
                <th data-field="mediaid" data-sortable="true">Media</th>
                <th data-field="lensename" data-sortable="true">Lense Name</th>
                <th data-field="filtersize" data-sortable="true">Filter Size</th>
                <th data-field="maxaperature" data-sortable="true">MaxAperature</th>
                <th data-field="warranty" data-sortable="true">warranty</th>
                <th data-field="desc" data-sortable="true">Description</th>
                <th data-field="price" data-sortable="true">Price</th>
                <th data-field="edit" data-sortable="true">Update</th>
                <th data-field="delete" data-sortable="true">Delete</th>
            </thead>
            <tbody>
            <?php
            while($lst=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$lst['name']."</td>";
                echo "<td><img  style='height:100px;width:100px;' src='./media/".$lst['media_url']."'></td>";
                echo "<td>".$lst['lense_name']."</td>";
                echo "<td>".$lst['filtersize']."</td>";
                echo "<td>".$lst['maxaperature']."</td>";
                echo "<td>".$lst['warranty']."</td>";
                echo "<td>".$lst['description']."</td>";
                echo "<td>".$lst['price']."</td>";
                echo "<td><a href='lenseedit_form.php?lid=".$lst['lense_id']."'><i class='fa fa-edit'></i></a></td>";
                echo "<td><a href='lense_delete.php?lid=".$lst['lense_id']."'><i class='fa fa-trash'></i></a></td>";
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
        
        // function operateFormatter() {
        //     return [
        //         "<a rel='tooltip' title='Edit' class='table-action edit' href='mediaedit_form.php?mid='.$_REQUEST['mid'].' title='Edit'>",
        //             "<i class='fa fa-edit'></i>",
        //         "</a>",
        //         "<a rel='tooltip' title='Remove' class='table-action remove' href='media_delete.php?mid='$lst['media_id']&url='$lst['media_url']' title='Remove'>",
        //             "<i class='fa fa-remove'></i>",
        //         "</a>"
        //     ].join('');
        // }       
    </script>

</html>