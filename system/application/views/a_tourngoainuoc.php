<div id="content-wapper">
<div class="brand">
    <ul>
        <li><a class="home" href="/">Trang chủ</a></li>
        <li><a href="">Tour ngoài nước</a></li>
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
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="19"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Đông Nam Á
                                                </li><li>
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="20"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Đông Bắc Á
                                                </li><li>
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="21"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Châu Mỹ
                                                </li><li>
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="22"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Châu Úc
                                                </li><li>
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="30"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Châu Âu
                                                </li><li>
                            <input type="checkbox" class="opttuyen" name="optTuyen" value="31"> <!-- onchange="return Common.changeLink(this,'');"-->
                            Tây Á
                                                
                    </li></ul>
                </div>
            </div>
              <!-- Suport Online -->
             <div class="support-onnline">
                <p class="title">
                    <span>HỖ TRỢ TRỰC TUYẾN</span>
                </p>
                <div class="sub-supportOnline">
                                        <ul class="items">
                                                <li>
                            <a href="ymsgr:sendim?tournuocngoai" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=tournuocngoai&amp;m=g&amp;t=1&amp;3=us"></a>
                            <span>Thủ tục Visa</span>
                        </li>
                                                <li>
                            <a href="ymsgr:sendim?hb.tourtrongnuoc" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=hb.tourtrongnuoc&amp;m=g&amp;t=1&amp;3=us"></a>
                            <span>Tour Trong Nước </span>
                        </li>
                        
                                    
                    <li class="hotline">&nbsp;Hotline: 0974.741.072 / 0919.095.778</li>
                    </ul>
                                        
                    
                </div>
            </div>                      
            <div class="ads-left">
                <ul class="item-ads">
                    <li><a href="http://www.peacetour.com.vn/xem-tour/103/singapore-free-easy-extreme-fantasy-316.html" target="_blank"><img src="http://www.peacetour.com.vn/data/ads_tours_en/full_images/1419648169.jpg" width="235" alt="Singapore 1"></a></li><li><a href="http://www.peacetour.com.vn/xem-tour/103/singapore-wow-315.html" target="_blank"><img src="http://www.peacetour.com.vn/data/ads_tours_en/full_images/1419648580.jpg" width="235" alt="Singapore 2"></a></li>                    
                </ul>
            </div>
</div>
<div id="right-tour-main">
	
	<div id="mid-tour">
        	<div class="content-sub">
            	<div class="title">
                	<p class="text">Tour ngoài nước</p>
                </div>
				<ul class="list-tour">
				
                <?php

                foreach ($tour as $key => $value) {
                    # code...
                ?>
                <li>
					<p class="img">
					<a href="/i/tour/<?php echo $value->ID ?>">
					<img src="/img/imgtour/<?php echo $value->img?>" width="150" alt="<?php echo $value->name?>">

					</a>

					</p>
					<div class="info-tour">
					<p class="name"><a href="/i/tour/<?php echo $value->ID ?>"><?php echo $value->name?></a></p>
					<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
					<p class="line">
					<strong>Khởi hành:</strong> <?php echo $value->startdate?>                            </p>                           

					<p class="line">
					<strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm                            </p>
					<p class="line">
					<strong>Phương tiện:</strong> <?php echo $value->how?>                           </p>
					</div>
				</li>
                <?php
                    }
                ?>
                
                                    	
                                        
                    
                </ul>
                
                
			</div>
        </div>
        


    <div id="right-tour">
    	<div>
    		<a href="javascript:;"><img src="http://www.peacetour.com.vn/site/templates/clients/images/view_tour.jpg" width="235" alt=""></a>
    	</div>
    	<div class="box-top-tour-right">
        	<p class="title">
            	<span>TOP Tour mới ngoài nước</span>
             </p>
            
            <div class="box-content">
            	<ul class="items1">
                    <?php

                    foreach ($tour_suggest as $key => $value) {
                        # code...
                    ?>
                    <li id="menu1">
                        <a href="#"><?php echo $value->name?></a>
                        <p class="price">Giá: <?php echo $value->price?> VNĐ</p>
                    </li>
                    <?php
                        }
                    ?>                         
                </ul>
                        <p class="up_down" align="right">
						<a href="/a/tourngoainuoc"  class="down">Xem thêm</a>
										
				</p>
            </div>
        </div>

        <!-- box ads  -->
        <div class="ads-right">
            <ul class="item-ads">
                    <li><a href="/" target="_blank"><img src="http://www.peacetour.com.vn/data/ads_tours/full_images/1424751403.jpg" width="235" alt="Đồng Tháp"></a></li>                   
            </ul>
        </div>
    </div>
</div>
</div>