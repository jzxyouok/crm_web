<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>今日经营日报</title>
<meta name="viewport" content="width=640,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/thorn.css">
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<article>
<div class="mian_hs">
	<div class="product_date">
    	<div class="title">
        	<p class="p1"><span>今日经营日报（大郊亭店）</span></p>
            <p class="p2">让销售业绩飞起来</p>
            <!-- <div class="ww">
<pre>
管好产品，管好过程，管好业绩
三步走，销冠的秘诀就是这么容易
从初访到复盘，武装销售全过程
一直在路上的你，用移动CRM轻装上阵吧
</pre>
		</div> -->
        </div>
        <div class="nrt">
            <div class="wz"><p class="name"><span>订单总表</span><span id='order_total'></span></p></div>
        	<div class="rich_media_content " id="js_content">  
                <section style="box-sizing: border-box; background-color: rgb(255, 255, 255);"> 
                    <section class="Powered-by-XIUMI V5" style="position: static; box-sizing: border-box;"> 
                        <section class="" style="margin: 0.5em 0px; position: static; box-sizing: border-box;"> 
                            <section class="" style="border-top-width: 2px; border-top-style: solid; border-color: #fa5e00; padding-top: 3px; box-sizing: border-box;"> 
                                <section class="" style="display: inline-block; vertical-align: top; height: 2em; line-height: 2em; padding: 0px 0.5em; color: rgb(255, 255, 255); box-sizing: border-box; background-color: #fa5e00;"> 
                                    <section style="box-sizing: border-box;">今日进店［ <?php echo $yesterday_open_order ?> ］单</section> 
                                    <section style="box-sizing: border-box;"><br style="box-sizing: border-box;"  /></section>
                                    <section style="box-sizing: border-box;"><br style="box-sizing: border-box;"  /></section> 
                                </section>
                                <section style="width: 0px; display: inline-block; vertical-align: top; border-left-width: 0.8em; border-left-style: solid; border-left-color: #fa5e00; border-top-width: 1em; border-top-style: solid; border-top-color: #fa5e00; border-right-width: 0.8em !important; border-right-style: solid !important; border-right-color: transparent !important; border-bottom-width: 1em !important; border-bottom-style: solid !important; border-bottom-color: transparent !important; box-sizing: border-box;"> </section>
                            </section>
                        </section>
                    </section>

    <?php 
        foreach ($order_open as $key => $value) {
    ?>
                    <section class="" style="position: static; box-sizing: border-box;"> 
                        <section class="" style="display: inline-block; vertical-align: top; width: 80%; box-sizing: border-box; font-size:2rem">
                            <section class="Powered-by-XIUMI V5" style="position: static; box-sizing: border-box;">
                                <section class="" style="margin: 0px; position: static; box-sizing: border-box;"> 
                                    <section class="" style="display: inline-block; float: left; width: 1em; height: 1em; margin: 1.5em 0px -2em -0.5em; border: 1px solid #fa5e00; border-radius: 100%; box-sizing: border-box; background-color: #fa5e00;"></section> 
                                    <section class="" style="border-left-width: 1px; border-left-style: solid; height: 1.2em; border-color: #fa5e00; box-sizing: border-box;"></section>
                                    <section class="" style="border-left-width: 1px; border-left-style: solid; border-color: #fa5e00; box-sizing: border-box;">
                                        <section class="" style="padding: 0px 0px 10px 15px; box-sizing: border-box;">
                                            <section class="Powered-by-XIUMI V5" style="box-sizing: border-box;">
                                                <section class="" style="position: static; box-sizing: border-box;"> 
                                                    <section class="" style="box-sizing: border-box;">
                                                        <section style="box-sizing: border-box;"><?php echo  $value['date']. ' (' .$value['type']. ') ｜ 开单人：' .$value['name'] ?> </section>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
<?php        
        };
