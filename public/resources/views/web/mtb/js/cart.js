/**
 * Created by mac on 2016/12/2.
 */

//返回上一页
var back = document.getElementsByClassName('back')[0];






//全选/全不选
var shop1 = document.getElementsByClassName('ddlbTopLabel');
for(var i=0; i<shop1.length; i++){
    shop1[i].index = i;
    shop1[i].addEventListener('click', function(event){
        var isChecked = this.parentNode.firstElementChild.checked;
        //获取下面所有子项目
        var ols = this.parentNode.parentNode.nextSibling.nextSibling;//获取子列表
        var ckLabel = ols.getElementsByClassName('ckLabel');

        if(!isChecked){
            // shop1[this.index].style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            // shop1[this.index].style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            this.style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            //全选 下面的子项列表全部选中
            for(var j=0; j<ckLabel.length; j++){
                // ckLabel[j].style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
                ckLabel[j].style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
                ckLabel[j].parentNode.firstElementChild.checked = true;
            }
        }else{
            // shop1[this.index].style = "background:#fff;";
            this.style = "background:#fff;";
            //全不选
            for(var j=0; j<ckLabel.length; j++){
                ckLabel[j].style = "background:#fff";
                ckLabel[j].parentNode.firstElementChild.checked = false;
            }
        }
    });
}

//ckLabels子列表单点选中/取消
var ckLabels = document.getElementsByClassName('ckLabel');
for(var i=0; i<ckLabels.length; i++){
    ckLabels[i].index = i;
    ckLabels[i].addEventListener('click', function(event){
        var isChecked = this.parentNode.firstElementChild.checked;
        if(!isChecked){
            // ckLabels[this.index].style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            ckLabels[this.index].style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
        }else{
            ckLabels[this.index].style = "background:#fff;";
        }
    });
}


//全选按钮
var jiesuanLabel = document.getElementsByClassName('jiesuanLabel')[0];
jiesuanLabel.addEventListener('click', function(){
    console.log('sssssss');
    var ckLabel = document.getElementsByClassName('ckLabel');
    var isChecked = this.parentNode.firstElementChild.checked;
    if(!isChecked){
        // this.style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
        this.style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
        //全选所有店铺 下面的子项列表全部选中
        for(var j=0; j<ckLabel.length; j++){
            // ckLabel[j].style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            ckLabel[j].style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            ckLabel[j].parentNode.firstElementChild.checked = true;
        }
        for(var i=0; i<shop1.length; i++){
            // shop1[i].style = "background:url('./img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            shop1[i].style = "background:url('http://jierui303.com/resources/views/web/mtb/img/check.png') no-repeat 0 0;background-size: 0.625rem;";
            shop1[i].parentNode.firstElementChild.checked = true;
        }
    }else{
        this.style = "background:#fff;";
        //全不选
        for(var j=0; j<ckLabel.length; j++){
            ckLabel[j].style = "background:#fff;";
            ckLabel[j].parentNode.firstElementChild.checked = false;
        }
        for(var i=0; i<shop1.length; i++){
            shop1[i].style = "background:#fff;";
            shop1[i].parentNode.firstElementChild.checked = false;
        }
    }

});





//编辑
// var bianji = document.getElementsByClassName('bianji')[0];
// var olObj = bianji.parentNode.parentNode.nextSibling.nextSibling;
// console.log(olObj);
// var shuliang = olObj.getElementsByClassName('shuliang');//数量编辑框
// var shangpin = olObj.getElementsByClassName('shangpin');//商品标题框
// var isEdit = false;

