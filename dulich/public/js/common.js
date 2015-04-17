/* 
 * @Author : Linuxpham
 * @Description : Common lib javascript
 */

var Common = new function()
{        
    /**
     * Set homepage
     */
    this.setHomePage = function()
    {
        //Set home page
        if(window.sidebar)
        { 
            //Mozilla Firefox Bookmark
            return false;
        }
        else if( window.external )
        {
            //IE Favorite
            document.body.style.behavior='url(#default#homepage)';
            document.body.setHomePage(baseurl);
        }
        else if(window.opera && window.print)
        {
            //Opera Hotlist
            return false;
        }        
        
        //Return default
        return false;
    };
    
    /**
     * add Favorite
     */
    this.addFavorite = function()
    {
        //Add favorite
        if(window.sidebar)
        { 
            //Mozilla Firefox Bookmark
            window.sidebar.addPanel(document.title, baseurl, document.title);
        }
        else if( window.external )
        {
            //IE Favorite
            window.external.AddFavorite(baseurl, document.title);
        }
        else if(window.opera && window.print)
        {
            //Opera Hotlist
            return false;
        }
                
        //Return default
        return false;
    };
    
    /**
     * Share Facebook
     */
    this.shareFacebook = function()
    {
        var left = (screen.width/2)-313;
        var top = (screen.height/2)-218;
        var u = location.href;
        var t = document.title;
        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'Facebook sharer',',width=626,height=436,left='+left+',top='+top);
        return false;
    };
    
    /**
     * Share Twitter
     */
    this.shareTwitter = function()
    {
        var left = (screen.width/2)-313;
        var top = (screen.height/2)-218;
        var u = location.href;
        var t = document.title;
        window.open('http://www.twitter.com/share?url='+encodeURIComponent(u)+'&text='+encodeURIComponent(t),'Twitter sharer',',width=626,height=436,left='+left+',top='+top);
        return false;
    };
    
    /**
     * Share Banbe
     */
    this.shareBanbe = function()
    {
        var left = (screen.width/2)-313;
        var top = (screen.height/2)-218;
        var u = location.href;              
        window.open('http://plugins.banbe.net/share/post?href='+encodeURIComponent(u),'Banbe sharer',',width=626,height=520,left='+left+',top='+top);
        return false;
    };
    
    /**
     * Hide boxy
     */
    this.hideBoxy = function()
    {
        try
        {
            if(baseBoxy != null)
            {
                baseBoxy.hide().unload();
            }
        }
        catch(ex){}   
        
        //Return default
        return false;
    };
    
    /**
     * Show boxy
     */
    this.showBoxy = function(dvID, sTitle)
    {
        try
        {
            //Hide old boxy
            this.hideBoxy();

            //Open boxy
            baseBoxy = new Boxy($('#'+dvID).html(), {title:sTitle});
        }
        catch(ex){}     
        
        //Return default
        return false;
    };
    
    /**
     * Show boxy relative
     */
    this.showBoxyRelative = function(dvID, sTitle, iTop)
    {
        try
        {
            //Hide old boxy
            this.hideBoxy();

            //Open boxy
            baseBoxy = new Boxy($('#'+dvID).html(), {title:sTitle, y:iTop});
        }
        catch(ex){}     
        
        //Return default
        return false;
    };
        
    /**
     * Get new captcha image for boxy
     */
    this.generateCaptchaBoxy = function(ssCapcha)
    {
        //Get image src
        var nowTime = new Date();
        var imgSrc = baseurl + '/ma-bao-mat.html?' + ssCapcha + "." + nowTime.getTime();

        //Refesh captcha images
        $('div.boxy-content #linkCapcha').html('<img src="'+imgSrc+'" alt="MÃ£ báº£o máº­t" title="MÃ£ báº£o máº­t" align="absmiddle" />');

        //return data
        return false;
    };
    
    /**
     * Get new captcha image
     */
    this.generateCaptcha = function(ssCapcha)
    {
        //Get image src
        var nowTime = new Date();
        var imgSrc = baseurl + '/ma-bao-mat.html?' + ssCapcha + "." + nowTime.getTime();

        //Refesh captcha images
        $('#linkCapcha').html('<img src="'+imgSrc+'" alt="MÃ£ báº£o máº­t" title="MÃ£ báº£o máº­t" align="absmiddle" />');

        //return data
        return false;
    };
    
    /**
     * Location to url
     */
    this.location = function(url)
    {
        window.location = url;
        return false;
    };
    
    /**
     * Selected value
     */
    this.selected = function(id, val)
    {
        $('#'+id).find('option').each(function()
        {
            if($(this).val() == val)
            {
                $(this).attr('selected', 'selected');
                return;
            }
        });
    };
    
    /**
     * Radio checked value
     */
    this.radioChecked = function(id, val)
    {
        $('input:radio[name='+id+']').each(function()
        {
            if($(this).val() == val)
            {
                $(this).attr('checked', 'checked');
                return;
            }
        });
    };
    
    /**
     * Select multi options
     */
    this.moveMultiSelect = function(fbox, tbox)
    {
        var arrFbox = new Array();
        var arrTbox = new Array();
        var arrLookup = new Array();
        var i;
        for(i = 0; i < tbox.options.length; i++)
        {        
            arrLookup[tbox.options[i].text] = tbox.options[i].value;
            arrTbox[i] = tbox.options[i].text;
        }
        var fLength = 0;
        var tLength = arrTbox.length;
        for(i = 0; i < fbox.options.length; i++) {
            arrLookup[fbox.options[i].text] = fbox.options[i].value;
            if(fbox.options[i].selected && fbox.options[i].value != "")
            {        
                arrTbox[tLength] = fbox.options[i].text;
                tLength++;
            }
            else
            {        
                arrFbox[fLength] = fbox.options[i].text;
                fLength++;
            }
        }
        arrFbox.sort();
        arrTbox.sort();
        fbox.length = 0;
        tbox.length = 0;
        var c;
        for(c = 0; c < arrFbox.length; c++)
        {        
            var no = new Option();
            no.value = arrLookup[arrFbox[c]];
            no.text = arrFbox[c];
            fbox[c] = no;
        }
        for(c = 0; c < arrTbox.length; c++)
        {            
            var no = new Option();
            no.value = arrLookup[arrTbox[c]];
            no.text = arrTbox[c];
            tbox[c] = no;
       }
    };    
    
    /**
     * Remove dom element
     */
    this.removeDom = function(id)
    {
        $('#'+id).remove();
        return false;
    };
    
    /**
     * Show dom element
     */
    this.showDom = function(id)
    {
        $('#'+id).css('display', 'block');
        return false;
    };
    
    /**
     * Hide dom element
     */
    this.hideDom = function(id)
    {
        $('#'+id).css('display', 'none');
        return false;
    };
    
    /*
     * Check all item
     */
    this.checkAll = function()
    {        
        if($('#bChoosed').attr('checked') == true)
        {
            $('input.chkItem').each(function()
            {
                $(this).attr('checked', true);
            });            
        }
        else
        {
            $('input.chkItem').each(function()
            {
                $(this).attr('checked', false);
            });
        }        
    };
    
    /**
     * Checked item
     */
    this.checkItem = function(obj)
    {
        if($(obj).attr('checked') == true)
        {
            var isAllChecked = true;
            
            $('input.chkItem').each(function()
            {
                if($(this).attr('checked') == false)
                {
                    isAllChecked = false;
                }               
            });  
            
            if(isAllChecked)
            {
                $('#bChoosed').attr('checked', true);
            }
        }
        else
        {
            if($('#bChoosed').attr('checked') == true)
            {
                $('#bChoosed').attr('checked', false);
            }            
        }
    };
    
    /**
     * Checked item
     */
    this.getItem = function()
    {
        var arrData = new Array();
        $('input.chkItem').each(function(i)
        {
            if($(this).attr('checked') == true)
            {
                arrData[i] = $(this).val();
            }
        });
        return arrData;
    };
    
    /**
     * Change link
     */
    this.changeLink = function(obj, link)
    {
        window.location = link + '' + obj.value;
    }
    
    this.changeopt = function(){
        $(".opttuyen").click(function(){

            var str_tuyen = '';
            //$(".opttuyen").each(function(){
                if($(this).is(':checked')){
                    str_tuyen +='-'+$(this).val();
                }
            //})
            var str_chude = '';
            $(".optchude").each(function(){
                if($(this).is(':checked')){
                    str_chude +='-'+$(this).val();
                }
            })
            str_tuyen = trim(str_tuyen,'-'); 
            str_chude = trim(str_chude,'-');
            var str_link = ''
            if(str_tuyen != ''){
               str_link += '&t='+str_tuyen; 
            }
            if(str_chude != ''){
               str_link += '&c='+str_chude; 
            }
            str_link = trim(str_link,'&');
            str_link = (str_link != '')?'?'+str_link:'';
            window.location = base_url+uri_string+'.html'+str_link;
        })
        
        $(".optchude").click(function(){

            var str_tuyen = '';
            $(".opttuyen").each(function(){
                if($(this).is(':checked')){
                    str_tuyen +='-'+$(this).val();
                }
            })
            var str_chude = '';
            //$(".optchude").each(function(){
                if($(this).is(':checked')){
                    str_chude +='-'+$(this).val();
                }
            //})
            str_tuyen = trim(str_tuyen,'-'); 
            str_chude = trim(str_chude,'-');
            var str_link = ''
            if(str_tuyen != ''){
               str_link += '&t='+str_tuyen; 
            }
            if(str_chude != ''){
               str_link += '&c='+str_chude; 
            }
            str_link = trim(str_link,'&');
            str_link = (str_link != '')?'?'+str_link:'';
            window.location = base_url+uri_string+'.html'+str_link;
        })
        
    }
}

