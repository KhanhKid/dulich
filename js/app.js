function change_view(catid){	  	   
	    $.post(site_url+"tours/get_page_cat", {"catid": catid,'page_no':1 },function(data){
	    	$("#right-tour-main").html(data);           
	        
	    });    
}

function set_lang(lang){
	
    $.post(base_url+"api/setlang/",{'lang':lang},function(data){
    	
    	if(data =='en' || data=='fr'){    		
    		setTimeout("reload_div_page()",100);   		
    	}else{    		
    		 location.reload();
    	}
    	
      
       
    },'json');     
}

function reload_div_page(){
    window.location.href = 'http://hoabinh.nongsanbiz.com/en/';
}

function reload_local(){
    if(reload==true){
    location.reload();
    var reload = false;
    }
}

function popup_win(url){
	
	var window_height = jQuery(window).height();
    var window_width = jQuery(window).width();
    var left = (window_width - 650)/2;
    var top = (window_height - 400)/2;
    win2 = window.open(site_url+url, "Window2", "width=650,height=400,scrollbars=yes,left="+left+",top="+top); 
}



/**************
 * Add To cart
 */
jQuery(".addtocart").live("click", function(){
	
     div_id 		= jQuery(this).attr('id');
   
     productid 	= div_id.split('_');
    
     qty 		= jQuery("#qty_"+productid[1]).val(); 
     if(qty == ''){
     	qty  = 1;
     }
    
     //post
     jQuery.post(site_url+"api/cart",{'id_travel':productid[1],'qty':qty},function(data){                	
    	 if(data['err'] == 0){    		 
    		 window.location = site_url+"dat-phong.html";
    	 }
     },'json');
 
    
 });
 

