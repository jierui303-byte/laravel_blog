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