function close_ipop(div){
    $("#"+div).remove();
    $("#ipop_over").hide();
}

function ipop(html){
    var iheight = $(window).height();
    var iwidth = $(window).width();
    

    var c_height = $("#ipopcon").height();
    var c_width = $("#ipopcon").width();
    var top = (iheight - c_height)/2;
    var left = (iwidth - c_width)/2;
    $("#ipopcon").css({
        'z-index':z_index, 'position':'absolute', 'top': top, 'left': left, 'display': 'block'
    }) 
    /*
    if(length_is_div == 0){
        $('body').append('<div class="ipopcon" id="'+opt.divcon+'"></div>');
    }
    $("#"+opt.divcon).draggable(); 
    load_show();
    $.get(opt.href,function(data){
        $('#'+opt.divcon).html(data);
        var c_height = $("#"+opt.divcon).height();
        var c_width = $("#"+opt.divcon).width();
        var top = (iheight - c_height)/2;
        var left = (iwidth - c_width)/2;
        $("#"+opt.divcon).css({
            'z-index':z_index, 'position':'absolute', 'top': top, 'left': left, 'display': 'block'
        })   
        $("#"+opt.divcon+" .h-pop").append('<span class="close" data_close="'+opt.divcon+'"></span>');
        $("#ipop_over").hide();                                
        load_hide();
        $("#ipop_over").css({
            'height':iheight, 'width':iwidth, 'display':'block', 'background-color':'#FFF', 'opacity': 0.5,'z-index' : (z_index - 1)
        });
    });
    */
}
function getHighIndex () {
    var index_highest = 0;
    $('.ipopcon').each(function(){
        var index_current = parseInt($(this).css("z-index"));
        if(index_current > index_highest) {
            index_highest = index_current;
        }
    });
    return  index_highest;
}
function load_show(){
    $(".overlay_msg").css('top',(s_height - 250)/2);
    $("#fancybox-loading").show();
    //$(".show_overlay").show();
    
}

