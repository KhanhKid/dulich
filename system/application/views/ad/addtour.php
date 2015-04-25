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
                <p>Tên Tour: <input name="name" placeholder="HÀ NỘI - MAI CHÂU - MỘC CHÂU - HÀ NỘI" type="text" value="" style="width:100%" /><p>
                <p>Ghi Chú: <input name="texthot" placeholder="Giảm 10%" type="text" value="" style="width:100%" /><p>
                <p>Giá: <input name="price" type="number" placeholder="4500000" value="" style="width:100%" /><p>
                <p>Số ngày (đi 4 ngày):  <input name="timeday" placeholder="4" type="number" value="" style="width:100%" /><p>
                <p>Số đêm ( 3 đêm): <input name="timenight" placeholder="3" type="number" value="" style="width:100%" /><p>
                <p>Phương tiện: <input name="how" type="text" placeholder="đi máy bay" value="" style="width:100%" /><p>
                <p>Ngày đi: <input name="startdate" type="text" placeholder="Ngày 25/4/2015 hoặc CN hằng tuần" v value="" style="width:100%" /><p>
                <p>Type: <select name="type" class="form-control">
                          <option value="1" >Trong nước</option>
                          <option value="2" >Ngoài nước</option>
                          <option value="3" >Khuyến Mãi</option>
                          <option value="4" >Tour Free</option>
                        </select>
                </p>                
				<!--<p>Khu Vực : <select name="locationid" class="form-control">
						<option value="0" >Không</option>
						<?php foreach($location as $value){
                          echo '<option value="'.$value->ID.'" >Trong nước</option>';
                        } ?>
						</select>
                </p>-->
                <p>Image: <input name="img" type="text" value="" style="width:100%" />


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
                <button type="submit" class="btn btn-success">Lưu tour</button>
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