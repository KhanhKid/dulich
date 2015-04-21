<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">DETAIL TOUR</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4">
                <p>Tên Tour: <input name="name" type="text" style="width:100%" /><p>
                <p>Ghi Chú: <input name="texthot" type="text" style="width:100%" /><p>
                <p>Giá: <input name="name" type="number" style="width:100%" /><p>
                <p>Số ngày: <input name="name" type="number" style="width:100%" /><p>
                <p>Số đêm: <input name="name" type="number" style="width:100%" /><p>
                <p>Phương tiện: <input name="name" type="text" style="width:100%" /><p>
                <p>Ngày đi: <input name="name" type="text" style="width:100%" /><p>
                <p>Type: <select class="form-control">
                          <option value="1">Trong nước</option>
                          <option value="2">Ngoài nước</option>
                          <option value="3">Khuyến Mãi</option>
                          <option value="4">Tour Free</option>
                        </select>

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