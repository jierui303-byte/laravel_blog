/**
 * Created by mac on 2016/11/20.
 */

window.addEventListener('load', initial, false);//监听加载完毕

function initial(){

    var lunLis = document.getElementsByClassName('lunList')[0].getElementsByTagName('li');
    var lunList = document.getElementsByClassName('lunList')[0];
    var lunTabs = document.getElementsByClassName('lunTab')[0].getElementsByTagName('div');

    var num = 0;//记录当前播放的图片索引值
    var timer = null;//计时器变量
    var startX = 0;//开始触摸x点
    var endX = 0;//结束触摸的x点

    //自动循环
    timer = setInterval(run, 1000);
    function run(){
        lunList.style.left = -(10 * num)+'rem';
        for(var i=0;i<lunTabs.length;i++){
            if(i == num){
                lunTabs[num].style.background = 'rgba(255, 3, 9, .5)';
            }else{
                lunTabs[i].style.background = 'rgba(255, 255, 2, .6)';
            }
        }
        num++;
        if(num >= lunLis.length-1){
            num = 0;
        }
    }

    //给圆点循环绑定点击事件
    for(var i=0; i<lunLis.length; i++){
        lunTabs[i].index = i;
        //给元素绑定点击事件
        lunTabs[i].onclick = function(){
            console.log(this.index);
            lunList.style.left = -(10 * this.index)+'rem';
            num = this.index;
            for(var i=0;i<lunTabs.length;i++){
                if(i == num){
                    lunTabs[num].style.background = 'rgba(255, 3, 9, .5)';
                }else{
                    lunTabs[i].style.background = 'rgba(255, 255, 2, .6)';
                }
            }
        };

    }

    //当手指触摸上去时,停止计时器
    lunList.addEventListener('touchstart', function(event){
        startX = event.changedTouches[0].clientX;//开始触摸点
        clearInterval(timer);
    }, false);

    //当手指抬起结束触摸事件时, 重启计时器
    lunList.addEventListener('touchend', function(){
        endX = event.changedTouches[0].clientX;//结束触摸点
        timer = setInterval(run, 1000);
    }, false);

    //当手指左右滑动时, 让图片上一张下一张的进行切换
    lunList.addEventListener('touchmove', function(event){
        endX = event.changedTouches[0].clientX;//结束触摸点
        var distance = endX - startX;
        console.log(distance);
        //判断一下手势是向左滑动还是向右滑动
        if(distance < 0){//为负, 是向左滑动
            lunList.style.left = (distance/320*10)+'rem';
        }
    }, false);




    //淘宝头条
    var touTiaListUl = document.getElementsByClassName('touTiaList')[0].getElementsByTagName('ul')[0];
    var tLis = touTiaListUl.children.length;
    console.log(tLis);
    var tNum = 0;
    var touTimer = setInterval(function(){
        touTiaListUl.style.top = -(42/320*10 * tNum)+'rem';
        tNum++;
        if(tNum > tLis-1){
            tNum = 0;
        }
    }, 1000);


    //淘抢购计时器
    dingShi();
    function dingShi(){
        //先将两个时间转换为可以计算的时间格式
        // var startTime = new Date(document.getElementsByName('startTime')[0].value.replace(/-/g,"/"));
        // var stopTime = new Date(document.getElementsByName('stopTime')[0].value.replace(/-/g,"/"));
        // console.log(startTime);
        // console.log(stopTime-startTime);//求出两个时间之间相差的毫秒数
        var startTime = new Date('2016-09-27 00:00:00'.replace(/-/g,"/"));
        var stopTime = new Date('2016-09-28 12:00:00'.replace(/-/g,"/"));
        console.log(stopTime);
        //获取开始时间值
        var end = stopTime - startTime;//得出的是毫秒数
        console.log(end);
        var dingShiObj = document.getElementsByClassName('dingShi')[0];

        //封装函数计算出,这个毫秒数是多少天多少时多少分多少秒
        //然后使用定时器, 每一秒钟减掉一秒,这样形成倒计时
        setInterval(function(){
            //每隔一秒减一秒
            end = end-1000;
            //减了一秒之后, 重新计算当前所剩的时间

            //1000*60*60*24是一天
            var dayOne = 1000*60*60*24;//一天的毫秒数
            var hourOne = 1000*60*60;//一小时的毫秒数
            var secondOne = 1000*60;//一秒的毫秒数
            var tian = Math.floor(end/dayOne);
            var shi = Math.floor((end-tian*dayOne)/hourOne);
            var fen = Math.floor((end-tian*dayOne-hourOne*shi)/secondOne);
            var miao = Math.floor((end-tian*dayOne-hourOne*shi-secondOne*fen)/1000);
            dingShiObj.innerHTML = '<span>'+tian+' : '+shi+' : '+fen+' : '+miao+'</span>';
        },1000);
    };




    //每日好店轮播
    var goodShopLun = document.getElementsByClassName('goodShopLun')[0];
    var goodShopDian = document.getElementsByClassName('goodShopDian')[0];
    var LunNum = goodShopLun.children.length;
    var dianNum = goodShopDian.children.length;
    console.log(dianNum);
    //自动轮播
    var a=1;
    var zdlb = setInterval(function() {
        if(a == 1){
            goodShopDian.children[0].style.background = '#fff';
            goodShopDian.children[1].style.background = '#f0ad4e';
        }else{
            goodShopDian.children[0].style.background = '#f0ad4e';
            goodShopDian.children[1].style.background = '#fff';
        }
        goodShopLun.style.left = -(10*a)+'rem';
        goodShopLun.style.transition = 'all 2s';
        a++;
        console.log(a);
        if(a >= goodShopDian.children.length){
            a=0;
        }
    }, 3000);

    // for(var i=0; i<dianNum; i++){
    //     goodShopDian.children[i].index = i;
    //     goodShopDian.children[i].onclick = function(){
    //         goodShopDian.children[this.index].style.background = '#f0ad4e';
    //         if(this.index){
    //             goodShopDian.children[this.index].style.background = '#fff';
    //         }
    //         goodShopLun.style.left = -0+'rem';
    //         goodShopLun.style.transition = 'all 2s';
    //     };
    //
    // }
    goodShopDian.children[0].onclick = function(){
        goodShopDian.children[0].style.background = '#f0ad4e';
        goodShopDian.children[1].style.background = '#fff';
        goodShopLun.style.left = -0+'rem';
        goodShopLun.style.transition = 'all 2s';
    };
    goodShopDian.children[1].onclick = function(){
        goodShopDian.children[0].style.background = '#fff';
        goodShopDian.children[1].style.background = '#f0ad4e';
        goodShopLun.style.left = -10+'rem';
        goodShopLun.style.transition = 'all 2s';
    };







}





