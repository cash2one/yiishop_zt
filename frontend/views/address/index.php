<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>收货地址</title>
	<link rel="stylesheet" href="/style/base.css" type="text/css">
	<link rel="stylesheet" href="/style/global.css" type="text/css">
	<link rel="stylesheet" href="/style/header.css" type="text/css">
	<link rel="stylesheet" href="/style/home.css" type="text/css">
	<link rel="stylesheet" href="/style/address.css" type="text/css">
	<link rel="stylesheet" href="/style/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="/style/footer.css" type="text/css">
    <script type="text/javascript" src="/jsAddress.js"></script>
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/js/header.js"></script>
	<script type="text/javascript" src="/js/home.js"></script>
</head>
<body>

        <?php require "/header.php" ?>

	
	<div style="clear:both;"></div>

	<!-- 头部 start -->
	<div class="header w1210 bc mt15">
		<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
		<div class="logo w1210">
			<h1 class="fl"><a href="index.html"></img src="images/logo.png" alt="京西商城"></a></h1>
			<!-- 头部搜索 start -->
			<div class="search fl">
				<div class="search_form">
					<div class="form_left fl"></div>
					<form action="" name="serarch" method="get" class="fl">
						<input type="text" class="txt" value="请输入商品关键字" /><input type="submit" class="btn" value="搜索" />
					</form>
					<div class="form_right fl"></div>
				</div>
				
				<div style="clear:both;"></div>

				<div class="hot_search">
					<strong>热门搜索:</strong>
					<a href="">D-Link无线路由</a>
					<a href="">休闲男鞋</a>
					<a href="">TCL空调</a>
					<a href="">耐克篮球鞋</a>
				</div>
			</div>
			<!-- 头部搜索 end -->

			<!-- 用户中心 start-->
		<!--	<div class="user fl">
				<dl>
					<dt>
						<em></em>
						<a href="">用户中心</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							您好，请<a href="">登录</a>
						</div>
						<div class="uclist mt10">
							<ul class="list1 fl">
								<li><a href="">用户信息></a></li>
								<li><a href="">我的订单></a></li>
								<li><a href="">收货地址></a></li>
								<li><a href="">我的收藏></a></li>
							</ul>

							<ul class="fl">
								<li><a href="">我的留言></a></li>
								<li><a href="">我的红包></a></li>
								<li><a href="">我的评论></a></li>
								<li><a href="">资金管理></a></li>
							</ul>

						</div>
						<div style="clear:both;"></div>
						<div class="viewlist mt10">
							<h3>最近浏览的商品：</h3>
							<ul>
								<li><a href=""><img src="/images/view_list1.jpg" alt="" /></a></li>
								<li><a href=""><img src="/images/view_list2.jpg" alt="" /></a></li>
								<li><a href=""><img src="/images/view_list3.jpg" alt="" /></a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<!-- 用户中心 end-->
        <?php require "/body.php" ?>
			<!-- 购物车 start -->
			<!--<div class="cart fl">
				<dl>
					<dt>
						<a href="">去购物车结算</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							购物车中还没有商品，赶紧选购吧！
						</div>
					</dd>
				</dl>
			</div>-->
			<!-- 购物车 end -->
		</div>
		<!-- 头部上半部分 end -->
		
		<div style="clear:both;"></div>

		<!-- 导航条部分 start -->
		<div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl cat1"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
                <div class="cat_bd">


                    <?=
                    //收索要解决
                    \backend\models\GoodsCategory::getCategory();
                    ?>



                </div>

			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="">首页</a></li>
					<li><a href="">电脑频道</a></li>
					<li><a href="">家用电器</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="">积分商城</a></li>
					<li><a href="">夺宝奇兵</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div>
		<!-- 导航条部分 end -->
	</div>
	<!-- 头部 end-->
	
	<div style="clear:both;"></div>

	<!-- 页面主体 start -->
	<div class="main w1210 bc mt10">
		<div class="crumb w1210">
			<!--<h2><strong>我的XX </strong><span>> 我的订单</span></h2>-->
		</div>
		
		<!-- 左侧导航菜单 start -->
		<div class="menu fl">
			<h3>我的XX</h3>
			<div class="menu_wrap">
				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">我的订单</a></dd>
					<dd><b>.</b><a href="">我的关注</a></dd>
					<dd><b>.</b><a href="">浏览历史</a></dd>
					<dd><b>.</b><a href="">我的团购</a></dd>
				</dl>

				<dl>
					<dt>账户中心 <b></b></dt>
					<dd class="cur"><b>.</b><a href="">账户信息</a></dd>
					<dd><b>.</b><a href="">账户余额</a></dd>
					<dd><b>.</b><a href="">消费记录</a></dd>
					<dd><b>.</b><a href="">我的积分</a></dd>
					<dd><b>.</b><a href="">收货地址</a></dd>
				</dl>

				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">返修/退换货</a></dd>
					<dd><b>.</b><a href="">取消订单记录</a></dd>
					<dd><b>.</b><a href="">我的投诉</a></dd>
				</dl>
			</div>
		</div>
		<!-- 左侧导航菜单 end -->

		<!-- 右侧内容区域 start -->
		<div class="content fl ml10" id="edit" url="<?=\yii\helpers\Url::to(["address/edit"])?>">
			<div class="address_hd" id="div" url="<?=\yii\helpers\Url::to(["address/add"])?>">
				<h3 id="h3" url="<?=\yii\helpers\Url::to(["address/delete"])?>">收货地址薄</h3>
                <?php foreach ($rows as $row){?>
				<dl class="dl">
					<dt>
                        <?=$row->username?> <?=$row->cmbProvince?> <?=$row->cmbCity?>
                        <?=$row->cmbArea?> <?=$row->address?> <?=$row->phone?> </dt>
					<dd id="<?=$row->id?>">
						<a href="javascript:;">修改</a>
						<a href="javascript:;" class="delete">删除</a>
						<a href="javascript:;"><?=$row->status?'':'设为默认地址'?></a>
					</dd>
				</dl>
                <?php };?>



			</div>

			<div class="address_bd mt10" id="update" url="<?=\yii\helpers\Url::to(["address/update"])?>">
				<h4>新增收货地址</h4>
				<form action="#" method="post" id="form">
						<ul>
							<li>
								<label for=""><span>*</span>收 货 人：</label>
                                <input type="hidden" name="" value="" id="hid">
								<input type="text" name="username" class="txt" id="username"/>
							</li>
							<li>
								<label for=""><span>*</span>所在地区：</label>
                                <select id="cmbProvince" name="cmbProvince"></select>
                                <select id="cmbCity" name="cmbCity"></select>
                                <select id="cmbArea" name="cmbArea"></select>
                            </li>
							<li>
								<label for=""><span>*</span>详细地址：</label>
								<input type="text" name="address" class="txt address" id="address"/>
							</li>
							<li>
								<label for=""><span>*</span>手机号码：</label>
								<input type="text" name="phone" class="txt" id="phone"/>
							</li>
							<li>
								<label for=""></label>
								<input type="checkbox" name="status" value="1" id="status" class="check" />设为默认地址
							</li>
							<li>
								<label for="">&nbsp;</label>
                            <button type="button" id="add">确认添加</button>
							</li>
						</ul>
					</form>
			</div>	

		</div>
		<!-- 右侧内容区域 end -->
	</div>
	<!-- 页面主体 end-->

	<div style="clear:both;"></div>

	<!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt10">
		<div class="bnav1">
			<h3><b></b> <em>购物指南</em></h3>
			<ul>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">团购/机票/充值/点卡</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
		</div>
		
		<div class="bnav2">
			<h3><b></b> <em>配送方式</em></h3>
			<ul>
				<li><a href="">上门自提</a></li>
				<li><a href="">快速运输</a></li>
				<li><a href="">特快专递（EMS）</a></li>
				<li><a href="">如何送礼</a></li>
				<li><a href="">海外购物</a></li>
			</ul>
		</div>

		
		<div class="bnav3">
			<h3><b></b> <em>支付方式</em></h3>
			<ul>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
		</div>

		<div class="bnav4">
			<h3><b></b> <em>售后服务</em></h3>
			<ul>
				<li><a href="">退换货政策</a></li>
				<li><a href="">退换货流程</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">退款申请</a></li>
			</ul>
		</div>

		<div class="bnav5">
			<h3><b></b> <em>特色服务</em></h3>
			<ul>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">家电下乡</a></li>
				<li><a href="">京东礼品卡</a></li>
				<li><a href="">能效补贴</a></li>
			</ul>
		</div>
	</div>
	<!-- 底部导航 end -->

	<div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于我们</a> |
			<a href="">联系我们</a> |
			<a href="">人才招聘</a> |
			<a href="">商家入驻</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">京西论坛</a>
		</p>
		<p class="copyright">
			 © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
		</p>
		<p class="auth">
			<a href=""><img src="/images/xin.png" alt="" /></a>
			<a href=""><img src="/images/kexin.jpg" alt="" /></a>
			<a href=""><img src="/images/police.jpg" alt="" /></a>
			<a href=""><img src="/images/beian.gif" alt="" /></a>
		</p>
	</div>
        <?php $url=\yii\helpers\Url::to(["address/add"])?>
	<!-- 底部版权 end -->
        <script type="text/javascript">
            addressInit('cmbProvince', 'cmbCity', 'cmbArea');
        </script>

        <script type="text/javascript">
            //绑定表单提交时间

            $(function () {
                //获取添加的地址
                var provice="";
                var city="";
                var area="";
                //添加数据
                $("#add").click(function() {
                    //当提交修改时,改边提交按钮的名字
                    $("#add").html("确认添加");

                    var url=$("#div").attr("url");
                    var data=$("form").serialize();
                    var id=$("#hid").val();
                    //定义一个变量.拼接字符串
                    var str='';
                    var status='';
                    //发送ajax请求
                    $.getJSON(url,data,function (row) {
                        if (id){
                            if (row.status==1){
                                str="";
                            } else{
                                str="设置为默认地址";
                            }
                            status+= '<dt>';
                            status+='&emsp;'+row.username+'&emsp;'+row.cmbProvince+'&emsp;'+row.cmbCity+'&emsp;';
                            status+=row.cmbArea+'&emsp; '+row.address+'&emsp; '+row.phone+'</dt>';
                            status+='<dd id="'+row.id+'">';
                            status+=  '<a href="javascript:;">修改</a>&emsp;';
                            status+='<a href="javascript:;" class="delete">删除</a>&emsp;';
                            status+='<a href="javascript:;">'+str+'</a>';
                            status+= '</dd>';
                            $("#"+row.id).closest("dl").html(status);
                            //添加完之后清除输入框的值
                            $("#username").val("");
                        /*    $("#cmbProvince").prop("selected",false);
                            $("#cmbCity").prop("selected",false);
                            $("#cmbArea").prop("selected",false);*/
                            $("#address").val("");
                            $("#phone").val("");
                            $("#hid").prop("name","");
                            $("#hid").prop("value","");
                            $("#status").prop("checked",false);

                        }  else {
                            if (row.status==1){
                                str="";
                            } else{
                                str="设置为默认地址";
                            }

                            status+='<dl class="dl">';
                            status+= '<dt>';
                            status+='&emsp;'+row.username+'&emsp;'+row.cmbProvince+'&emsp;'+row.cmbCity+'&emsp;';
                            status+=row.cmbArea+'&emsp; '+row.address+'&emsp; '+row.phone+'</dt>';
                            status+='<dd id="'+row.id+'">';
                            status+=  '<a href="javascript:;">修改</a>&emsp;';
                            status+='<a href="javascript:;" class="delete">删除</a>&emsp;';
                            status+='<a href="javascript:;">'+str+'</a>';
                            status+= '</dd>';
                            status+='</dl>';
                            // 将其追加
                            $("#div").append(status);
                            //添加完之后清除输入框的值
                            $("#username").val("");
                            $("#cmbProvince").prop("selected",false);
                            $("#cmbCity").prop("selected",false);
                            $("#cmbArea").prop("selected",false);
                            $("#address").val("");
                            $("#phone").val("");
                            $("#status").prop("checked",false);
                        }


                    })



                })







                //删除数据
                $(".dl").on("click","dd .delete",function () {

                    //定义一个变量保存
                    var id=$(this).closest("dd").attr("id");
                    console.debug(id);
                    var url=$("#h3").attr("url");

                    console.debug(url);
                    //是confirm确定用户是否删除
                    if (confirm("确定删除?")){
                        //发送ajax请求
                        $.get(url,{"id":id});
                        $(this).closest("dl").remove();
                    }


                })

                //回显数据
                $(".dl").on("click","dd a:first-child",function () {

                   var id=$(this).closest("dd").attr("id");
                   var url=$("#edit").attr("url");
                   //发送ajax请求
                   $.getJSON(url,{"id":id},function (row) {
                       //回显数据
                        $("#username").val(row.username);
                       /* $("#cmbProvince").prop("selected",false);
                        $("#cmbCity").prop("selected",false);
                        $("#cmbArea").prop("selected",false);*/
                        provice=row.cmbProvince;
                        city=row.cmbCity;
                        area=row.cmbArea;
                       addressInit('cmbProvince', 'cmbCity', 'cmbArea',provice,city,area);

                        $("#address").val(row.address);
                        $("#phone").val(row.phone);
                        if (row.status==1){
                            $("#status").prop("checked",true);
                        }
                     //将hid赋值
                       $("#hid").prop("name","id");
                       $("#hid").prop("value",row.id);
                       $("#add").html("确认修改");
                    })


                })

                //修改默认地址
                $(".dl").on("click","dd a:last-child",function () {

                   var id=$(this).closest("dd").attr("id");
                    var url=$("#update").attr("url");
                    var status="";
                    //发送ajax请求
                    $.get(url,{"id":id})
                    status+= '<a href="javascript:;">修改</a>&emsp;';
                    status+='<a href="" class="delete">删除</a>&emsp;';
                        //将其父节点的dd的内容进行替换
                        $("#"+id).html(status);
                        //刷新页面
                    location.reload();

                })


            })


        </script>
</body>
</html>


