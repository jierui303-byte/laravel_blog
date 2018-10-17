/**
 * Created by mac on 2016/12/4.
 */
//宝贝详情页的轮播图 与首页一样
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




//满就送
var mjs = document.getElementsByClassName('mjs')[0];
var tanceng = document.getElementsByClassName('tanceng')[0];//弹层
var zz = document.getElementsByClassName('zz')[0];//遮罩元素
var queren = document.getElementsByClassName('queren')[0];//确认按钮
mjs.addEventListener('click', function(){
    //获取当前文档的高度
    zz.style.display = 'block';
    tanceng.style.display = 'block';
});
zz.addEventListener('click', function(){
    //获取当前文档的高度
    zz.style.display = 'none';
    tanceng.style.display = 'none';
});
queren.addEventListener('click', function(){
    //获取当前文档的高度
    zz.style.display = 'none';
    tanceng.style.display = 'none';
});
zz.addEventListener('touchstart', function(){
    //获取当前文档的高度
    zz.style.display = 'none';
    tanceng.style.display = 'none';
});






//tab切换页
var bbTabList = document.getElementsByClassName('bbTabList')[0];
var bbTabListLis = bbTabList.children;
// console.log(bbTabListLis);
for(var i=0; i<bbTabListLis.length; i++){
    bbTabListLis[i].index = i;
    bbTabListLis[i].addEventListener('click', function(){
        var bbTabListContentTab = document.getElementsByClassName('bbTabListContentTab')[0];
        var ggys = bbTabListContentTab.getElementsByClassName('ggys');
        console.log(ggys);

        //过渡平移切换, 但因每个tab页的高度不同, 所以这个特效不适合
        // bbTabListContentTab.style.left = -10*(this.index)+'rem';
        // bbTabListContentTab.style.transition = 'all 1s';
        //
        // for(var j=0; j<ggys.length; j++){
        //     if(j == this.index){
        //         bbTabListLis[this.index].style.borderBottom = '0.03125rem solid #ff5000';
        //         bbTabListLis[this.index].style.transition = 'all 1s';
        //     }else{
        //         bbTabListLis[j].style.borderBottom = 'none';
        //     }
        // }
        // bbTabListLis[this.index].style.borderBottom = '0.03125rem solid #ff5000';


        //判断点击元素的索引值
        for(var j=0; j<ggys.length; j++){
            if(j == this.index){
                ggys[this.index].style.display = 'block';
                bbTabListLis[this.index].style.color = '#ff5000';
                bbTabListLis[this.index].style.borderBottom = '0.03125rem solid #ff5000';
            }else{
                ggys[j].style.display = 'none';
                bbTabListLis[j].style.color = '#000';
                bbTabListLis[j].style.borderBottom = 'none';
            }
        }
    }, false);
}


