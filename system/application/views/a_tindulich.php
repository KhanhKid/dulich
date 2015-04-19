<div id="content-wapper-main">
		    <div id="content-wapper">
			    <div id="left-news">
	<div class="pathway-news">
      			<div itemscope=""><a href="/" itemprop="url" class="homepage"><span itemprop="title">Trang chủ</span></a></div>
      			
     			<div itemscope=""  class="no-bg"><a href="/a/tindulich" itemprop="url" class="homepage"><span itemprop="title">TIN DU LỊCH</span></a></div>
         
      
	</div>
			
	
		<div class="sub-left">	
		<ul class="list-items">
			<?php 
				foreach($list as $value){

            ?>
                <li>
                    <p class="img">
                        <a href="/i/news/<?php echo $value->ID ?>">
                            <img src="/img/imgnews/<?php echo $value->img ?>" width="180" alt="<?php echo $value->title ?>"></a>
                    </p>
                    <div class="info-items">
                        <p class="name">
                            <a href="/i/news/<?php echo $value->ID ?>"><?php echo $value->title ?></a>
                        </p>
                        <p class="date-timer">Cập nhật ngày: <?php echo $value->timestamp ?></p>
                        <p class="date-timer">
                        <?php
                            $arr_content = explode('.', $value->content); 
                            echo $arr_content[0].$arr_content[1]."....";
                        ?></p>
                    <summary>
                                        
                </summary></div></li>
            <?php
                   
                    
				}
			?>
		</ul>
		
	</div>
	
	</div>
<div id="right-news">
        
            
        
    <div class="group-photo">
        <a href="ymsgr:sendim?hotel.peacetour" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=tournuocngoai&amp;m=g&amp;t=2&amp;3=us" pagespeed_url_hash="1547806218"></a>
                    <span>Tư vấn tour</span>
    </div>
    <br>
    <div class="group-photo">
        <a href="ymsgr:sendim?hotel.peacetour" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=tournuocngoai&amp;m=g&amp;t=2&amp;3=us" pagespeed_url_hash="1547806218"></a>
                    <span>Tư vấn tour</span>
    </div>
    
    <div class="ads-news-r">
        <ul class="items-ads">
                    </ul>
    
    </div>
    
    
    <div class="box-online">
        <p class="title">&nbsp; LIÊN KẾT WEBSITE</p>
        <div class="box-content">
            <select name="" style="width: 99%;height: 30px;" onchange="window.open(this.value,&#39;_blank&#39;);">
	<option value="">|- Chọn liên kết website</option>
        <option value="/">|- Hoa Binh Rach Gia Resort</option>
        <option value="/">|- Hoa Binh Phu Quoc Resort</option>
    </select>   

        </div>
    </div>    
</div>					
</div>
	
		
		