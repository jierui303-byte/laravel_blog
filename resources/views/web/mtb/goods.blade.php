<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>仿淘宝商品详情页</title>
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/func.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/goods.css')}}">
</head>
<body>
    
    <!--商品图片轮播图 开始-->
    <div id="lun">
        <ul class="lunList">
            <li><a href="#"><img src="{{url('resources/views/web/mtb/img/gl1.jpg')}}" alt="gl1.jpg')}}"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/mtb/img/gl2.jpg')}}" alt="gl2.jpg')}}"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/mtb/img/gl3.jpg')}}" alt="gl3.jpg')}}"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/mtb/img/gl4.jpg')}}" alt="gl4.jpg')}}"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/mtb/img/gl5.jpg')}}" alt="gl5.jpg')}}"></a></li>
        </ul>
        <div class="lunTab">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--商品图片轮播图 结束-->


    <!--标题/价格销量快递, 销售笔数 开始-->
    <section class="bt">
        <div class="btitle">
            <h1>北岸定制儿童子母床双层床高低床上下床组合男女孩城堡床</h1>
        </div>
        <p class="bprice">￥899 <span>零食特惠</span><span>淘金币抵1%</span></p>
        <p class="yprice">价格: ￥<span>1299</span></p>
        <div class="bth">
            <span>月销241笔</span>
            <span>广东深圳</span>
        </div>
    </section>
    <!--标题/价格销量快递, 销售笔数 结束-->


    <!--满就送 弹层 开始-->
    <section class="mjs">
        <div class="mjsLeft">
            <span>满就送</span>
        </div>
        <div class="mjsRight">
            <p>1.单笔订单满68元免运费(不包邮地区：甘肃;青海;宁夏;新疆;西藏;台湾;香港;澳门;海外)，上不封顶！亲，快下手吧！</p>
            <span></span>
        </div>
    </section>
    <div class="tanceng">
        <section class="mjsTC">
            <div class="mjsRight">
                <p><span>满就送</span> 1.单笔订单满68元免运费(不包邮地区：甘肃;青海;宁夏;新疆;西藏;台湾;香港;澳门;海外)，上不封顶！亲，快下手吧！</p>
            </div>
            <div class="queren">确认</div>
        </section>
    </div>
    <div class="zz"></div>
    <!--满就送 弹层 结束-->


    <!--宝贝评价 开始-->
    <section class="bbpj">
        <p>宝贝评价(4270)</p>
        <div class="bbpjSpan">
            <span>物流快+(71)</span>
            <span>味道不错+(47)</span>
            <span>服务好+(29)</span>
            <span>质量不错+(25)</span>
            <span>便宜+(23)</span>
            <span>腰果很好吃+(22)</span>
        </div>
        <div class="bbpjOne">
            <p><img src="{{url('resources/views/web/mtb/img/mpj.jpg')}}" alt=""><span>霞**陈</span> <span></span></p>
            <p>很好吃, 快递很快哟! 是送给朋友的, 闺蜜说很脆香, 一直都信赖百草味家的零食, 日期新鲜, 有保障</p>
            <p>食品口味:炭烧口味</p>
        </div>
        <div class="bbpjC">
            <span>查看全部评价</span>
        </div>
    </section>
    <!--宝贝评价 结束-->




    <!--店铺名称 开始-->
    <section class="shopName">
        <div class="shopNameTop">
            <a href=""><img src="{{url('resources/views/web/mtb/img/bcw.png')}}" alt=""></a>
            <div>
                <p>百草味零食连锁</p>
                <p><span></span><img src="{{url('resources/views/web/mtb/img/qy.jpg')}}" alt=""></p>
            </div>
            <a href=""><img src="{{url('resources/views/web/mtb/img/jp.png')}}" alt=""></a>
        </div>
        <div class="shopNameCenter">
            <a href="">
                <span>301</span>
                <span>全部宝贝</span>
            </a>
            <a href="">
                <span>32.4万</span>
                <span>关注人数</span>
            </a>
        </div>
        <div class="shopNameBottom">
            <div>
                <span>查看分类</span>
            </div>
            <div>
                <span>进店逛逛</span>
            </div>
        </div>
    </section>
    <!--店铺名称 结束-->


    <!--tab切换页面 宝贝详情 开始-->
    <section class="bbTab">
        <ul class="bbTabList">
            <li>图文详情</li>
            <li>产品参数</li>
            <li>店铺推荐</li>
        </ul>
    </section>
    <section class="bbTabListContent">
        <div class="bbTabListContentDW">
            <div class="bbTabListContentTab">
                <div class="bbTab1 ggys">
                    <!--<h1>bbTab1</h1>-->
                    <img src="{{url('resources/views/web/mtb/img/p1.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p2.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p3.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p4.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p5.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p6.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p7.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p8.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p9.jpg')}}" alt="">
                    <img src="{{url('resources/views/web/mtb/img/p10.jpg')}}" alt="">
                </div>
                <div class="bbTab2 ggys">
                    <!--<h1>bbTab2</h1>-->
                    <dl>
                        <dt>生产许可证编号</dt>
                        <dd>SC11333019700024</dd>
                    </dl>
                    <dl>
                        <dt>产品标准号</dt>
                        <dd>GB/T 22165</dd>
                    </dl>
                    <dl>
                        <dt>厂名</dt>
                        <dd>杭州郝姆斯食品有限公司</dd>
                    </dl>
                    <dl>
                        <dt>厂址</dt>
                        <dd>浙江省杭州市萧山临江高新技术产业开发区纬七路1999号</dd>
                    </dl>
                    <dl>
                        <dt>厂家联系方式</dt>
                        <dd>0571-56588827</dd>
                    </dl>
                    <dl>
                        <dt>配料表</dt>
                        <dd>腰果、小麦粉、白砂糖、食用盐、植物油</dd>
                    </dl>
                    <dl>
                        <dt>储藏方法</dt>
                        <dd>常温下密封保存，开封即食</dd>
                    </dl>
                    <dl>
                        <dt>保质期</dt>
                        <dd>240</dd>
                    </dl>
                    <dl>
                        <dt>食品添加剂</dt>
                        <dd>无</dd>
                    </dl>
                    <dl>
                        <dt>净含量</dt>
                        <dd>380g</dd>
                    </dl>
                    <dl>
                        <dt>包装方式</dt>
                        <dd>包装</dd>
                    </dl>
                    <dl>
                        <dt>包装种类</dt>
                        <dd>袋装</dd>
                    </dl>
                    <dl>
                        <dt>品牌</dt>
                        <dd>BE＆CHEERY/百草味</dd>
                    </dl>
                    <dl>
                        <dt>系列</dt>
                        <dd>腰果 190克x2袋</dd>
                    </dl>
                    <dl>
                        <dt>商品条形码</dt>
                        <dd>6948939611246</dd>
                    </dl>
                    <dl>
                        <dt>食品口味</dt>
                        <dd>盐焗口味,炭烧口味</dd>
                    </dl>
                    <dl>
                        <dt>是否含糖</dt>
                        <dd>含糖</dd>
                    </dl>
                    <dl>
                        <dt>产地</dt>
                        <dd>中国大陆</dd>
                    </dl>
                    <dl>
                        <dt>省份</dt>
                        <dd>浙江省</dd>
                    </dl>
                    <dl>
                        <dt>城市</dt>
                        <dd>杭州市</dd>
                    </dl>
                    <dl>
                        <dt>是否新货</dt>
                        <dd>是</dd>
                    </dl>
                    <dl>
                        <dt>生产日期</dt>
                        <dd>2015年11月01日 至 2016年01月10日</dd>
                    </dl>
                </div>
                <div class="bbTab3 ggys">
                    <!--<h1>bbTab3</h1>-->
                    <div class="bbTab3Top">
                        <hr>
                        <span>宝贝推荐</span>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj1.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj2.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj3.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj4.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj5.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj6.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj7.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj8.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj9.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{url('resources/views/web/mtb/img/tj10.jpg')}}" alt="">
                                <p>【百草味-炭烧腰果190gx2袋】 特产果仁干果 盐焗味坚果</p>
                                <p><span>￥36.9</span></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!--tab切换页面 宝贝详情 结束-->



    <footer>
        <section class="footer">
            <div class="kefu">客服</div>
            <div class="dianpu">店铺</div>
            <div class="soucang">收藏</div>
            <div class="btn">加入购物车</div>
            <div class="btn ljgm">立即购买</div>
        </section>
    </footer>


</body>
<script>
    (function(window){
        var dw = window.document.documentElement.clientWidth;
        var font = dw / 10 > 54 ? 54 : dw/10;
        font += 'px';
        // 1rem = 10vw; width*10%
        window.document.documentElement.style.fontSize = font;


        //监听窗口大小改变事件
        window.addEventListener('resize', function(){
            var dw = window.document.documentElement.clientWidth;
            var font = dw / 10 > 54 ? 54 : dw/10;
            font += 'px';
            // 1rem = 10vw; width*10%
            window.document.documentElement.style.fontSize = font;
        }, false);
    })(window)
</script>
<script src="{{asset('resources/views/web/mtb/js/goods.js')}}"></script>
</html>