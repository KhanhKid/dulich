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
            <h1 class="page-header">Tất cả các Banner</h1>
        </div>
        <div class="col-lg-12">
            <a href="/ad/addbanner"><button type="button" class="btn btn-primary">Thêm Banner mới</button></a>
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
                                    <th>Hinh</th>
                                    <th>Timestamp</th>
                                    <th>Tool</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                foreach ($data as $key => $value) {
                                    # code...
                                    echo '<tr class="odd gradeX">
                                    <td>'.$i.'</td>
                                    <td><img style="width:300px" src="'.$value->img.'"/></td>
                                    
                                    <td>'.$value->timestamp.'</td>
                                    <td><span  data="'.$value->id.'" " class="delete glyphicon glyphicon-remove" aria-hidden="true"></span></td>
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
        var id = $(this).attr('data');
        var r = confirm("Muốn xoá banner '"+id+"'");
        if (r == true) {
            window.location.href="/ad/removebanner/"+id;
        }
    });
});
</script>