?>  

                    <section class="Powered-by-XIUMI V5" style="box-sizing: border-box;">
                        <section class="" style="position: static; box-sizing: border-box;"> 
                            <section class="" style="box-sizing: border-box;">
                                <section style="box-sizing: border-box;"><br style="box-sizing: border-box;"  /></section>
                            </section>
                        </section>
                    </section>
                    <section class="Powered-by-XIUMI V5" style="position: static; box-sizing: border-box;">
                        <section class="" style="margin: 0.5em 0px; position: static; box-sizing: border-box;">
                            <section class="" style="border-top-width: 2px; border-top-style: solid; border-color: #fa5e00; padding-top: 3px; box-sizing: border-box;">
                                <section class="" style="display: inline-block; vertical-align: top; height: 2em; line-height: 2em; padding: 0px 0.5em; color: rgb(255, 255, 255); box-sizing: border-box; background-color: #fa5e00;">
                                    <section style="box-sizing: border-box;">已签订单｜婚礼［<?php echo $wedding_num. '］场／会议［ ' .$meeting_num ?>］场</section>
                                </section>
                                <section style="width: 0px; display: inline-block; vertical-align: top; border-left-width: 0.8em; border-left-style: solid; border-left-color: #fa5e00; border-top-width: 1em; border-top-style: solid; border-top-color: #fa5e00; border-right-width: 0.8em !important; border-right-style: solid !important; border-right-color: transparent !important; border-bottom-width: 1em !important; border-bottom-style: solid !important; border-bottom-color: transparent !important; box-sizing: border-box;"></section>
                            </section>
                        </section>
                    </section>

<?php 
    foreach ($order_all as $key => $value) {
?>
        
                    <section class="Powered-by-XIUMI V5" style="position: static; box-sizing: border-box;font-size:1.6rem;">
                        <section class="" style="margin: 0px; position: static; box-sizing: border-box;">
                            <section class="" style="display: inline-block; vertical-align: top; width: 80%; box-sizing: border-box;">
                                <section style="border-right-width: 1px; border-right-style: solid; border-color: #fa5e00; height: 1.2em; box-sizing: border-box;"></section>
                                <section style="display: inline-block; float: right; width: 1em; height: 1em; margin: 0px -0.5em -2em 0px; border: 1px solid #fa5e00; border-radius: 100%; box-sizing: border-box; background-color: #fa5e00;"></section>
                                <section style="border-right-width: 1px; border-right-style: solid; border-color: #fa5e00; box-sizing: border-box;">
                                    <section class="" style="padding: 0px 20px 10px 0px; box-sizing: border-box;">
                                        <section class="Powered-by-XIUMI V5" style="box-sizing: border-box;">
                                            <section class="" style="position: static; box-sizing: border-box;">
                                                <section class="" style="text-align: right; font-size: 12px; box-sizing: border-box; font-size:1.6rem;">
<?php 
        if($value['type'] == "会议"){
?>
                                                    <section style="box-sizing: border-box;">统筹师：<?php echo $value["planner_name"]. '|（推单：'.$value["tuidan_name"].') '.$value["type"]?> </section>
<?php
        }else {
?>                        
                                                    <section style="box-sizing: border-box;">策划师：<?php echo $value["designer_name"]. '|（推单：'.$value["tuidan_name"].') '.$value["type"]?> </section>
<?php
        }
?>
                                                </section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <section class="" style="display: inline-block; vertical-align: top; width: 18%; box-sizing: border-box;">
                                <span style="display: inline-block; margin-top: 1.2em; margin-left: 1em; font-size: 14px; box-sizing: border-box;" class="">
                                    <section style="box-sizing: border-box; font-size:1.6rem;"><?php echo $value["date"]?></section>
                                </span> 
                            </section>
                        </section>
                    </section>
<?php
    };
