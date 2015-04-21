<!-- DataTables CSS -->
<link href="/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="/template/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">\
<!-- DataTables JavaScript -->
<script src="/template/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>Type</th>
                                    <th>Time stamp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $value) {
                                    # code...
                                    $type_name = "";
                                    switch ($value->type) {
                                        case '1':
                                            $type_name = "Trong nước";
                                            break;
                                        case '2':
                                            $type_name = "Ngoài nước";
                                            break;
                                        case '3':
                                            $type_name = "Khuyến mãi";
                                            break;
                                        case '4':
                                            $type_name = "Free and easy";
                                            break;

                                        default:
                                            # code...
                                            break;
                                    }
                                    echo '<tr class="odd gradeX">
                                    <td>'.$value->ID.'</td>
                                    <td>'.$value->name.'</td>
                                    <td>'. number_format($value->price, 0, ",",".").'</td>
                                    <td>'.$value->startdate.'</td>
                                    <td>'.$type_name.'</td>
                                    <td>'.$value->timestamp.'</td>
                                    </tr>';
                                }?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <h4>DataTables Usage Information</h4>
                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
});
</script>