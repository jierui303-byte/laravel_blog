<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>仿阿里旅行手机版</title>
    <link rel="stylesheet" href="{{asset('resources/views/web/allx/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/allx/css/allx.css')}}">
</head>
<body>

    <header>
        <div class="headerLeft">
            <span>选城市</span>
        </div>
        <div class="headerRight">
            <p>目的地/景点/酒店/门票</p>
        </div>
    </header>


    <!--轮播图 开始-->
    <div id="lun" class="banner">
        <ul class="lunList bannerList">
            <li><a href="#"><img src="{{url('resources/views/web/allx/img/banner1.jpg')}}" alt="banner1.jpg"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/allx/img/banner2.jpg')}}" alt="banner2.jpg"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/allx/img/banner3.jpg')}}" alt="banner3.jpg"></a></li>
            <li><a href="#"><img src="{{url('resources/views/web/allx/img/banner4.jpg')}}" alt="banner4.jpg"></a></li>
        </ul>
        <div class="lunTab bannerDian">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--轮播图 结束-->


    <!--导航列表 开始-->
    <section class="navbar">
        <ul>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/jp.png')}}" alt="机票"></a>
                <span>机票</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/jdkz.png')}}" alt="酒店客栈"></a>
                <span>酒店客栈</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/hcp.png')}}" alt="火车票"></a>
                <span>火车票</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/qcp.png')}}" alt="汽车票"></a>
                <span>汽车票</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/zyx.png')}}" alt="自由行"></a>
                <span>自由行</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/lydj.png')}}" alt="旅游度假"></a>
                <span>机票</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/zby.png')}}" alt="周边游"></a>
                <span>周边游</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/mp.png')}}" alt="门票"></a>
                <span>门票</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/llc.png')}}" alt="领里程"></a>
                <span>领里程</span>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/qb.png')}}" alt="全部"></a>
                <span>全部</span>
            </li>
        </ul>
    </section>
    <!--导航列表 结束-->


    <!--出境超市 开始-->
    <section class="cjcs">
        <!--<header>-->
            <div></div>
            <p>一站购齐 官方严选 优质保障</p>
            <span>更多</span>
        <!--</header>-->
    </section>
    <section class="cjcsList">
        <ul>
            <li>
                <a href="#">旅行机票</a>
            </li>
            <li>
                <a href="#">签证</a>
            </li>
            <li>
                <a href="#">国际酒店</a>
            </li>
            <li>
                <a href="#">国际租车</a>
            </li>
            <li class="cjcsListNoTop">
                <a href="#">接送机</a>
            </li>
            <li class="cjcsListNoTop">
                <a href="#">WiFi电话卡</a>
            </li>
            <li class="cjcsListNoTop">
                <a href="#">国际门票</a>
            </li>
            <li class="cjcsListNoTop">
                <a href="#">当地玩乐</a>
            </li>
        </ul>
    </section>
    <!--出境超市 结束-->



    <!--飞猪特卖 开始-->
    <section class="fztm">
        <a href="#">
            <div></div>
            <p>超低价去日本</p>
            <p><span>¥</span><span>299</span><span>起</span></p>
        </a>
        <a href="#">
            <div></div>
            <p>香港减50!</p>
        </a>
        <a href="#">
            <div></div>
            <p>第五晚就...</p>
        </a>
    </section>
    <!--飞猪特卖 结束-->



    <!--飞猪直播 开始-->
    <section class="fzzb">
        <h2>飞猪直播</h2>
        <ul>
            <li>
                <a href="#">
                    <h3>比梦想走更远</h3>
                    <p>极光音乐会</p>
                    <img src="{{url('resources/views/web/allx/img/b1.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <h3>伊豆温泉探秘</h3>
                    <p>明星主播体验五星温泉酒店</p>
                    <img src="{{url('resources/views/web/allx/img/b2.jpg')}}" alt="">
                </a>
            </li>
        </ul>
        <span>观看更多精彩直播</span>
    </section>
    <!--飞猪直播 结束-->




    <!--乐活周末 开始-->
    <section class="lhzm">
        <h2>乐活周末</h2>
        <div class="lhzmOne">
            <a href="#"><img src="{{url('resources/views/web/allx/img/i4.jpg')}}" alt=""></a>
            <p>一对只羡鸳鸯不羡仙的85后, 在山里建了一栋...</p>
            <div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>时尚旅行</span></a>
                <span>1862</span><span>17.1万</span>
            </div>
        </div>
        <ul class="lhzmList">
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/i5.jpg')}}" alt=""></a>
                <p>大波妈妈们又要带娃奔向这家最佳亲子酒店了|...</p>
                <div>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>布拉旅行</span></a>
                    <p><span>290</span><span>3.1万</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/i6.jpg')}}" alt=""></a>
                <p>周末去哪玩最合适? 收好这份杭州周边家庭游...</p>
                <div>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>杭州潮生活</span></a>
                    <p><span>58</span><span>9339</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/i7.jpg')}}" alt=""></a>
                <p>带着宝贝去踏青! 江浙最适合亲子度假的民宿</p>
                <div>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>Feekr旅行</span></a>
                    <p><span>47</span><span>1.5万</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/i8.jpg')}}" alt=""></a>
                <p>Dear, G20后的杭州有一个地方只有我知道</p>
                <div>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>Feekr旅行</span></a>
                    <p><span>695</span><span>1.7万</span></p>
                </div>
            </li>
        </ul>
    </section>
    <!--乐活周末 结束-->
    
    
    
    <!--列表 开始-->
    <section class="hot">
        <ul>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>[单程]杭州至舟山旅游巴士吴山广场沈家门汽车站天天发车汽车票</p>
                    <p><span>¥98</span><span>人气高到爆棚</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>杭州良厨农夫乐园门票 亲子套餐 2大1小家庭套票 农夫乐园年卡</p>
                    <p><span>¥100</span><span>人气高到爆棚</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>当天可定 杭州运河夜游船票 京杭大运河门票船票 运河梦幻夜游</p>
                    <p><span>¥80</span><span>69%同星座的都说好</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>杭州库曼居酒店(运河广场店)[热酒店]</p>
                    <p><span>¥119</span><span>人气高到爆棚</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>当天可定/浙江杭州极地海洋公园门票人票 直接刷身份证入园</p>
                    <p><span>¥225</span><span>人气高到爆棚</span></p>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/h1.jpg')}}" alt=""></a>
                <div>
                    <p>杭州库曼居酒店(运河广场店)[热酒店]</p>
                    <p><span>¥119</span><span>人气高到爆棚</span></p>
                </div>
            </li>
        </ul>
        <span>发现N种周末玩法</span>
    </section>
    <!--列表 结束-->
    
    
    <!--广告 开始-->
    <section class="guangGao">
        <a href="#"><img src="{{url('resources/views/web/allx/img/g1.jpg')}}" alt=""></a>
    </section>
    <!--广告 结束-->



    <!--旅行头条 开始-->
    <section class="lxtt">
        <h2>旅行头条</h2>
        <div class="lhzmOne">
            <a href="#"><img src="{{url('resources/views/web/allx/img/l1.jpg')}}" alt=""></a>
            <p>刘伯温亲手设计一个千年古村, 六百年未发生水寒灾害, 怪事连连无法用科学解释...</p>
            <div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/u1.jpg')}}" alt=""><span>百代旅行网</span></a>
                <span>74.2万</span><span>917</span>
            </div>
        </div>
        <ul>
            <li>
                <div>
                    <a href="#">最适合穷游的8个国家, 全部白菜价!</a>
                    <div class="tx">
                        <img src="{{url('resources/views/web/allx/img/q1.jpg')}}" alt="">
                        <span>周末去哪玩</span>
                    </div>
                    <p><span>75.4万</span><span>1.4万</span></p>
                </div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/l2.jpg')}}" alt=""></a>
            </li>
            <li>
                <div>
                    <a href="#">国内高铁直达的9座绝美海岛, 人少好玩还免费!</a>
                    <div class="tx">
                        <img src="{{url('resources/views/web/allx/img/u2.jpg')}}" alt="">
                        <span>一起去旅行</span>
                    </div>
                    <p><span>19.5万</span><span>5561</span></p>
                </div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/l3.jpg')}}" alt=""></a>
            </li>
            <li>
                <div>
                    <a href="#">28岁中国女孩穷游14国, 最后被士兵用枪逼婚!</a>
                    <div class="tx">
                        <img src="{{url('resources/views/web/allx/img/u3.jpg')}}" alt="">
                        <span>让眼睛去旅行</span>
                    </div>
                    <p><span>49.4万</span><span>2765</span></p>
                </div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/l5.jpg')}}" alt=""></a>
            </li>
            <li>
                <div>
                    <a href="#">中国9个旅行不要钱的地方! 很少人知道的处女地!</a>
                    <div class="tx">
                        <img src="{{url('resources/views/web/allx/img/u4.jpg')}}" alt="">
                        <span>巡逻飞鸟</span>
                    </div>
                    <p><span>35.8万</span><span>2833</span></p>
                </div>
                <a href="#"><img src="{{url('resources/views/web/allx/img/l6.jpg')}}" alt=""></a>
            </li>
        </ul>
        <span>更多 <em> </em></span>
    </section>
    <!--旅行头条 结束-->



    <!--玩+ 开始-->
    <section class="wanLun">
        <h2>玩+</h2>
        <div class="wanLunDiv">
            <ul>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w1.jpg')}}" alt=""></a>
                    <div>
                        <h4>浪漫</h4>
                        <p>浪花朵朵 皇帝岛珊瑚岛一...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w2.jpg')}}" alt=""></a>
                    <div>
                        <h4>骑大象</h4>
                        <p>清迈骑大象丛林飞跃一日游...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w3.jpg')}}" alt=""></a>
                    <div>
                        <h4>潜水</h4>
                        <p>普吉岛豪华双体帆船皇帝...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w4.jpg')}}" alt=""></a>
                    <div>
                        <h4>文化体验</h4>
                        <p>懒猫旅行 清迈白庙黑喵...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w5.jpg')}}" alt=""></a>
                    <div>
                        <h4>刺激</h4>
                        <p>懒猫旅行 清迈白庙黑喵...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w6.jpg')}}" alt=""></a>
                    <div>
                        <h4>热气球</h4>
                        <p>凯恩斯热气球+库兰达雨...</p>
                    </div>
                </li>
                <li>
                    <a href="#"><img src="{{url('resources/views/web/allx/img/w2.jpg')}}" alt=""></a>
                    <div>
                        <h4>骑大象</h4>
                        <p>清迈骑大象丛林飞跃一日游...</p>
                    </div>
                </li>
            </ul>
        </div>
        <span>发现更多新奇体验</span>
    </section>
    <!--玩+ 结束-->



    <!--本月热门目的地 开始-->
    <section class="mdd">
        <h2>本月热门目的地</h2>
        <ul>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/m1.jpg')}}" alt=""></a>
                <h3>丽江</h3>
                <p>故事之城 艳遇之都</p>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/m2.jpg')}}" alt=""></a>
                <h3>三亚</h3>
                <p>浪漫沙滩 休闲度假</p>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/m3.jpg')}}" alt=""></a>
                <h3>泰国</h3>
                <p>微笑国度 千佛之城</p>
            </li>
            <li>
                <a href="#"><img src="{{url('resources/views/web/allx/img/m4.jpg')}}" alt=""></a>
                <h3>马尔代夫</h3>
                <p>椰林树影 水清沙幼</p>
            </li>
        </ul>
    </section>
    <!--本月热门目的地 结束-->


    <!--分类 开始-->
    <section class="lei">
        <ul>
            <li><a href="#">丽江</a></li>
            <li><a href="#">美国</a></li>
            <li><a href="#">巴厘岛</a></li>
            <li><a href="#">三亚</a></li>
            <li><a href="#">法国</a></li>
            <li><a href="#">泰国</a></li>
            <li><a href="#">马尔代夫</a></li>
            <li><a href="#">北海道</a></li>
            <li><a href="#">洛杉矶</a></li>
            <li><a href="#">清迈</a></li>
            <li><a href="#">济州岛</a></li>
            <li><a href="#">新加坡</a></li>
        </ul>
        <span>探索更多目的地</span>
    </section>
    <!--分类 结束-->



    <!--猜你喜欢 开始-->
    <section class="cnxh">
        <h2>猜你喜欢</h2>
        <ul>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c1.jpg')}}" alt="">
                    <p><span>海口</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c2.jpg')}}" alt="">
                    <p><span>台湾</span><span>自由行</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c3.jpg')}}" alt="">
                    <p><span>桂林</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c4.jpg')}}" alt="">
                    <p><span>崇左</span><span>自由行</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c5.jpg')}}" alt="">
                    <p><span>迪庆</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c6.jpg')}}" alt="">
                    <p><span>西安</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c7.jpg')}}" alt="">
                    <p><span>那曲</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c8.jpg')}}" alt="">
                    <p><span>吐鲁番</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c9.jpg')}}" alt="">
                    <p><span>青岛</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
            <li>
                <a href="#">
                    <img src="{{url('resources/views/web/allx/img/c10.jpg')}}" alt="">
                    <p><span>长沙</span><span>跟团游</span></p>
                </a>
                <h3>阿里旅行专线 山东蓬莱烟台威海3天2晚跟团游 游八仙过海..</h3>
                <p><span>¥1239</span><span>176人已买</span></p>
            </li>
        </ul>
    </section>
    <!--猜你喜欢 结束-->


    <footer>
        <ul>
            <li><p>首页</p></li>
            <li><p>发现</p></li>
            <li><p>目的地</p></li>
            <li><p>行程</p></li>
        </ul>
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
<script src="{{asset('resources/views/web/allx/js/allx.js')}}"></script>
</html>