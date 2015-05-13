 <script src="/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SỬA TOUR</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php
                if(strlen($notice)>0){
                    echo '<div class="alert alert-info">'.$notice.'</div>';
                }
            ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="post">
                <p>Tên Tour: <input name="name" type="text" value="<?php echo $data->name ?>" style="width:100%" /><p>
                <p>Ghi Chú: <input name="texthot" type="text" value="<?php echo $data->texthot ?>" style="width:100%" /><p>
                <p>Giá: <input name="price" type="number" value="<?php echo $data->price ?>" style="width:100%" /><p>
                <p>Số ngày: <input name="timeday" type="number" value="<?php echo $data->timeday ?>" style="width:100%" /><p>
                <p>Số đêm: <input name="timenight" type="number" value="<?php echo $data->timenight ?>" style="width:100%" /><p>
                <p>Phương tiện: <input name="how" type="text" value="<?php echo $data->how  ?>" style="width:100%" /><p>
                <p>Ngày đi: <input name="startdate" type="text" value="<?php echo $data->startdate ?>" style="width:100%" /><p>
                <p>Type: <select name="type" class="form-control">
                          <option value="1" <?php echo ($data->type == 1)?"selected":"";?>>Trong nước</option>
                          <option value="2" <?php echo ($data->type == 2)?"selected":"";?>>Ngoài nước</option>
                          <option value="3" <?php echo ($data->type == 3)?"selected":"";?>>Khuyến Mãi</option>
                          <option value="4" <?php echo ($data->type == 4)?"selected":"";?>>Tour Free</option>
                        </select>
                </p>
                <p>Location: <select class="form-control">
                          <option value="0"></option>
                        </select>
                </p>

                <p>Image: <input name="img" type="text" value="<?php echo $data->img ?>" style="width:100%" /> <br> <center><img width="200px" src="<?php echo $data->img ?>"></center>
                </p>

                <p>
                    <center><h3><span>TỔNG QUAN</span></h3></center>
                    <textarea name="tongquan" id="tongquan" rows="10" cols="80">
                        <?php echo $data_detail->tongquan ?>
                    </textarea>
                </p>
                <p>
                    <center><h3><span>HÀNH TRÌNH</span></h3></center>
                    <textarea name="hanhtrinh" id="hanhtrinh" rows="10" cols="80">
                        <?php echo $data_detail->hanhtrinh ?>
                    </textarea>
                </p>
                <p>
                    <center><h3><span>BẢNG GIÁ</span></h3></center>
                    <textarea name="banggia" id="banggia" rows="10" cols="80">
                        <?php echo $data_detail->banggia ?>
                    </textarea>
                </p>
                <p>
                    <center><h3><span>ĐIỀU KIỆN</span></h3></center>
                    <textarea name="dieukien" id="dieukien" rows="10" cols="80">
                        <?php echo $data_detail->dieukien ?>
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