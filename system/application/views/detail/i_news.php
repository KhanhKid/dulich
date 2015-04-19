<div id="content-wapper-main">
		    <div id="content-wapper">
			    <div id="left-news">
	<div class="pathway-news">
		<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
			<a href="http://www.peacetour.com.vn/" itemprop="url" class="homepage"><span itemprop="title">Trang chủ</span></a>
		</div>

		<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-bg">
			<a href="/a/news" itemprop="url" class="homepage"><span itemprop="title">Tin du lịch</span></a>
				
					
		</div>


	</div>
	<div class="sub-left">
						<h2 class="title-de"> <?php echo $data->title?></h2>
			
			<p class="date-de">
				Cập nhật ngày: <?php echo $data->timestamp?>				<span class="view">Lượt xem: <?php echo $data->view?> (lần)</span>
			</p>
			
			<div class="introtext">

			</div>
			
			
			<div class="full-text">
			     <?php echo $data->content?>
            </div>
		
		</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        tour_page(0);    
        ltour_page(0);    
    })
    function tour_page(page_no){
        var id = 1663;   
        var cat_id = 0;   
        var css = 'width: 300px;';   
        dataString = "page_no="+page_no+"&id="+id+'&cat_id='+cat_id+"&css="+css;
        $.ajax({          
            type: "POST",
            url: base_url+"scent/ajax",
            data: dataString,
            async:false,
            cache: false,
            dataType: "html",
            success: function(data){
                $('#ajax_news').html(data);
            }
        });    
    }
    

    function ltour_page(page_no){
        var name = ' Visa nhập cảnh Ukraina';   
        var catid = '0';   
        dataString = "page_no="+page_no+"&name="+name+"&catid="+catid;
        $.ajax({          
            type: "POST",
            url: base_url+"scent/ajax_tour",
            data: dataString,
            async:false,
            cache: false,
            dataType: "html",
            success: function(data){
                $('#ltour_list').html(data);
            }
        });    
    }
</script>
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
        <option value="http://www.hoabinhrachgiaresort.com.vn/">|- Hoa Binh Rach Gia Resort</option>
        <option value="http://hoabinhphuquoc.com.vn/">|- Hoa Binh Phu Quoc Resort</option>
    </select>   

        </div>
    </div>
    
    <div class="box-online">
        <p class="title">&nbsp; THỐNG KÊ TRUY CẬP</p>
        <div class="box-content">                    
            <div align="center">
</div> 
<table style="width: 100%;">
    <tbody><tr>
        <td style="width: 20px;"><img src="./Visa nhập cảnh Ukraina   Du lịch Hòa Bình_files/vall.png" alt=""></td>
        <td>Trực tuyến</td>
        <td class="cufon" align="right">6</td>
    </tr>
    <tr>
        <td><img src="./Visa nhập cảnh Ukraina   Du lịch Hòa Bình_files/vtoday.png" alt=""></td> 
        <td>Hôm nay</td>
        <td align="right" class="cufon">306</td>
    </tr>
    <tr>
        <td><img src="./Visa nhập cảnh Ukraina   Du lịch Hòa Bình_files/vmonth.png" alt=""></td>
        <td>Trong tháng</td>
        <td align="right" class="cufon">37901</td>
    </tr>
    <tr>
        <td><img src="./Visa nhập cảnh Ukraina   Du lịch Hòa Bình_files/vweek.png" alt=""></td>
        <td>Tổng truy cập</td>
        <td align="right" class="cufon">785342</td>
    </tr>    
</tbody></table>
    
        </div>
    </div>
    
</div>					
		    </div>

		</div>