jQuery(document).ready(function($) {	
//*** Mainmenu ***//
$('ul#menu').superfish();


//*** Countent Carousel ***//
$("#content-carousel").flexisel({
enableResponsiveBreakpoints: true,
responsiveBreakpoints: { 
portrait: { 
changePoint:480,
visibleItems: 1
}, 
landscape: { 
changePoint:640,
visibleItems: 2
},
tablet: { 
changePoint:769,
visibleItems: 3
}
}
});


//*** Tabs on Top Jquery ***//
$(".tab_content").hide();$("ul.tabs li:first").addClass("active").show();$(".tab_content:first").show();$("ul.tabs li").click(function(){$("ul.tabs li").removeClass("active");
$(this).addClass("active");$(".tab_content").hide();var activeTab=$(this).find("a").attr("href");$(activeTab).fadeIn();return false});


//*** Tabs on Bottom Jquery ***//
$(".tab_content-bottom").hide();$("ul.tabs-bottom li:first").addClass("active").show();$(".tab_content-bottom:first").show();$("ul.tabs-bottom li").click(function(){$("ul.tabs-bottom li").removeClass("active");
$(this).addClass("active");$(".tab_content-bottom").hide();var activeTab=$(this).find("a").attr("href");$(activeTab).fadeIn();return false});	


//*** Tabs on Left Jquery ***//
$(".tab_content-left").hide();$("ul.tabs-left li:first").addClass("active").show();$(".tab_content-left:first").show();$("ul.tabs-left li").click(function(){$("ul.tabs-left li").removeClass("active");
$(this).addClass("active");$(".tab_content-left").hide();var activeTab=$(this).find("a").attr("href");$(activeTab).fadeIn();return false});


//*** Tabs on Right Jquery ***//
$(".tab_content-right").hide();$("ul.tabs-right li:first").addClass("active").show();$(".tab_content-right:first").show();$("ul.tabs-right li").click(function(){$("ul.tabs-right li").removeClass("active");
$(this).addClass("active");$(".tab_content-right").hide();var activeTab=$(this).find("a").attr("href");$(activeTab).fadeIn();return false});	


//*** Fancybox Jquery ***//
$(".fancybox").fancybox({padding:0,openEffect:'elastic',openSpeed:250,closeEffect:'elastic',closeSpeed:250,closeClick:true,helpers:{overlay:{opacity:0.65},media:{}}});	
	
	
//*** TinyNav Jquery ***//
(function(a,i,g){a.fn.tinyNav=function(j){var b=a.extend({active:"selected",header:"",label:""},j);return this.each(function(){g++;var h=a(this),d="tinynav"+g,f=".l_"+d,e=a("<select/>").attr("id",d).addClass("tinynav "+d);if(h.is("ul,ol")){""!==b.header&&e.append(a("<option/>").text(b.header));var c="";h.addClass("l_"+d).find("a").each(function(){c+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)c+="- ";c+=a(this).text()+"</option>"});e.append(c);
b.header||e.find(":eq("+a(f+" li").index(a(f+" li."+b.active))+")").attr("selected",!0);e.change(function(){i.location.href=a(this).val()});a(f).after(e);b.label&&e.before(a("<label/>").attr("for",d).addClass("tinynav_label "+d+"_label").append(b.label))}})}})(jQuery,this,0);
$('#menu').tinyNav({active: 'selected',header: 'Navigation'});	


//*** Flickr Feed ***//
$('#flck-thumb').jflickrfeed({limit:9,qstrings:{id:'52617155@N08'},itemTemplate:'<div>'+'<a class="fancybox" href="{{image}}" data-fancybox-group="gallery" title="{{title}}">'+'<img src="{{image_s}}" alt="{{title}}" />'+'</a>'+'</div>'},function(data){$('#flck-thumb a').colorbox();});	


//*** Tooltip Jquery ***//
var targets=$('[class=tooltip]'),target=false,tooltip=false,title=false;targets.bind('mouseenter',function(){target=$(this);tip=target.attr('title');tooltip=$('<div id="tooltip"></div>');if(!tip||tip=='')return false;target.removeAttr('title');tooltip.css('opacity',0).html(tip).appendTo('body');var init_tooltip=function(){if($(window).width()<tooltip.outerWidth()*1.5)tooltip.css('max-width',$(window).width()/2);else tooltip.css('max-width',340);var pos_left=target.offset().left+(target.outerWidth()/2)-(tooltip.outerWidth()/2),pos_top=target.offset().top-tooltip.outerHeight()-20;if(pos_left<0){pos_left=target.offset().left+target.outerWidth()/2-20;tooltip.addClass('left')}else tooltip.removeClass('left');if(pos_left+tooltip.outerWidth()>$(window).width()){pos_left=target.offset().left-tooltip.outerWidth()+target.outerWidth()/2+20;tooltip.addClass('right')}else tooltip.removeClass('right');if(pos_top<0){var pos_top=target.offset().top+target.outerHeight();tooltip.addClass('top')}else tooltip.removeClass('top');tooltip.css({left:pos_left,top:pos_top}).animate({top:'+=10',opacity:1},50)};init_tooltip();$(window).resize(init_tooltip);var remove_tooltip=function(){tooltip.animate({top:'-=10',opacity:0},50,function(){$(this).remove()});target.attr('title',tip)};target.bind('mouseleave',remove_tooltip);tooltip.bind('click',remove_tooltip);});	


//*** To top Jquery ***//
(function($){$.fn.UItoTop=function(options){var defaults={text:'To Top',min:200,inDelay:600,outDelay:400,containerID:'toTop',containerHoverID:'toTopHover',scrollSpeed:1200,easingType:'linear'},settings=$.extend(defaults,options),containerIDhash='#'+settings.containerID,containerHoverIDHash='#'+settings.containerHoverID;$('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');$(containerIDhash).hide().on('click.UItoTop',function(){$('html, body').animate({scrollTop:0},settings.scrollSpeed,settings.easingType);$('#'+settings.containerHoverID,this).stop().animate({'opacity':0},settings.inDelay,settings.easingType);return false;}).prepend('<span id="'+settings.containerHoverID+'"></span>').hover(function(){$(containerHoverIDHash,this).stop().animate({'opacity':1},600,'linear');},function(){$(containerHoverIDHash,this).stop().animate({'opacity':0},700,'linear');});$(window).scroll(function(){var sd=$(window).scrollTop();if(typeof document.body.style.maxHeight==="undefined"){$(containerIDhash).css({'position':'absolute','top':sd+$(window).height()-50});}
if(sd>settings.min)
$(containerIDhash).fadeIn(settings.inDelay);else
$(containerIDhash).fadeOut(settings.Outdelay);});};})(jQuery);
$().UItoTop({ easingType: 'easeOutQuart' });	


//*** Progress Bar Jquery ***//
(function($){$.fn.animateProgress=function(progress,callback){return this.each(function(){$(this).animate({width:progress+'%'},{duration:2000,easing:'swing',step:function(progress){var labelEl=$('.ui-label',this),valueEl=$('.value',labelEl);if(Math.ceil(progress)<20&&$('.ui-label',this).is(":visible")){labelEl.hide()}else{if(labelEl.is(":hidden")){labelEl.fadeIn()}}if(Math.ceil(progress)==100){labelEl.text('');setTimeout(function(){labelEl.fadeOut()},1000)}else{valueEl.text(Math.ceil(progress)+'%')}},complete:function(scope,i,elem){if(callback){callback.call(this,i,elem)}}})})};
})( jQuery );

$(function() {
$('#grey-bar .ui-progress .ui-label').hide();
$('#green-bar .ui-progress .ui-label').hide();
$('#blue-bar .ui-progress .ui-label').hide();
$('#orange-bar .ui-progress .ui-label').hide();
$('#red-bar .ui-progress .ui-label').hide();

// Set initial value
$('#grey-bar .ui-progress').css('width', '0%');
$('#green-bar .ui-progress').css('width', '0%');
$('#blue-bar .ui-progress').css('width', '0%');
$('#orange-bar .ui-progress').css('width', '0%');
$('#red-bar .ui-progress').css('width', '0%');

// Simulate some progress
$('#grey-bar .ui-progress').animateProgress(85, function() {});
$('#green-bar .ui-progress').animateProgress(80, function() {});
$('#blue-bar .ui-progress').animateProgress(95, function() {});
$('#orange-bar .ui-progress').animateProgress(80, function() {});
$('#red-bar .ui-progress').animateProgress(70, function() {});	
});

$('audio,video').mediaelementplayer();

});