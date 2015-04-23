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
            <h1 class="page-header">Tất cả các Tour</h1>
        </div>
        <div class="col-lg-12">
            <a href="/ad/addtour"><button type="button" class="btn btn-primary">Thêm Tour mới</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <hr>
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
                                    <th>Mã Tour</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>Type</th>
                                    <th>Time stamp</th>
                                    <th>Tool</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                foreach ($data as $key => $value) {
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
                                    <td>'.$i.'</td>
                                    <td><span style="display:none">'.$value->ID.'</span>SRTST-'.$value->ID.'</td>
                                    <td><a href="/ad/detailtour/'.$value->ID.'">'.$value->name.'</a></td>
                                    <td>'. number_format($value->price, 0, ",",".").'</td>
                                    <td>'.$value->startdate.'</td>
                                    <td>'.$type_name.'</td>
                                    <td>'.$value->timestamp.'</td>
                                    <td><span  data="'.$value->ID.'" dataname="'.$value->name.'" class="delete glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        | <a href="/ad/detailtour/'.$value->ID.'"<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </td>
                                    </tr>';
                                    $i++;
                                }?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
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
    $('.delete').click(function(event) {
        /* Act on the event */
        var name = $(this).attr('dataname');
        var r = confirm("Muốn xoá tour '"+name+"'");
        if (r == true) {
            var id = $(this).attr('data');
            window.location.href="/ad/remove/"+id;
        }
    });
});
</script>