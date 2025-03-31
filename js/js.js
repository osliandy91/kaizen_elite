function MM_preloadImages() {
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
var newWindow = null;

function closeWin(){
	if (newWindow != null){
		if(!newWindow.closed)
			newWindow.close();
	}
}

function popUpWin(url, type, strWidth, strHeight){

	closeWin();

	if (type == "fullScreen"){
		strWidth = screen.availWidth - 10;
		strHeight = screen.availHeight - 160;
	}

	var tools="";
	if (type == "standard" || type == "fullScreen") tools = 
"resizable,toolbar=no,location=no,scrollbars=yes,menubar=no,width="+strWidth+",height="+strHeight+",top=0,left=0";
	if (type == "console") tools = 
"resizable,toolbar=no,location=no,scrollbars=no,width="+strWidth+",height="+strHeight+",left=0,top=0";
	newWindow = window.open(url, 'newWin', tools);
	newWindow.focus();
}




//jQuery(document).ready(function() {
// 
//jQuery('a[href]').filter(function() {
//    return /(-painting-experts.php|-request-quote.php)$/.test( jQuery(this).attr('href')) }).addClass('fancybox-contact');
//        
//jQuery(".fancybox-contact").fancybox({type: 'iframe', 'autoSize':false, autoHeight: false, autoWidth: false, width: 520, height:830, helpers: { overlay : {closeClick: false} }});  
//
//jQuery('a[href]').filter(function() {
//    return /(-submit-review.php|-review-our-service.php)$/.test( jQuery(this).attr('href'))
//}).addClass('fancybox-review');
//        
//jQuery(".fancybox-review").fancybox({type: 'iframe', 'autoSize':false, autoHeight: false, autoWidth: false, width: 520, height:730, helpers: { overlay : {closeClick: false} }});  
//
//
//
//});


    
