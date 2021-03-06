<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link type="text/css" href="/assets/css/x_common.css" rel="stylesheet"/>
<link type="text/css" href="/assets/css/x_index.css" rel="stylesheet"/>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/x_index.js"></script>
<title><?php echo $shop->shopBranchName;?></title>
</head>

<body>
<ul class="x_Ctop" style="border-bottom:1px #000000 solid;">
	<li>
    	<a href="#">
        	<img src="/assets/images/20.png"/>
        </a>
    </li>
    <li>话题讨论</li>
    <li>
    	<a href="#">
        	<img src="/assets/images/21.png"/>
        </a>
    </li>
</ul>
<div class="x_a">
	<a href="#">
  		<img src="<?php echo $shop->shopTopPic1;?>"/>
    </a>
    <ul class="x_b">
    	<li class="x_c"></li>
        <li class="x_d"></li>
        <li class="x_e"></li>
    </ul>
    <div class="x_g">
    	<span class="x_h"><?php echo $shop->shopBranchName;?></span>
        <span class="x_i">关注立减5元</span>
    </div>
   	<p class="x_j">营业时间：<?php echo $shop->shopBusinessHours;?></p>
    <div class="x_k">
    	<span class="x_l"><img src="/assets/images/18.png"/><?php echo $shop->shopCity.$shop->shopArea.$shop->shopDetailAddress;?></span>
        <a href="tel:<?php echo $shop->shopTel;?>" class="x_m">
        	<img src="/assets/images/19.png"/>
        </a>
    </div>
</div>
<ul>
	<?php foreach($activities as $activity):?>
	<li class="x_t">
    	<div style=" border-bottom:1px #eeeeee solid;">
            <a href="/share/activity?shopId=<?php echo $activity->shopInfo->shopId;?>&activityId=<?php echo $activity->activityId;?>" class="x_n">
                <img src="<?php echo $activity->thumbnail1;?>"/>
            </a>
            <a href="/share/activity?shopId=<?php echo $activity->shopInfo->shopId;?>&activityId=<?php echo $activity->activityId;?>" class="x_o"><?php echo $activity->activityName;?></a>
            <div class="x_p">
                <span class="x_q">发起人：<?php echo $activity->shopInfo->shopBranchName;?></span>
                <?php if($activity->activityEndtime!=null):?>
                <span class="x_r">剩<?php echo round((strtotime($activity->activityEndtime)-strtotime(date("Y-m-d")))/3600/24);?>天</span>
            	<?php endif;?>
            </div>
        </div>
        <p class="x_s">
        	<img src="/assets/images/22.png"/>
            5
        </p>
    </li>
	<?php endforeach;?>
    <!-- <li <li class="x_t">
    	<div style=" border-bottom:1px #eeeeee solid;">
            <a href="#" class="x_n">
                <img src="/assets/images/15.png"/>
            </a>
            <a href="#" class="x_o">活动标题活动标题活动标题活动标题活动标题题活动标题活动标题活</a>
            <div class="x_p">
                <span class="x_q">发起人：魔方KTV（柳巷店）</span>
                <span class="x_r">剩3天</span>
            </div>
        </div>
        <p class="x_s">
        	<img src="/assets/images/22.png"/>
            5
        </p>
    </li> -->
</ul>
<div class="x_u">
	<ul class="x_v" id="category_list">
    	<!-- <li class="x_w x_x">店长推荐</li> -->
		<?php foreach($categories as $cat):?>
        <li class="x_w"><?php echo $cat->name;?></li>
    	<?php endforeach;?>
       <!--  <li class="x_w">果汁蔬菜饮料</li>
        <li class="x_w">汤</li>
        <li class="x_w">披萨</li>
        <li class="x_w">意大利面</li>
        <li class="x_w">其他</li> -->
    </ul>
	<?php foreach($categories as $key=>$cat):?>
    <ul class="x_y" style="display:none;" id="food_list<?php echo $key;?>">
    	<?php foreach($cat->goodsList as $good):?>
    	<li class="x_z">
        	<img src="<?php echo $good->pic1;?>" class="x_Aa"/>
            <div class="x_Ab">
            	<p class="x_Ac"><?php echo $good->detailedname;?></p>
                <div class="x_Ad">
                	<span class="x_Ae">￥<?php echo $good->price;?></span>
                    <div class="i_box">
                        <a href="javascript:;" class="J_minus">-</a>
                        <input type="text" value="0" class="J_input" />
                        <a href="javascript:;" class="J_add">+</a>
               		</div>
                </div>
            </div>
        </li>
    	<?php endforeach;?>
    </ul>
    <?php endforeach;?>
</div>
<ul class="x_Ag">
	<?php foreach($blocks as $block):?>
	<li class="x_Ah">
    	<a href="/share/block?id=<?php echo $block->blockId;?>" class="x_Ai"><?php echo $block->customBlockTitle;?></a>
        <p class="x_Aj"><?php echo $block->customBlockContent;?></p>
        <a href="/share/block?id=<?php echo $block->blockId;?>" class="x_Ak">
        	<img src="<?php echo $block->customBlockPic1;?>"/>
        </a>
    </li>
	<?php endforeach;?>
    <!-- <li class="x_Ah">
    	<a href="#" class="x_Ai">秀服装店</a>
        <p class="x_Aj">店铺介绍店铺介绍店铺介绍</p>
        <a href="#" class="x_Ak">
        	<img src="/assets/images/16.png"/>
        </a>
    </li>
    <li class="x_Ah">
    	<a href="#" class="x_Ai">秀服装店</a>
        <p class="x_Aj">店铺介绍店铺介绍店铺介绍</p>
        <a href="#" class="x_Ak">
        	<img src="/assets/images/16.png"/>
        </a>
    </li> -->