?>
        
            <div class="itme">
                <div class="wz"><p class="name"><span>进店走势</span><span id='open_trends'></span></p></div>
                <div class="chart_bar" id="chart" style='width:640px;height:320px;'></div>
            </div>

            <!-- <div class="itme">
                <div class="wz"><p class="name"><span>已签订单</span><span id='order_sure'></span></p>
                </div>
                
            	<div class="tu chart_bar" id="order_sure" style='width:640px;height:600px;' ></div>
            </div> -->
            
            <div class="itme">
                <div class="wz"><p class="name"><span>销售额</span></p></div>
                <div style='display:inline-block;width:640;' >
                    <div style='display:inline-block;width:200px;float:left'>
                        <ul class="sales_detail_ul">
                            <li>
                                <span class='circle circle_color1' style="background-color:#FE8463"></span><p class="sales_detail_name">目标</p>
                                <p class="sales_detail_num"><?php echo $sales['target'];?>万元</p>
                            </li>
                            <li>
                                <span class='circle circle_color2' style="background-color:#9BCA63"></span><p class="sales_detail_name">预测</p>
                                <p class="sales_detail_num"><?php echo $sales['forecast'];?>万元</p>
                            </li>
                            <li>
                                <span class='circle circle_color3' style="background-color:#FAD860"></span><p class="sales_detail_name">成交</p>
                                <p class="sales_detail_num"><?php echo $sales['deal'];?>万元</p>
                            </li>
                            <li>
                                <span class='circle circle_color4' style="background-color:#60C0DD"></span><p class="sales_detail_name">回款</p>
                                <p class="sales_detail_num"><?php echo $sales['payment'];?>万元</p>
                            </li>
                        </ul>
                    </div>
                    <div style='display:inline-block;width:300px;'>
                        <div style='display:inline-block;width:430px;height:400px;' id='sales'></div>
                    </div>
                </div>
            </div>            
        </div>
    </div>



</div>


<div class="bottom_hs">
	<!-- <div class="tu"><img src="css/img/ewm.jpg" /></div> -->
    <div class="wz">©北京浩瀚一方互联网科技有限责任公司</div>
</div>
</article>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/zepto.min.js"></script>
<script src="js/charts/echarts.min.js"></script>