var bianji = document.getElementsByClassName('bianji');
var isEdit = false;
console.log(bianji.length);
for(var j=0; j<bianji.length; j++){
    bianji[j].index = j;
    bianji[j].onclick = function(){
        // console.log(this.index+'kkkkkkk');
        // var olObj = bianji[this.index].parentNode.parentNode.nextSibling.nextSibling;
        var olObj = this.parentNode.parentNode.nextSibling.nextSibling;
        // console.log(bianji[this.index].parentNode);
        console.log(olObj);
        var shuliang = olObj.getElementsByClassName('shuliang');//数量编辑框
        var shangpin = olObj.getElementsByClassName('shangpin');//商品标题框
        if(!isEdit){
            //为真,点击
            if(this.innerHTML == '完成'){
                this.innerHTML = '编辑';
                for(var i=0; i<shangpin.length; i++){
                    shangpin[i].style.display = 'block';
                    shuliang[i].style.display = 'none';
                }
            }else if(this.innerHTML == '编辑'){
                this.innerHTML = '完成';
                for(var i=0; i<shangpin.length; i++){
                    shangpin[i].style.display = 'none';
                    shuliang[i].style.display = 'block';
                }
            }
            isEdit = true;
        }else{
            //为假,取消
            if(this.innerHTML == '完成'){
                this.innerHTML = '编辑';
                for(var i=0; i<shangpin.length; i++){
                    shangpin[i].style.display = 'block';
                    shuliang[i].style.display = 'none';
                }
            }else if(this.innerHTML == '编辑'){
                this.innerHTML = '完成';
                for(var i=0; i<shangpin.length; i++){
                    shangpin[i].style.display = 'none';
                    shuliang[i].style.display = 'block';
                }
            }
            isEdit = false;
        }

    };

}

// bianji.addEventListener('click', function(){
//     if(!isEdit){
//         this.innerHTML = '完成';
//         for(var i=0; i<shangpin.length; i++){
//             shangpin[i].style.display = 'none';
//             shuliang[i].style.display = 'block';
//         }
//         // shangpin[0].style.display = 'none';
//         // shuliang[0].style.display = 'block';
//         isEdit = true;
//     }else{
//         this.innerHTML = '编辑';
//         for(var i=0; i<shangpin.length; i++){
//             shangpin[i].style.display = 'block';
//             shuliang[i].style.display = 'none';
//         }
//         // shangpin[0].style.display = 'block';
//         // shuliang[0].style.display = 'none';
//         isEdit = false;
//     }
//
// });



//数量+-
var shuliangs = document.getElementsByClassName('shuliang');

//数量+
for(var i=0; i<shuliangs.length; i++){

    //加减算法
    var jian = shuliangs[i].getElementsByClassName('jian');
    var jia = shuliangs[i].getElementsByClassName('jia');
    for(var j=0; j<jia.length; j++){
        //点击加号
        jia[j].addEventListener('click', function(){
            //获取到当前那个值
            var numValue = parseInt(this.previousSibling.innerHTML);
            // console.log(typeof numValue);
            numValue = numValue + 1;
            if(numValue >= 10){
                numValue = 10;
            }
            this.previousSibling.innerHTML = numValue;
        });
        //点击减号
        jian[j].addEventListener('click', function(){
            //获取到当前那个值
            var numValue = parseInt(this.nextSibling.innerHTML);
            // console.log(typeof numValue);
            numValue = numValue - 1;
            if(numValue <= 0){
                numValue = 1;
            }
            this.nextSibling.innerHTML = numValue;
        });
    }
}


var deleteEle = document.getElementsByClassName('deleteEle');

//点击删除
for(var j=0; j<deleteEle.length; j++){
    deleteEle[j].index = j;
    deleteEle[j].addEventListener('click', function(){
        //执行假删除该元素 thisObj是ol, thisEle代表当前元素
        var thisWliEle = this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;//最外层的店铺li
        var thisObj = this.parentNode.parentNode.parentNode.parentNode.parentNode;
        var thisEle = this.parentNode.parentNode.parentNode.parentNode;
        // console.log(thisWliEle);
        thisObj.removeChild(thisEle);

        //当一个店铺没有数据时, 可以删除该店铺所占位置了
        var shopNLiObj = thisObj.getElementsByClassName('shopLi');
        // console.log(shopNLiObj.length);
        if(shopNLiObj.length == 0){
            var wUlObj = thisObj.parentNode.parentNode;
            // console.log(wUlObj);
            //要删除的是哪个子列表等于0的外层元素li
            wUlObj.removeChild(thisWliEle);//删除最外层的li店铺元素
        }

    });
}



