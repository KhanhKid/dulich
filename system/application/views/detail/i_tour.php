<div id="content-wapper-main">
		    <div id="content-wapper">
			    <!-- banner -->
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
<div class="brand">
    <ul>
        <li><a class="home" href="/">Trang chủ</a></li>
        <?php
            switch ($data->type) {
                case 1:
                    echo '<li><a href="/a/tourtrongnuoc">Tour trong nước</a></li>';
                    break;
                case 2:
                    echo '<li><a href="/a/tourngoainuoc">Tour nước ngoài</a></li>';
                    break;                
                case 3:
                    echo '<li><a href="/a/tourkhuyenmai">Tour khuyến mãi</a></li>';
                    break;
                case 4:
                    echo '<li><a href="/a/tourfree">Tour tự do</a></li>';
                    break;
                
                default:
                    # code...
                    break;
            }
        ?>
        
        <li><a href=""><?php echo $data->name; ?></a></li>
    </ul>
</div>
<div id="left-tour">
	
         	        	<div class="box-diem-den">
            	<div class="title-left">
                	<span>THEO tuyến du lịch </span>
                </div>
                <div class="sub-diem-den">

                	<ul class="items">
                		                    	<li>
                        	<input type="checkbox" class="opttuyen" name="optTuyen" value="11"> <!-- onchange="return Common.changeLink(this,'');"-->
                        	Tây Nguyên
                                            	</li><li>
                        	<input type="checkbox" class="opttuyen" name="optTuyen" value="14"> <!-- onchange="return Common.changeLink(this,'');"-->
                        	Miền Nam
                                            	</li><li>
                        	<input type="checkbox" class="opttuyen" name="optTuyen" value="15"> <!-- onchange="return Common.changeLink(this,'');"-->
                        	Miền Trung
                                            	</li><li>
                        	<input type="checkbox" class="opttuyen" name="optTuyen" value="16"> <!-- onchange="return Common.changeLink(this,'');"-->
                        	Miền Bắc
                                            	</li><li>
                        	<input type="checkbox" class="opttuyen" name="optTuyen" value="29"> <!-- onchange="return Common.changeLink(this,'');"-->
                        	Xuyên Việt
                                                
                    </li></ul>
                </div>
            </div>

        	  <div class="support-onnline">
                <p class="title">
                    <span>HỖ TRỢ TRỰC TUYẾN</span>
                </p>
                <div class="sub-supportOnline">
                                        <ul class="items">
                                                            
                    <li class="hotline">&nbsp;Hotline: 0919 095 778 / 0916 065 778</li>
                    <li><div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1018213634855656";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/pages/Sunrise-TST-Travel/1569215376630971?__mref=message_bubble" data-width="235" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>   
           </li>
                    </ul>
                                        
                    
                </div>
            </div>         	         	

			        </div><div id="right-detail-tour">
	<div class="title">
            	&nbsp; thông tin chi tiết
   </div>
	
	<div class="content-de-tour">
				<div class="photo">
            <img src="/img/imgtour/<?php echo $data->img?>" width="340" alt="<?php echo $data->name; ?>">
        </div>
                
                <div class="info-tour-de">
                
                	<p class="name"><span class="tour"><?php echo $data->name; ?></span> - <span>Mã tour</span>: SRTST-0<?php echo $data->ID; ?></p>
                	<p class="price"><strong>Giá</strong>: <?php echo number_format($data->price, 0, ",",".")?> VNĐ </p>
                	
					<p class="line"><strong>Thời gian: </strong> <?php echo $data->timeday?> ngày <?php echo $data->timenight?> đêm</p>
					<p class="line"><strong>Phương tiện</strong>: <?php echo $data->how?></p>
					<p class="line"><strong>Khởi hành</strong>: <?php echo $data->startdate?></p>
					
					
					
                    <p class="line"><a href="/a/order"><img src="/images/dattour.png" alt=""></a></p>
                </div>
                
		<div class="box-tab-detail">
		<script type="text/javascript">
			$(document).ready(function(){
				$("ul.tab-detail li").click(function(){
					$("ul.tab-detail li").removeClass("select");
					$(this).addClass("select");

					var prop  = $(this).attr('title');
					$(".content-tab").hide();
					$("#"+prop).show();
				});
			})
		
		</script>
		<ul class="tab-detail">
            <li title="tab1" class=" tab select"><a href="javascript:;">Tổng quan</a></li>
            <li class="tab" title="tab2"><a href="javascript:;">Hành trình</a></li>
            
            
            <li title="tab3" class="tab"><a href="javascript:;">Bảng giá</a></li>
            <!-- 
            <li title="tab4"><a href="javascript:;">Chú ý</a></li>
             -->
            <li title="tab5" class="tab"><a href="javascript:;">Điều kiện</a></li>
        </ul>

		
		 <div class="content-tab hidden" id="tab1" style="display: none;">
			<div class="sub-tab">
                <?php echo $data_detail->tongquan?>
			</div>
		</div>
		<div class="content-tab hidden" id="tab2" style="display: none;">
			<div class="sub-tab">
                <?php echo $data_detail->hanhtrinh?>
			</div>
		</div>
		<div class="content-tab " id="tab3" style="display: block;">
			<div class="sub-tab">
                <?php echo $data_detail->banggia?>
			</div>
		</div>
		
		<div class="content-tab hidden" id="tab5" style="display: none;">
			<div class="sub-tab">
				<?php echo $data_detail->dieukien?>
			</div>
		</div>
		</div>
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
		
</div>