<!-- <script type="text/javascript" src="js/thorn.js"></script> -->
<script src="js/common.js"></script>
<script>
$(function(){
        /*******************************************
            画图表横坐标，周、日等
            传入type：0（周报），1（月报），2（季报），3（年报），以及后台提供的json
        ********************************************/   
        function draw_xAxis(type){
            var xAxis_data = new Array();

            var tempdate = new Date();
            var month = tempdate.getMonth()+1;
            var year = tempdate.getFullYear();

            switch(type){
                case '0'://周报
                    xAxis_data = ['周一','周二','周三','周四','周五','周六','周日'];
                    break;
                case '1'://月报
                    if(month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12 ){
                        xAxis_data = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
                    }else if(month == 4 || month == 6 || month == 9 || month == 11 ){
                        xAxis_data = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
                    }else if(month == 2 && year%4 == 0){
                        xAxis_data = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29'];
                    }else{
                        xAxis_data = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28'];
                    }
                    break;
                case '2'://季报
                    if(month == 1 || month == 2 || month == 3){
                        xAxis_data = ['1月','2月','3月'];                   
                    }else if(month == 4 || month == 5 || month == 6){
                        xAxis_data = ['4月','5月','6月'];
                    }else if(month == 7 || month == 8 || month == 9){
                        xAxis_data = ['7月','8月','9月'];
                    }else {
                        xAxis_data = ['10月','11月','12月'];
                    }
                    break;
                case '3'://年报
                    xAxis_data = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
                    break;
            }
            return xAxis_data;
        }

        /*******************************************
        画第一个折线图
        后台发起请求，数据渲染界面
        传入报表1类型type：'0'（周报），'1'（月报），'2'（季报），'3'（年报）
                  分店的ID
        ********************************************/   
        function draw_mychart1(type,hotel_id){
            //获取某个主题酒店的开单信息
            var temp_right_date=new Date();
           
            var temp_stamp =  Date.parse(temp_right_date) / 1000;
           $.getJSON('<?php echo $this->createUrl("report/info");?>',{hotel_id: 1,chart1_type:'1' ,show_date:temp_stamp,show_day:0
           },function(retval){
           // alert(retval);
               var ret = JSON.stringify(retval);
              // console.log(ret);
               if(retval.success){
                //retval格式，wedding{every_num:[],totle_num,rate,rate_type},meeting{every_num:[],totle_num,rate,rate_type}
                   console.log(ret);

                    //横坐标显示内容

                    var myChart2 = echarts.init(document.getElementById('chart')); 
                    var option = {
                        grid : {  
                            x : 40,
                            y : 40,
                            x2: 40,
                            y2: 40
                        },
                        legend: {
                            data:['婚礼','会议'],
                            x: 'right'
                        },
                        xAxis : [
                            {
                                type : 'category',
                                boundaryGap : false,
                                data : xAxis_data
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value',
                            }
                        ],
                        series : [
                            {
                                name:'婚礼',
                                type:'line',
                                data:retval.wedding.every_num,
                            },
                            {
                                name:'会议',
                                type:'line',
                                data:retval.meeting.every_num,
                            }
                        ]
                    };
                    // 为echarts对象加载数据 
                    myChart2.setOption(option);               
              // }else{
              //   alert('太累了，歇一歇，一秒后再试试！');
              //   return false;
               }
             });
        };


        /********************************************************************************************
        已签订单
        ********************************************************************************************/

        var xAxis_data = draw_xAxis('1');
        draw_mychart1('1',1);



        var wedding = new Array();
        var i = 11;
        <?php foreach ($order_sure['wedding'] as $key => $value) {?>
            wedding[i] = <?php echo $value;?>;
            i--;
        <?php }?>

        var meeting = new Array();
        var j = 11;
        <?php foreach ($order_sure['meeting'] as $key => $value) {?>
            meeting[j] = <?php echo $value;?>;
            j--;
        <?php }?>
        console.log(meeting);
        console.log(wedding);

        /*draw_mychart_ordersure();*/
        

        function draw_mychart_ordersure(){
            var myChart_ordersure = echarts.init(document.getElementById('order_sure')); 
            var option = {
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                        type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                    }
                },
                grid : {  
                            x : 40,
                            y : 40,
                            x2: 40,
                            y2: 40
                },
                legend: {
                    data:['婚礼', '会议']
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'value'
                    }
                ],
                yAxis : [
                    {
                        type : 'category',
                        data : ['12月','11月','10月','9月','8月','7月','6月','5月','4月','3月','2月','1月']
                    }
                ],
                series : [
                    {
                        name:'婚礼',
                        type:'bar',
                        stack: '总量',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data: wedding
                    },
                    {
                        name:'会议',
                        type:'bar',
                        stack: '总量',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:meeting
                    }
                ]
            };
            // 为echarts对象加载数据 
            myChart_ordersure.setOption(option);
        }

        /********************************************************************************************
        画图3，销售额图
        ********************************************************************************************/
        //数据处理
        var target = <?php echo $sales['target'];?>;      //目标
        var forecast = <?php echo $sales['forecast'];?>;  //预测
        var deal = <?php echo $sales['deal'];?>;          //成交
        var payment = <?php echo $sales['payment'];?>;    //回款

        var sales_data = new Array();
        sales_data[0]=target, sales_data[1] = forecast, sales_data[2] = deal, sales_data[3] = payment;
        draw_mychart_sales();

        function draw_mychart_sales(){
            var myChart_sales = echarts.init(document.getElementById('sales')); 
            var option = {
                tooltip: {
                    trigger: 'item'
                },
                grid : {         borderWidth: 0,
                    x:0,
                    x2:0,
        y: 0,
        y2: 0 
                     
                },
                xAxis: [
                    {
                        type: 'category',
                        show: false,
                        data: ['目标', '预测', '成交', '回款']
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        show: false
                    }
                ],
                series: [
                    {
                        name: 'ECharts例子个数统计',
                        type: 'bar',
                        itemStyle: {
                            normal: {
                                color: function(params) {
                                    // build a color map as your need.
                                    // var colorList = [
                                    //   '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                                    //    '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                                    //    '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                                    // ];
                                    var colorList = ['#FE8463','#9BCA63','#FAD860','#60C0DD']
                                    return colorList[params.dataIndex]
                                },
                                label: {
                                    show: true,
                                    position: 'top',
                                    formatter: '{b}\n{c}'
                                },
                                barBorderRadius :[5, 5, 0, 0]
                            }
                        },
                        data: sales_data
                    }
                ]
            };
        // 为echarts对象加载数据 
        myChart_sales.setOption(option);

        }

        //月份（进店走势）、年份（已签订单）
        var mydate = new Date();
        var year = mydate.getFullYear(); 
        var month = mydate.getMonth(); 
        $("#open_trends").html("["+month+"月]");
        $("#order_total").html("["+year+"]");

});
</script>
</body>
</html>

<script src="js/zepto.min.js"></script>
<script src="js/charts/echarts.min.js"></script>
<!-- <script src="js/charts/line.js"></script> -->
<script src="js/common.js"></script>
<script>
$(function(){

    });
</script>