function load_hide(){
    $("#fancybox-loading").hide();
    //$(".show_overlay").hide();
}

function trim (str, charlist) {
  // http://kevin.vanzonneveld.net
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: mdsjack (http://www.mdsjack.bo.it)
  // +   improved by: Alexander Ermolaev (http://snippets.dzone.com/user/AlexanderErmolaev)
  // +      input by: Erkekjetter
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +      input by: DxGx
  // +   improved by: Steven Levithan (http://blog.stevenlevithan.com)
  // +    tweaked by: Jack
  // +   bugfixed by: Onno Marsman
  // *     example 1: trim('    Kevin van Zonneveld    ');
  // *     returns 1: 'Kevin van Zonneveld'
  // *     example 2: trim('Hello World', 'Hdle');
  // *     returns 2: 'o Wor'
  // *     example 3: trim(16, 1);
  // *     returns 3: 6
  var whitespace, l = 0,
    i = 0;
  str += '';

  if (!charlist) {
    // default list
    whitespace = " \n\r\t\f\x0b\xa0\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u200b\u2028\u2029\u3000";
  } else {
    // preg_quote custom list
    charlist += '';
    whitespace = charlist.replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '$1');
  }

  l = str.length;
  for (i = 0; i < l; i++) {
    if (whitespace.indexOf(str.charAt(i)) === -1) {
      str = str.substring(i);
      break;
    }
  }

  l = str.length;
  for (i = l - 1; i >= 0; i--) {
    if (whitespace.indexOf(str.charAt(i)) === -1) {
      str = str.substring(0, i + 1);
      break;
    }
  }

  return whitespace.indexOf(str.charAt(0)) === -1 ? str : '';
}

