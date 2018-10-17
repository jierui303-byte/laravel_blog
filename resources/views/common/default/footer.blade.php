<div class="bottom_nav">
    <ul>
        <li><a href="#">站点地图</a></li>
        <li><a href="#">关于我们</a></li>
        <li><a href="#">招聘信息</a></li>
        <li><a href="#">意见反馈</a></li>
        <li><a href="#">免责声明</a></li>
    </ul>
</div>
<div class="ffooter">
    <div class="container">
        <div class="ffooterl">
            <h4>合作链接</h4>
            <ul>
                @foreach($data['links'] as $k=>$v)
                    <li><a href="{{$v->link_url}}" rel="nofollow" target="_blank" title="{{$v->link_title}}">{{$v->link_name}}</a></li>
                @endforeach
            </ul>
        </div>
        {{--<div class="ffooterr">--}}
        {{--<div class="fimg"><img src="http://theme.b5b6.com/ydnew/zb_users/upload/2017/12/201712071512577583580982.png" alt="演示站"></div>--}}
        {{--<div class="ftext">关注我们</div>--}}
        {{--<div class="ficon">--}}
        {{--<span><a href="#" target="_blank"><img src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/style/images/weibo.png" alt="微博"></a></span>--}}
        {{--<span class="fwx">--}}
        {{--<a><img src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/style/images/weixin.png" alt="微信">--}}
        {{--<div class="app-qrcode"><img src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/style/diy/qrcode.jpg" alt="微信号"></div>--}}
        {{--</a>--}}
        {{--</span>--}}
        {{--<span><a href="http://theme.b5b6.com/ydnew/feed.php" target="_blank"><img src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/style/images/icon4.png" alt="feed"></a></span>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</div><footer class="footer">
    <div class="container">
        <p>Copyright Your WebSite.Some Rights Reserved.&nbsp;&nbsp;京ICP备16056489号&nbsp;&nbsp;统计代码&nbsp;&nbsp;Powered by <a href="http://www.jierui303.com/" target="_blank">编程303社区</a></p>
    </div>
</footer>
<div class="bottom_tools">
    <div class="qr_tool">二维码</div>
    <a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
    <div class="qr_img">
        <img src="{{url('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/diy/qrcode.jpg')}}" width="150" height="150">
    </div>
</div>
<script type="text/javascript" src="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/js/style.js')}}"></script>

<div id="qb_collection_img_mask" style="display: none; top: 53px; left: 958.5px;">
    <div class="qb_collection_img_icon"></div>
    <span>收藏</span>
</div>