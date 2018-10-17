<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>

<form action="">
    <select name="sel1" id="sel1"></select>
    <select name="sel2" id="sel2"></select>
    <select name="sel3" id="sel3"></select>
</form>

<script>
    var arr = ['北京', '上海', '河北', '河南'];
    var arrList = [
            ['昌平区', '通州区', '朝阳区', '海淀区'], //arr[0]
            ['浦东新区', '会话区', '都好好的'], //arr[1]
            ['天津', '武清区', '观澜新区', '动画'], //arr[2]
            ['郑州', '许昌', '漯河', '安阳', '开封'] //arr[3]
    ];
    //[num][0]昌平区  [0][0][0]代表整个昌平区
    //[0][1]通州区  [0][0][1]代表整个浦东新区1
    //[0][2]朝阳区  [0][0][2]代表整个浦东新区1
    //[1][0]浦东新区  [0][1][0][0]代表整个浦东新区1
    //[1][1]会话区  [0][1][0][0]代表整个浦东新区1
    //[2][0]天津  [0][2][0]代表整个天津1

    var arrListThree = [
            [
                ['昌平区1', '昌平区2', '昌平区3', '昌平区4'], //代表arrList[0][0]
                ['通州区1', '通州区2', '通州区3', '通州区4'], //代表arrList[0][1]
                ['朝阳区1', '朝阳区2', '朝阳区3', '朝阳区4'], //代表arrList[0][2]
                ['海淀区1', '海淀区2', '海淀区3', '海淀区4'], //代表arrList[0][3]

            ],
            [
                ['浦东新区1', '浦东新区2', '浦东新区3'], //代表arrList[1][0]
                ['会话区1', '会话区2', '会话区3'], //代表arrList[1][1]
                ['都好好的1', '都好好的2', '都好好的3'], //代表arrList[1][2]

            ],
            [
                ['天津1', '天津2', '天津3', '天津4'],
                ['武清区1', '武清区2', '武清区3', '武清区4'],
                ['观澜新区1', '观澜新区2', '观澜新区3', '观澜新区4'],
                ['动画1', '动画2', '动画3', '动画4'],
            ],
            [
                ['郑州1', '郑州2', '郑州3', '郑州4', '郑州5'],
                ['许昌1', '许昌2', '许昌3', '许昌4', '许昌5'],
                ['漯河1', '漯河2', '漯河3', '漯河4', '漯河5'],
                ['安阳1', '安阳2', '安阳3', '安阳4', '安阳5'],
                ['开封1', '开封2', '开封3', '开封4', '开封5'],
            ]
    ];
    var sel1 = document.getElementById('sel1');
    var sel2 = document.getElementById('sel2');
    var sel3 = document.getElementById('sel3');

    var selectedNum = 2; //定义初始一级菜单默认选中项
    init(selectedNum);//一级菜单初始化

    //一级菜单点击事件
    sel1.onchange = function(){
        //获取第一级值
        var onenum = this.value;//第一级值
        var twonum = 0; //第二级值
        pin4(onenum, twonum);//一级联动两级
    };

    //二级菜单点击事件
    sel2.onchange = function(){
        var onenum = sel1.value;//第一级值
        var twonum = this.value;//第二级值
        pin3(twonum, onenum);
    };

    //init初始化一级选择菜单
    function init(selectedNum){
        //循环遍历显示一级列表
        for(var i=0; i<arr.length; i++){
            var str = '';
            if(i == selectedNum) {
                str += '<option value="'+i+'" selected>'+arr[i]+'</option>'
            }else{
                str += '<option value="'+i+'">'+arr[i]+'</option>';
            }
            sel1.innerHTML += str;
        }
        var onenum = sel1.value;//第一级值
        var twonum = 0; //第二级值
        pin(onenum);//显示2级
        pin3(twonum, onenum);//遍历显示3级

    }

    //封装的调用二级选择菜单的函数
    function pin(onenum){
        sel2.innerHTML = '';
        //循环遍历显示二级列表
        for(var i=0; i<arrList[onenum].length; i++){
            sel2.innerHTML += '<option value="'+i+'">'+arrList[onenum][i]+'</option>';
        }
    }

    //封装的调用san级选择菜单的函数
    function pin3(twonum, onenum){
        sel3.innerHTML = '';
        //循环遍历显示三级列表
        for(var i=0; i<arrListThree[onenum][twonum].length; i++){
            sel3.innerHTML += '<option value="'+i+'">'+arrListThree[onenum][twonum][i]+'</option>';
        }
    }

    //封装的调用三级选择菜单的函数
    function pin4(onenum, twonum){
        pin(onenum);//显示2级
        pin3(twonum, onenum);//遍历显示3级
    }

    //根据地址value的ID值获取相对应的地址值
    function getAddressName(num1Name, num2Name, num3Name){
        var addres = '';
        //获取一级选中地址
        for(var i=0; i<arr.length; i++){
            if(i == num1Name){
                console.log(arr[num1Name]);
                addres += arr[num1Name] + ', ';
            }
        }
        //获取二级选中地址
        for(var j=0; j<arrList[num1Name].length; j++){
            if(j == num2Name){
                console.log(arrList[num1Name][num2Name]);
                addres += arrList[num1Name][num2Name] + ', ';
            }
        }
        //获取三级选中地址
        for(var k=0; k<arrListThree[num1Name][num2Name].length; k++){
            if(k == num3Name){
                console.log(arrListThree[num1Name][num2Name][num3Name]);
                addres += arrListThree[num1Name][num2Name][num3Name];
            }
        }
        return addres;
    }


</script>

</body>
</html>