function ltrim (str, charlist) {
  // http://kevin.vanzonneveld.net
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +      input by: Erkekjetter
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   bugfixed by: Onno Marsman
  // *     example 1: ltrim('    Kevin van Zonneveld    ');
  // *     returns 1: 'Kevin van Zonneveld    '
  charlist = !charlist ? ' \\s\u00A0' : (charlist + '').replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '$1');
  var re = new RegExp('^[' + charlist + ']+', 'g');
  return (str + '').replace(re, '');
}



function str_replace (search, replace, subject, count) {
  // http://kevin.vanzonneveld.net
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Gabriel Paderni
  // +   improved by: Philip Peterson
  // +   improved by: Simon Willison (http://simonwillison.net)
  // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  // +   bugfixed by: Anton Ongson
  // +      input by: Onno Marsman
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +    tweaked by: Onno Marsman
  // +      input by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   input by: Oleg Eremeev
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Oleg Eremeev
  // %          note 1: The count parameter must be passed as a string in order
  // %          note 1:  to find a global variable in which the result will be given
  // *     example 1: str_replace(' ', '.', 'Kevin van Zonneveld');
  // *     returns 1: 'Kevin.van.Zonneveld'
  // *     example 2: str_replace(['{name}', 'l'], ['hello', 'm'], '{name}, lars');
  // *     returns 2: 'hemmo, mars'
  var i = 0,
    j = 0,
    temp = '',
    repl = '',
    sl = 0,
    fl = 0,
    f = [].concat(search),
    r = [].concat(replace),
    s = subject,
    ra = Object.prototype.toString.call(r) === '[object Array]',
    sa = Object.prototype.toString.call(s) === '[object Array]';
  s = [].concat(s);
  if (count) {
    this.window[count] = 0;
  }

  for (i = 0, sl = s.length; i < sl; i++) {
    if (s[i] === '') {
      continue;
    }
    for (j = 0, fl = f.length; j < fl; j++) {
      temp = s[i] + '';
      repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
      s[i] = (temp).split(f[j]).join(repl);
      if (count && s[i] !== temp) {
        this.window[count] += (temp.length - s[i].length) / f[j].length;
      }
    }
  }
  return sa ? s : s[0];
}
