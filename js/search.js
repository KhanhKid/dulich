/* 
 * @Author : Linuxpham
 * @Description : Search lib javascript
 */

var Search = new function()
{        
    /**
     * Search in header
     */
    this.getFromHeader = function()
    {
        //Get query name
        var queryName = $('#q').val();
        queryName = $.trim(queryName);      
        //Check query name
        if((queryName.length == 0) || (queryName == gLocale.header.search.keywords))
        {
            //Print error
            Common.showBoxy('dvSearchForm', gLocale.header.search.ptitle);
            
            //Focus data
            $('#q').focus();
            
            //Return data
            return false;
        }
        
        //Return default
        return true;
    };  
    
    /**
     * Search in business header
     */
    this.getBusinessFromHeader = function()
    {
        //Get query name
        var queryName = $('#k').val();
        queryName = $.trim(queryName);
        
        //Check query name
        if((queryName.length == 0) || (queryName == gLocale.header.search.keywords))
        {
            //Print error
            Common.showBoxy('dvSearchForm', gLocale.header.search.ptitle);
            
            //Focus data
            $('#k').focus();
            
            //Return data
            return false;
        }
        
        //Return default
        return true;
    };
}

