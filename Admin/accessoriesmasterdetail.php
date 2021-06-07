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
            
            <a href='accessoriesmasterform.php' class="btn btn-round btn-dark">Insert</a>
        </div>
        <?php
        $con=mysqli_connect("localhost","root","") or die("Could not connect");
        mysqli_select_db($con,"zellanto") or die("Could not select db");
        $qry ="select * from accessoriesmaster order by Acc_cat_id Desc";
        $result=mysqli_query($con,$qry);
        ?>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="acccat" data-sortable="true">Accessories Category</th>
                <th data-field="des" data-sortable="true">Description</th>
                <th data-field="edit" data-sortable="true">Update</th>
                <th data-field="delete" data-sortable="true">Delete</th>
            </thead>
            <tbody>
            <?php
            while($lst=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$lst['acc_cat']."</td>";
                echo "<td>".$lst['description']."</td>";
                echo "<td><a href='accessoriesmasteredit_form.php?aid=".$lst['Acc_cat_id']."'><i class='fa fa-edit'></i></a></td>";
                echo "<td><a href='accessoriesmaster_delete.php?aid=".$lst['Acc_cat_id']."'><i class='fa fa-trash'></i></a></td>";
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

                showRefresh: true,
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