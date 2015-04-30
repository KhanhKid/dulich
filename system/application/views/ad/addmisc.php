 <script src="/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Thông Tin</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <center><h3><span style="color:red"><?php echo $notice ?></span></h3></center>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="post">
                <p>Tiêu đề: <input name="title" placeholder="Tiêu đề tin tức" type="text" value="" style="width:100%" /><p>
                
                <p>Loại thông tin: <select name="type" class="form-control">
                          <option value="1" >Visa</option>
                          <option value="2" >News</option>
                          <option value="3" >Nhật ký</option>
                          <option value="4" >Thắng cảnh</option>
                        </select>
                </p>
                <p>Hình: <input name="img" type="text" value="" style="width:100%" />
                </p>
                <p>
                    <center><h3><span>Nội Dung</span></h3></center>
                    <textarea name="content" id="content" rows="10" cols="80">
                    </textarea>
                </p>
                
                <center><button type="submit" class="btn btn-success">Lưu Thông Tin</button></center>
            </form>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<script>
$(document).ready(function() {
    CKEDITOR.replace( 'content' );
});
</script>