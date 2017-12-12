$(document).ready(function() {
  //jQuery code...


$("#titulo-lista").dblclick(function ()
  {
        $("div#lista-ocultar1").slideDown();
  });

$("#titulo-lista").click(function ()
  {
        $("div#lista-ocultar1").slideUp();
  });

$('holi.track > header > h3 > a').each(function(){
	var href= $(this).attr("href");
	href=href.replace("trac","showAjax");
	$(this).qtip({
		content:{
			url:href,
			method:'get'
		},
		style:{ name: 'dark' , tip :true},
		show: 'mouseover',
		hide: 'mouseout'
	}
		);
	
});



});


