<header class="header">
    <div class="container">
        <h1 class="logo">
            <a href="{{url('/')}}" title="php">
                {{--<img src="http://theme.b5b6.com/ydnew/zb_users/upload/2017/12/201712071512577583580982.png" alt="演示站">--}}
            </a>
        </h1>
        <ul class="site-nav site-navbar">
            <li><a href="{{url('/')}}" title="首页">首页</a></li>
            @foreach($data['navCategory'] as $k=>$v)
                <li><a href="{{url('/category'.$v->cate_id.'.html')}}" title="{{$v->cate_name}}">{{$v->cate_name}}</a></li>
            @endforeach
        </ul>
        <span class="navto-search">
            <a href="javascript:;" class="search-show active"><i class="fa fa-search"></i></a>
        </span>
        <span class="usercc">
            {{--<a href="#" target="_blank">Hi, 请登录</a>--}}
        </span>
        <i class="fa fa-bars m-icon-nav"></i>
    </div>
</header>
<div class="site-search">
    <div class="container">
        <form method="get" class="site-search-form" action="http://theme.b5b6.com/ydnew/search.php?act=search">
            <input class="search-input" name="q" type="text" placeholder="输入关键字" value="">
            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
<script>
    $(".navto-search").click(function(){
        $(".navto-search i").toggleClass("fa-remove");
        $("body").toggleClass("search-on");
    });
    $(".m-icon-nav").click(function(){
        $("body").toggleClass("m-nav-show");
        $(".site-navbar").slideToggle(100);
    });
</script>
<style>.topadcss{padding-bottom: 16px;}</style>