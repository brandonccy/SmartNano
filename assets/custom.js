function visitor(strInput, strRedirect=""){
	var redirectURL
	if(strRedirect==""){ 
		redirectURL="/"; 
	}else{
		redirectURL=strRedirect;
	}
	if(strInput==""){}else{
		if(window.XMLHttpRequest){loginAjax=new XMLHttpRequest();
		}else{ loginAjax=new ActiveXObject("Microsoft.XMLHTTP"); }
		loginAjax.onreadystatechange=function(){
			if (loginAjax.readyState==4 && loginAjax.status==200){
				if(redirectURL=="noredirect"){
				}else{
					window.location=redirectURL;
				}
			}
		}
		loginAjax.open("GET","/?module=visitor&data=" + strInput ,true);
		loginAjax.send();
	}	
}