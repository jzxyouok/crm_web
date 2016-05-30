<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>选择供应商</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="css/base.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/calendar.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<article>
    <div class="tool_bar">
        <!-- <div class="l_btn" data-icon="&#xe679;"></div> -->
        <h2 class="page_title">选择供应商</h2>
        <!-- <div class="r_btn" data-icon="&#xe6a3;"></div> -->
    </div>

    <!-- 搜索
      <div class="search_module">
          <input type="hidden" id="default_kwd" value="${default}">
          <div class="search_bar">
              <p class="cancle">取消</p>
              <div class="search">
                  <div class="search_btn" data-icon="&#xe65c;"></div>
                  <div class="search_clear" data-icon="&#xe658;"></div>
                  <div class="search_input_bar">
                      <input id="search_input" type="search" placeholder="${default}"/>
                  </div>
              </div>
          </div>
          <div class="search_show">
              ／／未输入状态       <div class="history">
                  <ul class="u_list">
                  </ul>
                  <a class="clear_btn">清空搜索历史</a>
              </div>
              ／／自动匹配状态
              <div class="search_sug">
                  <ul class="u_list">
                      <li class="keyword">输入的文字<span class="import" data-icon="&#xe767;"></span></li>
                  </ul>
              </div>
          </div>
      </div>
       搜索 end -->

    <a  class="btn add_customer" id="add_supplier">新增 <场地布置> 供应商</a>

    <div class="select_ulist_module">
        <h4 class="module_title">选择供应商</h4>
        <ul class="select_ulist" id="supplier_list">
        <?php
        foreach ($supplier as $key => $value) { ?>
            <li class="select_ulist_item select" supplier-id="<?php echo $value['id'];?>" ><?php echo $value['supplier_name'];?></li>
        <?php }?>
        </ul>
    </div>
    <div class="bottom_fixed_bar">
        <div class="r_btn" id="sure">确定</div>
    </div>
</article>
<script src="js/zepto.min.js"></script>
<script src="js/zepto.cookie.js"></script>
<!-- 搜索的交互方案待定 -->
<script src="js/search.js"></script>
<script src="js/common.js"></script>
<script>
  $(function () {
    //选中第一个供应商
    $("#supplier_list li:first").addClass("select_selected");
    //客户选择勾选
    $(".select_ulist li").on("click", function () {
        $(".select_ulist li").removeClass("select_selected");
        $(this).addClass("select_selected");
    });
    //点击确定
    $("#sure").on("click",function(){
      location.href="<?php echo $this->createUrl('design/decorationDetail')?>&type=<?php echo $_GET['type']?>&from=<?php $_GET['from']?>&order_id=<?php echo $_GET['order_id']?>&supplier_name="+$(".select_selected").html()+"&supplier_id="+$(".select_selected").attr("supplier-id");
    });
    //点击新增供应商
    $("#add_supplier").on("click",function(){
      location.href="<?php echo $this->createUrl('design/select_supplier_add')?>&type=<?php echo $_GET['type']?>&from=<?php $_GET['from']?>&order_id=<?php echo $_GET['order_id']?>";
    });
  });
</script>
</body>
</html>