<div id="content-wapper">
<div class="brand">
    <ul>
        <li><a class="home" href="/">Trang chủ</a></li>
        <li><a href="">Tour trong nước</a></li>
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
        	  <!-- Suport Online -->
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
			
			
         	
</div>
<div id="right-tour-main">
    
    <div id="mid-tour">
            <div class="content-sub">
                <div class="title">
                    <p class="text">Tour trong nước</p>
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
        
                        <div class="box-top-tour-right">
                    <p class="title">
                        <span>TOP Tour gần đây trong nước</span>
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
                            <a href="/index/tourtrongnuoc" class="down">Xem thêm ⇓</a>
                                            
                    </p>
                    </div>
                </div>
                <div class="ads-right">
           
        </div>                    
        </div>
</div>
</div>