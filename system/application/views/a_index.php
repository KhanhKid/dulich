<div id="content-wapper">
	<div class="wrapper_slider">
		 <div class="callbacks_container">
		  <ul class="rslides" id="slider4">
			<li>
			  <img src="http://www.peacetour.com.vn/data/ads/471/1419648781.jpg" alt="">
			  <p class="caption">This is a caption</p>
			</li>
			<li>
			  <img src="http://www.peacetour.com.vn/data/ads/471/1410946755.jpg" alt="">
			  <p class="caption">This is another caption</p>
			</li>
			<li>
			  <img src="http://www.peacetour.com.vn/data/ads/471/1419648781.jpg" alt="">
			  <p class="caption">The third caption</p>
			</li>
		  </ul>
		</div>
	</div> 
	<div class="clear"></div>
	<div class="group-tour">
	<div class="col1">
		<div class="tour-in-water">
			<div class="title">
				<p class="text">
					<a href="/a/tourtrongnuoc">Tour trong nước</a>
				</p>
				<p class="more">
					<a href="/a/tourtrongnuoc">Xem thêm</a>
				</p>
			</div>
			<ul class="content">
				<?php
					//var_dump($tourtrongnuoc);die();
					foreach ($tourtrongnuoc as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
		<div class="tour-in-water">
			<div class="title">
				<p class="text"><a href="/a/tourkhuyenmai">Tour khuyến mãi</a></p>
				<p class="more"><a href="/a/tourkhuyenmai">Xem thêm</a></p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourkhuyenmai as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div class="col2">
		<div class="tour-in-water">
			<div class="title">
				<p class="text">
					<a href="/a/tourngoainuoc">Tour ngoài nước</a>
				</p>
				<p class="more">
					<a href="/a/tourngoainuoc">Xem thêm</a>
				</p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourngoainuoc as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
		<div class="tour-in-water">
			<div class="title">
				<p class="text"><a href="/a/tourfree">TOUR FREE AND EASY</a></p>
				<p class="more"><a href="/a/tourfree">Xem thêm</a></p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourfree as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>

	</div>
	<div class="group-ads-other">
	<div class="box-ads">
		<div id="video">
		<iframe width="280" height="230" src="https://www.youtube.com/embed/09R8_2nJtjg" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="group-service">
		<div class="group-rent">
			<div class="bg-title">
				<p class="text">
					<a href="/a/thutucvisa">THỦ TỤC VISA</a>
				</p>
				<p class="more">
					<a href="/a/thutucvisa" target="_self">Xem thêm</a>
				</p>
			</div>
			<div class="item0">
				<p class="img">
					<a href="/">
						<img src="/img/imgvisa/<?php echo $visa_f->img ?>" width="150" alt="<?php echo $visa_f->title ?>">
					</a>
				</p>
				<div class="info-service">
					<p class="name">
						<a href="/"> <?php echo $visa_f->title ?>
						</a>
					</p>
					<p class="summary"></p>
				</div>
			</div> 
				<ul class="relative-service">
				<?php
					$i = 0;
					foreach ($visa_all as $value) {
						# code...
						if($i != 0){
				?>
							<li><a href="/"><?php echo $value->title ?></a></li>
				<?php
						}
						$i++;
					}
				?>
				</ul>
			</div>
	</div>
	<div class="box-video-supprt">
		<div class="support">
			<ul class="items">
				<li>
					<a href="ymsgr:sendim?hotel.peacetour" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=tournuocngoai&amp;m=g&amp;t=2&amp;3=us" pagespeed_url_hash="1547806218"></a>
					<span>Tư vấn tour</span>
				</li>
				<li>
					<a href="ymsgr:sendim?peacetour_outbound" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=tournuocngoai&amp;m=g&amp;t=2&amp;3=us" pagespeed_url_hash="3601729825"></a>
					<span>Tư vấn thủ tục</span>
				</li>
			</ul>
		</div>
	</div>
	</div>
	<div class="box-news-index">
	<div class="box-slide">
	<div class="title-main">
		<p class="text"><a href="/a/tindulich">TIN DU LỊCH</a></p>
		<p class="more"><a href="/a/tindulich">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="/"><img src="/img/imgnews/<?php echo $news_f->img ?>" width="296" alt="<?php echo $news_f->title ?>"></a>
		</p>
		<p class="name"><a href="/"><?php echo $news_f->title ?></a>
		</p>
	</div> 
	<div class="relative-item0">
		<ul class="items">
			<?php
					$i = 0;
					foreach ($news_all as $value) {
						# code...
						if($i != 0){
				?>
					<li>
						<a href="/"><?php echo $value->title ?></a>
					</li>
				<?php
						}
						$i++;
					}
				?>
		</ul>
	</div>
	</div>
	<div class="box-relative-news">
	<div class="title-main">
		<p class="text"><a href="/a/nhatky">Nhật ký Du lịch Hoà Bình</a></p>
		<p class="more"><a href="/a/nhatky">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="/">
				<img src="/img/imgdairy/<?php echo $dairy_f->img ?>" width="115" alt="<?php echo $dairy_f->title ?>">
			</a>
		</p>
		<div class="info-news">
			<p class="name">
				<a href="/"><?php echo $dairy_f->title ?></a>
			</p>
		</div>
	</div> 
	<ul class="relative-news">
		<?php
			$i = 0;
			foreach ($dairy_all as $value) {
				# code...
				if($i != 0){
		?>
					<li>
						<a href="/"><?php echo $value->title ?></a>
					</li>
		<?php
				}
				$i++;
			}
		?>
	</ul>
	</div>
	</div>
	</div>
	<script>
	$(function() {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	  });
	
	</script>