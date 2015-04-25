<div id="content-wapper">
    <div class="wrapper_slider">
         <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li>
              <img src="/img/imgbanner/1.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/2.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/3.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/4.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/5.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/6.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/7.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/8.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/9.jpg" alt="">
              <p class="caption"></p>
            </li>
            <li>
              <img src="/img/imgbanner/10.jpg" alt="">
              <p class="caption"></p>
            </li>
			<li>
              <img src="/img/imgbanner/5.jpg" alt="">
              <p class="caption"></p>
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
                            <a href="/i/tour/<?php echo $value->ID ?>">
                                <img src="<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
                            </a>
                        </p>
                        <div class="info-tour">
                            <p class="name">
                                <a href="/i/tour/<?php echo $value->ID ?>" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
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
                            <a href="/i/tour/<?php echo $value->ID ?>">
                                <img src="<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
                            </a>
                        </p>
                        <div class="info-tour">
                            <p class="name">
                                <a href="/i/tour/<?php echo $value->ID ?>" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
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
                            <a href="/i/tour/<?php echo $value->ID ?>">
                                <img src="<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
                            </a>
                        </p>
                        <div class="info-tour">
                            <p class="name">
                                <a href="/i/tour/<?php echo $value->ID ?>" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
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
                            <a href="/i/tour/<?php echo $value->ID ?>">
                                <img src="<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
                            </a>
                        </p>
                        <div class="info-tour">
                            <p class="name">
                                <a href="/i/tour/<?php echo $value->ID ?>" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
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
					<a href="/i/visa/<?php echo $visa_f->ID ?>">
						<img src="<?php echo $visa_f->img ?>" width="150" alt="<?php echo $visa_f->title ?>">
					</a>
				</p>
				<div class="info-service">
					<p class="name">
						<a href="/i/visa/<?php echo $visa_f->ID ?>"> <?php echo $visa_f->title ?>
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
							<li><a href="/i/visa/<?php echo $value->ID ?>"><?php echo $value->title ?></a></li>
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
	<div class="box-news-index">
	<div class="box-slide">
	<div class="title-main">
		<p class="text"><a href="/a/tindulich">TIN DU LỊCH</a></p>
		<p class="more"><a href="/a/tindulich">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="/i/news/<?php echo $news_f->ID ?>"><img src="<?php echo $news_f->img ?>" width="296" alt="<?php echo $news_f->title ?>"></a>
		</p>
		<p class="name"><a href="/i/news/<?php echo $news_f->ID ?>"><?php echo $news_f->title ?></a>
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
						<a href="<?php echo $value->ID ?>"><?php echo $value->title ?></a>
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
		<p class="text"><a href="/a/nhatky">Nhật ký Du lịch</a></p>
		<p class="more"><a href="/a/nhatky">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="/i/dairy/<?php echo $dairy_f->ID ?>">
				<img src="<?php echo $dairy_f->img ?>" width="115" alt="<?php echo $dairy_f->title ?>">
			</a>
		</p>
		<div class="info-news">
			<p class="name">
				<a href="/i/dairy/<?php echo $dairy_f->ID ?>"><?php echo $dairy_f->title ?></a>
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
						<a href="/i/dairy/<?php echo $value->ID ?>"><?php echo $value->title ?></a>
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
