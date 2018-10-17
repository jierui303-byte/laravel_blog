<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>仿淘宝购物车-Jerry的编程之路</title>
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/func.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/cart.css')}}">
</head>
<body>

    <!--购物车头部 开始-->
    <header>
        <div class="back"></div>
        <div>
            <span>购物车(115)</span>
        </div>
        <div>编辑</div>
    </header>
    <!--购物车头部 结束-->

    <!--订单列表 开始-->
    <section class="ddlb">
        <ul>
            <li class="wLi">
                <div class="ddlbTop">
                    <div>
                        <input type="checkbox" id="shop1">
                        <label for="shop1" class="ddlbTopLabel"></label>
                    </div>
                    <div><span class="shopIco_A"></span></div>
                    <p>两人故事原创设计</p>
                    <div>
                        <span>领券</span>
                        <span class="bianji">编辑</span>
                    </div>
                </div>
                <ol>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop1_name1">
                            <label for="shop1_name1" class="ckLabel" ></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g1.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>欧洲站正品冬季新款超大狐狸毛领修身中长款过膝加厚羽绒服女保暖</h3>
                                    <p><span>￥795.00</span><span>￥935.00</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop1_name2">
                            <label for="shop1_name2" class="ckLabel" ></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g2.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>施华蔻8金无硅油洗发水护发素洗护套装1.3L发根清爽发丝滋养</h3>
                                    <p><span>￥129.80</span><span>￥239.00</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop1_name3">
                            <label for="shop1_name3" class="ckLabel" ></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g3.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>【顺丰直邮】嘎嘣来了台湾进口特产零食品 混合坚果糖150g*2袋装</h3>
                                    <p><span>￥95.80</span><span>￥119.80</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </li>
            <li class="wLi">
                <div class="ddlbTop">
                    <div>
                        <input type="checkbox" id="shop2">
                        <label for="shop2" class="ddlbTopLabel"></label>
                    </div>
                    <div><span class="shopIco_B"></span></div>
                    <p>易记养生馆</p>
                    <div>
                        <span>领券</span>
                        <span class="bianji">编辑</span>
                    </div>
                </div>
                <ol>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop2_name1">
                            <label for="shop2_name1" class="ckLabel"></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g4.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>桃胶天然野生 食用云南丽江水蜜桃干货桃花泪500g克皂角米伴侣</h3>
                                    <p><span>￥35.00</span><span>￥38.00</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop2_name2">
                            <label for="shop2_name2" class="ckLabel" ></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g5.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>批发皂角米云南野生 雪莲子白籽仁皂荚米500g可配桃胶银耳蔓越莓</h3>
                                    <p><span>￥88.80</span><span>￥198.00</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="shopLi">
                        <div class="ck">
                            <input type="checkbox" id="shop2_name3">
                            <label for="shop2_name3" class="ckLabel" ></label>
                        </div>
                        <div class="info">
                            <a href="#"><img src="{{url('resources/views/web/mtb/img/g6.jpg')}}" alt=""></a>
                            <div>
                                <div class="shangpin">
                                    <h3>【顺丰直邮】嘎嘣来了台湾进口特产零食品 混合坚果糖150g*2袋装</h3>
                                    <p><span>￥95.80</span><span>￥119.80</span><span>x1</span></p>
                                </div>
                                <div class="shuliang">
                                    <p><span class="jian" title="最小为0, 为0时,删除该条数据,假删除">-</span><span class="shuliangValue">1</span><span class="jia" title="最大为10">+</span></p>
                                    <p class="deleteEle"><span>删</span><span>除</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </li>

        </ul>

    </section>
    <!--订单列表 结束-->









    <!--底部 开始-->
    <div class="footer">
        <!--结算 开始-->
        <section class="jiesuan">
            <div>
                <input type="checkbox" id="jiesuan">
                <label for="jiesuan" class="jiesuanLabel" ></label>
                <span>全选</span>
            </div>
            <div>
                <p>合计: <span>￥0</span><span>不含运费</span></p>
            </div>
            <div>
                结算(<span>0</span>)
            </div>
        </section>
        <!--结算 结束-->
        <div class="footerDiv">
            <a href="#">首页</a>
            <a href="#">物流</a>
            <a href="#">购物车</a>
            <a href="#">我的淘宝</a>
        </div>
    </div>
    <!--底部 结束-->


<br>
<br>

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
<script src="{{asset('resources/views/web/mtb/js/cart.js')}}"></script>
</html>