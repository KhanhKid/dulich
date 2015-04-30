
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>

<div id="content-wapper-main">
		    <div id="content-wapper">
			    <div id="left-news">
	<div class="pathway-news">
      			<div itemscope=""><a href="/" itemprop="url" class="homepage"><span itemprop="title">Trang chủ</span></a></div>

     			<div itemscope=""  class="no-bg"><a href="/a/xe" itemprop="url" class="homepage"><span itemprop="title">cho thuê xe</span></a></div>


	</div>


	<div class="sub-left">
<form action="" method="post" name="frm" id="book">
			<center><h3><span style="color:red"><?php echo $notice ?></span></h3></center>
			<br>
			<div class="price_table">
				<?php echo $detail->banggia ?>
			</div>
			<br>
			<center><h2>THÔNG TIN LIÊN HỆ</h2></center>
			
			<ul class="form-booking">
				<li>
					<label>Họ và tên: (*) </label>
					<input type="text" name="name"> 
				</li>
				<li>
					<label>Địa chỉ: (*)</label>
					<input type="text" name="address" class="form-control" id="address"> 
				</li>
				
				<li>
					<label>Điện thoại: (*)</label>
					<input type="text" name="phone" class="form-control" id="phone"> 
				</li>
				<li>
					<label>Email:(*)</label>
					<input type="text" name="email" class="form-control" id="email"> 
				</li>
				
				<li>
					<label>Số người lớn: (*)</label>
					<input class="number-people" class="form-control" type="text" name="people_max" id="people_max"> 
				</li>
				<li>
					<label>Trẻ em: </label>
					<input class="number-people" class="form-control" type="text" name="childrent_5" id="childrent_5"> Dưới 5 tuổi
					<input class="number-people" class="form-control" type="text" name="childrent_max" id="childrent_max"> Trên 5 tuổi
				</li>
				<li>
					<label>&nbsp; </label>
					Chú ý: Nếu có trẻ em vui lòng ghi rõ độ tuổi
				</li>
				<li>
					<label>Ghi chú: </label>
					<textarea rows="5" cols="79" name="content" class="form-control" id="content"></textarea>
				</li>
			</ul>
			<div>
			<ul class="form-booking">		
				<li>
					<label>Mã bảo vệ (*):</label>
					<div class="g-recaptcha" data-sitekey="6LcEAgYTAAAAAPHT1WkGGXE-wINw8kCgp7h6yZGp"></div><br>
					
				</li>
				<li>
						<label>&nbsp;</label>
						<input type="button" value="Hoàn tất" class="submit-button">
					</li>	
			</ul>
			</div>
			
		</form>
		

	</div>

	</div>
<div id="right-news">



    <div class="group-photo">
    </div>



    <div class="box-online">
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1018213634855656";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-page" data-href="https://www.facebook.com/pages/Sunrise-TST-Travel/1569215376630971?__mref=message_bubble" data-width="300" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Sunrise-TST-Travel/1569215376630971?__mref=message_bubble"><a href="https://www.facebook.com/pages/Sunrise-TST-Travel/1569215376630971?__mref=message_bubble">Sunrise TST Travel</a></blockquote></div></div>

    </div>
</div>
</div>
</div>
<script>
	$(".submit-button").click(function(){
		$("#book").submit();
	});
</script>



