<!-- DataTables CSS -->
<link href="/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="/template/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">\
<!-- DataTables JavaScript -->
<script src="/template/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


<div id="page-wrapper">
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
                                    <th>Mã Order</th>
                                    <th>Name</th>
                                    <th>Thông Tin</th>
                                    <th>Nội dung</th>
                                    <th>TourID</th>
                                    <th>Time stamp</th>
                                    <th>Tool</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $key => $value) {
                                    echo '<tr class="odd gradeX">
                                    <td>'.$i.'</td>
                                    <td>'.$value->ID.'</td>
                                    <td>'.$value->name.'</td>
                                    <td>
                                    Tên: '.$value->name.'<br>
                                    Địa Chỉ: '.$value->address.'<br>
                                    SDT: '.$value->phone.'<br>
                                    Email: '.$value->email.'<br>
                                    Số Lượng: '.$value->people_max.'<br>
                                    Trên 5 tuổi: '.$value->childrent_5.'<br>
                                    Dưới 5 tuổi: '.$value->childrent_max.'<br>
                                    </td>
                                    <td>'.$value->content.'</td>
                                    <td><a href="http://www.sunrisetsttravel.com/i/tour/'.$value->tourid.'" target="_blank">SRTST-'.$value->tourid.'</a></td>
                                    <td>'.$value->timestamp.'</td>                                    
                                    <td></td>                                    
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