</ul>
<!-- <ul class="x_Al">
	<li class="x_Am"><img src="/assets/images/6.png"/></li>
    <li class="x_An">选好了（2）</li>
    <li class="x_Ao">合计：<span>￥0.00</span></li>
</ul> -->
<ul class="x_Ap">
	<li>
    	<a href="#">
        	<img src="/assets/images/8.png" class="x_Aq"/>
            <p class="x_Ar">关注</p>
        </a>
    </li>
    <li>
    	<a href="#">
        	<img src="/assets/images/11.png" class="x_Aq"/>
            <p class="x_Ar x_As">推荐</p>
        </a>
    </li>
    <li>
    	<a href="#">
        	<img src="/assets/images/7.png" class="x_Aq"/>
            <p class="x_Ar x_As">附近</p>
        </a>
    </li>
    <li>
    	<a href="#">
        	<img src="/assets/images/10.png" class="x_Aq"/>
            <p class="x_Ar x_As">搜索</p>
        </a>
    </li>
    <li>
    	<a href="#">
        	<img src="/assets/images/9.png" class="x_Aq"/>
            <p class="x_Ar x_As">管理</p>
        </a>
    </li>
</ul>



<script>
$(document).ready(function(){
  $("#category_list li").click(function(){
    $(".x_w").removeClass("x_x");
    $(this).addClass("x_x");
    $(".x_y").hide();
    $("#food_list"+$(this).index()).show();
  });
    $("#category_list li:first-child").click();
});
$.fn.iVaryVal=function(iSet,CallBack){
	/*
	 * Minus:点击元素--减小
	 * Add:点击元素--增加
	 * Input:表单元素
	 * Min:表单的最小值，非负整数
	 * Max:表单的最大值，正整数
	 */
	iSet=$.extend({Minus:$('.J_minus'),Add:$('.J_add'),Input:$('.J_input'),Min:0,Max:20},iSet);
	var C=null,O=null;
	//插件返回值
	var $CB={};
	//增加
	iSet.Add.each(function(i){
		$(this).click(function(){
			O=parseInt(iSet.Input.eq(i).val());
			(O+1<=iSet.Max) || (iSet.Max==null) ? iSet.Input.eq(i).val(O+1) : iSet.Input.eq(i).val(iSet.Max);
			//输出当前改变后的值
			$CB.val=iSet.Input.eq(i).val();
			$CB.index=i;
			//回调函数
			if (typeof CallBack == 'function') {
                CallBack($CB.val,$CB.index);
            }
		});
	});
	//减少
	iSet.Minus.each(function(i){
		$(this).click(function(){
			O=parseInt(iSet.Input.eq(i).val());
			O-1<iSet.Min ? iSet.Input.eq(i).val(iSet.Min) : iSet.Input.eq(i).val(O-1);
			$CB.val=iSet.Input.eq(i).val();
			$CB.index=i;
			//回调函数
			if (typeof CallBack == 'function') {
				CallBack($CB.val,$CB.index);
		  	}
		});
	});
	//手动
	iSet.Input.bind({
		'click':function(){
			O=parseInt($(this).val());
			$(this).select();
		},
		'keyup':function(e){
			if($(this).val()!=''){
				C=parseInt($(this).val());
				//非负整数判断
				if(/^[1-9]\d*|0$/.test(C)){
					$(this).val(C);
					O=C;
				}else{
					$(this).val(O);
				}
			}
			//键盘控制：上右--加，下左--减
			if(e.keyCode==38 || e.keyCode==39){
				iSet.Add.eq(iSet.Input.index(this)).click();
			}
			if(e.keyCode==37 || e.keyCode==40){
				iSet.Minus.eq(iSet.Input.index(this)).click();
			}
			//输出当前改变后的值
			$CB.val=$(this).val();
			$CB.index=iSet.Input.index(this);
			//回调函数
			if (typeof CallBack == 'function') {
                CallBack($CB.val,$CB.index);
            }
		},
		'blur':function(){
			$(this).trigger('keyup');
			if($(this).val()==''){
				$(this).val(O);
			}
			//判断输入值是否超出最大最小值
			if(iSet.Max){
				if(O>iSet.Max){
					$(this).val(iSet.Max);
				}
			}
			if(O<iSet.Min){
				$(this).val(iSet.Min);
			}
			//输出当前改变后的值
			$CB.val=$(this).val();
			$CB.index=iSet.Input.index(this);
			//回调函数
			if (typeof CallBack == 'function') {
                CallBack($CB.val,$CB.index);
            }
		}
	});
}
//调用
$( function() {
	$('.i_box').iVaryVal({},function(value,index){
		$('.i_tips').html('你点击的表单索引是：'+index+'；改变后的表单值是：'+value);
	});
});
</script>
</body>
</html>