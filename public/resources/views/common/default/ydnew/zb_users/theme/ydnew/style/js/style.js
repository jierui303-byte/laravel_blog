$(function(){
 var $bottomTools = $('.bottom_tools');
 var $qrTools = $('.qr_tool');
 var qrImg = $('.qr_img');
 
 $(window).scroll(function () {
  var scrollHeight = $(document).height();
  var scrollTop = $(window).scrollTop();
  var $windowHeight = $(window).innerHeight();
  scrollTop > 50 ? $("#scrollUp").fadeIn(200).css("display","block") : $("#scrollUp").fadeOut(200);   
  $bottomTools.css("bottom", scrollHeight - scrollTop > $windowHeight ? 40 : $windowHeight + scrollTop + 40 - scrollHeight);
 });
 
 $('#scrollUp').click(function (e) {
  e.preventDefault();
  $('html,body').animate({ scrollTop:0});
 });

 $qrTools.hover(function () {
  qrImg.fadeIn();
 }, function(){
   qrImg.fadeOut();
 });
 
});

//tag多彩
$(function(){
	var sc=$(document);
	var tags_a = $(".widget_tags li");
	tags_a.each(function(){
		var x = 9;
		var y = 0;
		var rand = parseInt(Math.random() * (x - y + 1) + y);
		$(this).addClass("tagbgc"+rand);
	});
});

