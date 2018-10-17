$('body').show();
$('.version').text(NProgress.version);
NProgress.start();
setTimeout(function(){
    NProgress.done();
    $('.fade').removeClass('out')
},1000);
(function(){
    $('img').attr('draggable','false');
    $('a').attr('draggable','false');
    $('.widget-sentence-content ul').append('<li><a href="http://seo.jierui303.com" target="1" title="杰瑞SEO工作室">杰瑞SEO工作室</a></li>');
    $('.footer div p').append('  T'+'he'+'me b'+'y <a hr'+'ef="h'+'t'+'t'+'p'+':'+'/'+'/'+'w'+'w'+'w'+'.'+'m'+'u'+'z'+'h'+'u'+'a'+'n'+'g'+'n'+'e'+'t'+'.'+'c'+'o'+'m'+'/'+'l'+'i'+'s'+'t'+'/'+'m'+'z'+'n'+'e'+'t'+'b'+'l'+'o'+'g'+'/'+'" '+'t'+'a'+'r'+'g'+'e'+'t'+'='+'"_b'+'l'+'a'+'n'+'k'+'" '+'rel'+'='+'"nofollow" '+'t'+'i'+'t'+'l'+'e'+'="'+'M'+'Z'+'-'+'N'+'e'+'t'+'B'+'l'+'o'+'g'+'主'+'题'+'">M'+'Z'+'-'+'N'+'e'+'t'+'B'+'l'+'o'+'g'+'</a>'+'主'+'题'+'  <a'+' h'+'r'+'e'+'f'+'="h'+'t'+'t'+'p'+':'+'/'+'/'+'s'+'e'+'o'+'.'+'j'+'i'+'e'+'r'+'u'+'i'+'3'+'0'+'3'+'.'+'c'+'o'+'m'+'/" t'+'a'+'r'+'g'+'e'+'t'+'="_'+'b'+'l'+'a'+'n'+'k" t'+'i'+'t'+'l'+'e="'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'">'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'</a>');
    $('.article-tags').append('<a hr'+'ef="h'+'t'+'t'+'p'+':'+'/'+'/'+'s'+'e'+'o'+'.'+'j'+'i'+'e'+'r'+'u'+'i'+'3'+'0'+'3'+'.'+'c'+'o'+'m'+'/'+'" t'+'a'+'r'+'g'+'e'+'t'+'="_b'+'l'+'a'+'n'+'k" t'+'i'+'t'+'le="'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'">'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'</a>');
    $('.widget-sentence-link').append('<a h'+'ref="h'+'t'+'t'+'p'+':'+'/'+'/'+'s'+'e'+'o'+'.'+'j'+'i'+'e'+'r'+'u'+'i'+'3'+'0'+'3'+'.'+'c'+'o'+'m'+'/'+'" t'+'a'+'r'+'g'+'e'+'t="_b'+'l'+'a'+'n'+'k" '+'t'+'i'+'t'+'l'+'e="'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'">'+'杰'+'瑞'+'S'+'E'+'O'+'工作室'+'</a>')})();
    function setCookie(name,value,time){
        var strsec=getsec(time);
        var exp=new Date();
        exp.setTime(exp.getTime()+strsec*1);
        document.cookie=name+"="+escape(value)+";expires="+exp.toGMTString()
    }
    function getsec(str){
        var str1=str.substring(1,str.length)*1;
        var str2=str.substring(0,1);
        if(str2=="s"){
            return str1*1000
        }else if(str2=="h"){
            return str1*60*60*1000
        }else if(str2=="d"){
            return str1*24*60*60*1000
        }
    }
    function getCookie(name){
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg)){
            return unescape(arr[2])
        }else{
            return null
        }
    }
    $.fn.navSmartFloat=function(){
        var position=function(element){
            var top=element.position().top,pos=element.css("position");
            $(window).scroll(function(){
                var scrolls=$(this).scrollTop();
                if(scrolls>top){
                    $('.header-topbar').fadeOut(0);
                    if(window.XMLHttpRequest){
                        element.css({position:"fixed",top:0}).addClass("shadow")
                    }else{
                        element.css({top:scrolls})
                    }
                }else{
                    $('.header-topbar').fadeIn(500);
                    element.css({position:pos,top:top}).removeClass("shadow")
                }
            })
        };
        return $(this).each(function(){
            position($(this))
        })
    };
    $("#navbar").navSmartFloat();
    $("#gotop").hide();
    $(window).scroll(function(){
        if($(window).scrollTop()>100){
            $("#gotop").fadeIn()
        }else{
            $("#gotop").fadeOut()
        }
    });
    $("#gotop").click(function(){
        $('html,body').animate({'scrollTop':0},500)
    });
    $("img.thumb").lazyload({
        placeholder:"../images/occupying.png",
        effect:"fadeIn"
    });
    $(".single .content img").lazyload({
        placeholder:"../images/occupying.png",
        effect:"fadeIn"
    });
    document.body.onselectstart=document.body.ondrag=function(){
        return false
    };
    $('[data-toggle="tooltip"]').tooltip();
    jQuery.ias({
        history:false,
        container:'.content',
        item:'.excerpt',
        pagination:'.pagination',
        next:'.next-page a',
        trigger:'查看更多',
        loader:'<div class="pagination-loading"><img src="http://seo.jierui303.com/images/loading.gif" /></div>',
        triggerPageThreshold:5,
        onRenderComplete:function(){
            $('.excerpt .thumb').lazyload({placeholder:'images/occupying.png',threshold:400});
            $('.excerpt img').attr('draggable','false');
            $('.excerpt a').attr('draggable','false')
        }
    });
    $(window).scroll(function(){
        var sidebar=$('.sidebar');
        var sidebarHeight=sidebar.height();
        var windowScrollTop=$(window).scrollTop();
        if(windowScrollTop>sidebarHeight-60&&sidebar.length){
            $('.fixed').css({'position':'fixed','top':'70px','width':'360px'})
        }else{
            $('.fixed').removeAttr("style")
        }
    });
    //使用ajax提交评论
    $(function(){
        $("#comment-submit").click(function(){
            var commentContent=$("#comment-textarea");
            var commentButton=$("#comment-submit");
            var promptBox=$('.comment-prompt');
            var promptText=$('.comment-prompt-text');
            var articleid=$('.articleid').val();
            promptBox.fadeIn(400);
            if(commentContent.val()===''){
                promptText.text('正在提交您的评论...');
                return false
            }
            commentButton.attr('disabled',true);
            commentButton.addClass('disabled');
            promptText.text('正在提交...');
            $.ajax({
                type:"POST",
                url:"http://seo.jierui303.com/article/pingLun",
                // data:"commentContent="+replace_em(commentContent.val()),
                data:{
                    'art_id' : articleid,
                    'art_commentContent' : commentContent.val(),
                    'commentUser' : $("#commentUser").val(),
                    'beizhu' : $("#beizhu").val(),
                    '_token':$('input[name="_token"]').val()
                },
                cache:false,
                success:function(data){
                    alert(data);
                    promptText.text('评论成功!');
                    commentContent.val(null);
                    $(".commentlist").fadeIn(300);
                    commentButton.attr('disabled',false);
                    commentButton.removeClass('disabled')
                }
            });
            promptBox.fadeOut(100);
            return false
        })
    });