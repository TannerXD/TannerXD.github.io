 //////////////////////////////////////////////////////////////////////////////
 // setCookie
 //
 //		Create a client side cookie. 

 //
 //  @param   c_name - Name to call the cookie 
 //  @param   value - Value to assign to the cookie
 //  @param   expiredays - *optional* number of days before cookie expires 

 //////////////////////////////////////////////////////////////////////////////
 function setCookie(c_name,value,expiredays) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
    }
    
    //////////////////////////////////////////////////////////////////////////////
    // getCookie
    //
    //		Get value of a client side cookie
    //
    //  @param   c_name - Cookie name. 
   
    //  @return  cookie value, or an empty string if cookie is not found
    //////////////////////////////////////////////////////////////////////////////
    function getCookie(c_name) {
    
     if (document.cookie.length>0) {
      c_start=document.cookie.indexOf(c_name + "=");
      if (c_start!=-1) { 
      c_start=c_start + c_name.length+1; 
      c_end=document.cookie.indexOf(";",c_start);
      if (c_end==-1) c_end=document.cookie.length;
      return unescape(document.cookie.substring(c_start,c_end));
      } 
     }
    
     return "";
    }