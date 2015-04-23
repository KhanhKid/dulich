<div id="content-wapper-main">
		    <div id="content-wapper">
			    <div id="left-news">
	<div class="pathway-news">
		<div>
			<a href="/" itemprop="url" class="homepage"><span itemprop="title">Trang chủ</span></a>
		</div>

		<div>
			<a href="/a/dairy" itemprop="url" class="homepage"><span itemprop="title">Search</span></a>


		</div>


	</div>
	<div class="sub-left">
		<div id="left-news">
    <h3 style="font-size : 13px;" class="title_search">Kết quả tìm kiếm với từ khóa: <?php echo $key?></h3>

    <div class="group_search">
        Tour: <span>Tìm thấy <?php echo count($data)?> kết quả</span>
    </div>
	<div class="sub-left">
		 <ul class="list-items stour">
            <?php foreach ($data as $key => $value) {
                    # code...
                ?>
	 	    <li>
				<p class="img">
                    <a href="/i/tour/<?php echo $value->ID?>"><img src="<?php echo $value->img?>" width="150" alt=""></a>
                </p>
				<div class="info-items">
					<p class="name"><a href="/i/tour/<?php echo $value->ID?>"><?php echo $value->name?></a></p>
					<p class="line"><strong>Giá:</strong> <span class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</span></p>
					<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
					<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?> </p>
					<p class="line"><strong>Khởi hành:</strong>  <?php echo $value->startdate?></p>
				</div>
		     </li>
            <?php
                }
            ?>
		</ul>
	</div>

</div>
	</div>
</div>
			<div id="right-news">
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