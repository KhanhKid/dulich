 <script src="/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ADD TOUR</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="post">
                <p>Tên Tour: <input name="name" type="text" value="" style="width:100%" /><p>
                <p>Ghi Chú: <input name="texthot" type="text" value="" style="width:100%" /><p>
                <p>Giá: <input name="price" type="number" value="" style="width:100%" /><p>
                <p>Số ngày: <input name="timeday" type="number" value="" style="width:100%" /><p>
                <p>Số đêm: <input name="timenight" type="number" value="" style="width:100%" /><p>
                <p>Phương tiện: <input name="how" type="text" value="" style="width:100%" /><p>
                <p>Ngày đi: <input name="startdate" type="text" value="" style="width:100%" /><p>
                <p>Type: <select name="type" class="form-control">
                          <option value="1" >Trong nước</option>
                          <option value="2" >Ngoài nước</option>
                          <option value="3" >Khuyến Mãi</option>
                          <option value="4" >Tour Free</option>
                        </select>
                </p>
                <p>Location: <select name = "locationid"class="form-control">
                          <option value="1">Trong nước</option>
                          <option value="2">Ngoài nước</option>
                          <option value="3">Khuyến Mãi</option>
                          <option value="4">Tour Free</option>
                        </select>
                </p>
                <input type = "submit" value="submit">
                <p>Image: 
                </p>

                <p>
                    <center><h3><span>TỔNG QUAN</span></h3></center>
                    <textarea name="tongquan" id="tongquan" rows="10" cols="80">
                    </textarea>
                </p>
                <p>
                    <center><h3><span>HÀNH TRÌNH</span></h3></center>
                    <textarea name="hanhtrinh" id="hanhtrinh" rows="10" cols="80">
                    </textarea>
                </p>
                <p>
                    <center><h3><span>BẢNG GIÁ</span></h3></center>
                    <textarea name="banggia" id="banggia" rows="10" cols="80">
                    </textarea>
                </p>
                <p>
                    <center><h3><span>ĐIỀU KIỆN</span></h3></center>
                    <textarea name="dieukien" id="dieukien" rows="10" cols="80">
                    </textarea>
                </p>
            </form>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<script>
$(document).ready(function() {
    CKEDITOR.replace( 'tongquan' );
    CKEDITOR.replace( 'hanhtrinh' );
    CKEDITOR.replace( 'banggia' );
    CKEDITOR.replace( 'dieukien' );
});
</script>