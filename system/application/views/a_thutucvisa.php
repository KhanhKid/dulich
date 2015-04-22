<div id="content-wapper-main">
		    <div id="content-wapper">
			    <div id="left-news">
	<div class="pathway-news">
      			<div itemscope=""><a href="/" itemprop="url" class="homepage"><span itemprop="title">Trang chủ</span></a></div>

     			<div itemscope=""  class="no-bg"><a href="/a/thutucvisa" itemprop="url" class="homepage"><span itemprop="title">THỦ TỤC VISA</span></a></div>


	</div>


		<div class="sub-left">
		<ul class="list-items">
			<?php
				foreach($list as $value){

            ?>
                <li>
                    <p class="img"><a href="/i/visa/<?php echo $value->ID ?>"><img src="<?php echo $value->img ?>" width="180" alt="<?php echo $value->title ?>"></a></p><div class="info-items"><p class="name"><a href="/i/visa/<?php echo $value->ID ?>"><?php echo $value->title ?></a></p><p class="date-timer">Cập nhật ngày: <?php echo $value->timeupdate ?></p><summary>

                </summary></div></li>
            <?php


				}
			?>
		</ul>

	</div>

	</div>
<div id="right-news">



    <div class="group-photo">

    </div>

    <div class="ads-news-r">

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


