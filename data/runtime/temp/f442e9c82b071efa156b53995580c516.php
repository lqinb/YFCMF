<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:54:"D:\phpsite\YFCMF/app/admin\view\plug\plug_ad_list.html";i:1484560944;s:48:"D:\phpsite\YFCMF/app/admin\view\public\base.html";i:1484560944;s:50:"D:\phpsite\YFCMF/app/admin\view\public\header.html";i:1485050766;s:52:"D:\phpsite\YFCMF/app/admin\view\public\left_nav.html";i:1484560944;s:52:"D:\phpsite\YFCMF/app/admin\view\public\head_nav.html";i:1485050807;s:59:"D:\phpsite\YFCMF/app/admin\view\plug\ajax_plug_ad_list.html";i:1484560944;s:50:"D:\phpsite\YFCMF/app/admin\view\public\footer.html";i:1485050719;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>后台管理</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
	<!-- bootstrap & fontawesome必须的css -->
	<link rel="stylesheet" href="__PUBLIC__/ace/css/bootstrap.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/ace/css/font-awesome.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/datePicker/bootstrap-datepicker.css" />
	<link rel="stylesheet" href="__PUBLIC__/datetimepicker/bootstrap-datetimepicker.css" />
	<!-- 此页插件css -->

	<!-- ace的css -->
	<link rel="stylesheet" href="__PUBLIC__/ace/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<!-- IE版本小于9的ace的css -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="__PUBLIC__/ace/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="__PUBLIC__/ace/css/ace-ie.css" />
	<![endif]-->

	<link rel="stylesheet" href="__PUBLIC__/yfcmf/yfcmf.css" />
	<!-- 此页相关css -->

	<!-- ace设置处理的js -->
	<script src="__PUBLIC__/ace/js/ace-extra.js"></script>
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="__PUBLIC__/others/html5shiv.min.js"></script>
	<script src="__PUBLIC__/others/respond.min.js"></script>
	<![endif]-->
    <!-- 引入基本的js -->
    <script type="text/javascript">
        var admin_ueditor_handle = "<?php echo url('Sys/upload'); ?>";
        var admin_ueditor_lang ='zh-cn';
    </script>
    <!--[if !IE]> -->
    <script src="__PUBLIC__/others/jquery.min-2.2.1.js"></script>
    <!-- <![endif]-->
    <!-- 如果为IE,则引入jq1.12.1 -->
    <!--[if IE]>
    <script src="__PUBLIC__/others/jquery.min-1.12.1.js"></script>
    <![endif]-->

    <!-- 如果为触屏,则引入jquery.mobile -->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='__PUBLIC__/others/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="__PUBLIC__/others/bootstrap.min.js"></script>
</head>

<body class="no-skin">
<!-- 导航栏开始 -->
<div id="navbar" class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-container" id="navbar-container">
		<!-- 导航左侧按钮手机样式开始 -->
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button><!-- 导航左侧按钮手机样式结束 -->
		<button data-target="#sidebar2" data-toggle="collapse" type="button" class="pull-left navbar-toggle collapsed">
			<span class="sr-only">Toggle sidebar</span>
			<i class="ace-icon fa fa-dashboard white bigger-125"></i>
		</button>
		<!-- 导航左侧正常样式开始 -->
		<div class="navbar-header pull-left">
			<!-- logo -->
			<a href="<?php echo url('admin/Index/index'); ?>" class="navbar-brand" title="管理后台首页">
				<small>
					<i class="fa fa-leaf"></i>
					后台管理
				</small>
			</a>
		</div><!-- 导航左侧正常样式结束 -->

		<!-- 导航栏开始 -->
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="grey">
					<a href="<?php echo url('home/index/index'); ?>" target="_blank">
						前台首页
					</a>
				</li>

				<li class="purple">
					<a data-info="确定要清理缓存吗？" class="confirm-rst-btn" href="<?php echo url('Sys/clear'); ?>">
						清除缓存
					</a>
				</li>
				
				<?php if(config('lang_switch_on')): ?>
				<li class="grey">
					<?php switch($lang): case "zh-cn": ?><a href="<?php echo url('Index/lang',['lang_s'=>'en']); ?>" class="rst-url-btn">ENGLISH</a><?php break; case "en-us": ?><a href="<?php echo url('Index/lang',['lang_s'=>'cn']); ?>" class="rst-url-btn">简体中文</a><?php break; endswitch; ?>
				</li>
				<?php endif; ?>
				<!-- 用户菜单开始 -->
				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?php echo get_imgurl($admin_avatar,2); ?>" alt="<?php echo session('admin_username'); ?>" />
								<span class="user-info">
									<small>欢迎,</small>
									<?php echo session('admin_username'); ?>
								</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo url('Sys/profile'); ?>">
								<i class="ace-icon fa fa-user"></i>
								会员中心
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo url('admin/Login/logout'); ?>"  data-info="你确定要退出吗？" class="confirm-btn">
								<i class="ace-icon fa fa-power-off"></i>
								注销
							</a>
						</li>
					</ul>
				</li><!-- 用户菜单结束 -->
			</ul>
		</div><!-- 导航栏结束 -->
	</div><!-- 导航栏容器结束 -->
</div><!-- 导航栏结束 -->

<!-- 整个页面内容开始 -->
<div class="main-container" id="main-container">
	<!-- 菜单栏开始 -->
	<div id="sidebar" class="sidebar responsive sidebar-fixed ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<!--左侧顶端按钮-->
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<a class="btn btn-success" href="<?php echo url('News/news_list'); ?>" role="button" title="文章列表"><i class="ace-icon fa fa-signal"></i></a>
			<a class="btn btn-info" href="<?php echo url('News/news_add'); ?>" role="button" title="添加文章"><i class="ace-icon fa fa-pencil"></i></a>
			<a class="btn btn-warning" href="<?php echo url('Member/member_list'); ?>" role="button" title="会员列表"><i class="ace-icon fa fa-users"></i></a>
			<a class="btn btn-danger" href="<?php echo url('Sys/sys'); ?>" role="button" title="站点设置"><i class="ace-icon fa fa-cogs"></i></a>
		</div>
		<!--左侧顶端按钮（手机）-->
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<a class="btn btn-success" href="<?php echo url('News/news_list'); ?>" role="button" title="文章列表"></a>
			<a class="btn btn-info" href="<?php echo url('News/news_add'); ?>" role="button" title="添加文章"></a>
			<a class="btn btn-warning" href="<?php echo url('Member/member_list'); ?>" role="button" title="会员列表"></a>
			<a class="btn btn-danger" href="<?php echo url('Sys/sys'); ?>" role="button" title="站点设置"></a>
		</div>
	</div>
	<!-- 菜单列表开始 -->
	<ul class="nav nav-list">
		<!--一级菜单遍历开始-->
		<?php if(is_array($menus) || $menus instanceof \think\Collection): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$v): if(!empty($v['_child'])): ?>
				<li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v['id'])): ?>open<?php endif; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa <?php echo $v['css']; ?>"></i>
				<span class="menu-text"><?php echo $v['title']; ?></span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<ul class="submenu">
				<!--二级菜单遍历开始-->
				<?php if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection): if( count($v['_child'])==0 ) : echo "" ;else: foreach($v['_child'] as $key=>$vv): if(!empty($vv['_child'])): ?>
						<li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv['id'])): ?>active open<?php endif; ?>">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
						<?php echo $vv['title']; ?>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<!--三级菜单遍历开始-->
						<?php if(is_array($vv['_child']) || $vv['_child'] instanceof \think\Collection): if( count($vv['_child'])==0 ) : echo "" ;else: foreach($vv['_child'] as $key=>$vvv): ?>
							<li class="<?php if((count($menus_curr) >= 3) AND ($menus_curr[2] == $vvv['id'])): ?>active<?php endif; ?>">
							<a href="<?php echo url($vvv['name']); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo $vvv['title']; ?>
							</a>
							<b class="arrow"></b>
							</li>
						<?php endforeach; endif; else: echo "" ;endif; ?><!--三级菜单遍历结束-->
					</ul>
					</li>
					<?php else: ?>
					<li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv['id'])): ?>active<?php endif; ?>">
					<a href="<?php echo url($vv['name']); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						<?php echo $vv['title']; ?>
					</a>
					<b class="arrow"></b>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?><!--二级菜单遍历结束-->
			</ul>
			</li>
			<?php else: ?>
			<li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v['id'])): ?>active<?php endif; ?>">
			<a href="<?php echo url($v['name']); ?>">
				<i class="menu-icon fa fa-caret-right"></i>
				<?php echo $v['title']; ?>
			</a>
			<b class="arrow"></b>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?><!--一级菜单遍历结束-->
	</ul><!-- 菜单列表结束 -->

	<!-- 菜单栏缩进开始 -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div><!-- 菜单栏缩进结束 -->
</div>
	<!-- 菜单栏结束 -->

	<!-- 主要内容开始 -->
	<div class="main-content">
		<div class="main-content-inner">
			<!-- 右侧主要内容页顶部标题栏开始 -->
			<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse breadcrumbs-fixed" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
	<div class="nav-wrap-up pos-rel">
		<div class="nav-wrap">
			<ul class="nav nav-list">
				<?php if($id_curr != ''): if(is_array($menus_child) || $menus_child instanceof \think\Collection): if( count($menus_child)==0 ) : echo "" ;else: foreach($menus_child as $key=>$k): ?>
				<li>
					<a href="<?php echo url(''.$k['name'].''); ?>">
					<o class="font12 <?php if($id_curr == $k['id']): ?>rigbg<?php endif; ?>"><?php echo $k['title']; ?></o>
					</a>
					<b class="arrow"></b>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; else: ?>
				<li>
					<a href="<?php echo url('Index/index'); ?>">
						<o class="font12">后台系统管理</o>
					</a>
					<b class="arrow"></b>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div><!-- /.nav-list -->
</div>
			<!-- 右侧主要内容页顶部标题栏结束 -->
			<!-- 右侧下主要内容开始 -->
			
	<div class="page-content">

		<div class="row maintop">
			<div class="col-xs-4 col-sm-2 margintop5">
				<!-- 点击模态框（Modal） -->
				<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
					<i class="ace-icon fa fa-bolt bigger-110"></i>
					添加广告
				</button>

			</div>
			<form name="admin_list_sea" class="form-search" id="list-filter" method="post" action="<?php echo url('plug_ad_list'); ?>">
				<div class="col-xs-6 col-sm-2  margintop5">
					<select name="plug_ad_l" class="ajax_change">
						<option value="">按语言</option>
						<option value="zh-cn" <?php if($plug_ad_l == 'zh-cn'): ?>selected="selected"<?php endif; ?>>中文</option>
						<option value="en-us" <?php if($plug_ad_l == 'en-us'): ?>selected="selected"<?php endif; ?> >英语</option>
					</select>
				</div>
				<div class="col-xs-10 col-sm-4 margintop5">
					<div class="input-group">
										<span class="input-group-addon">
											<i class="ace-icon fa fa-check"></i>
										</span>
						<input type="text" name="key" id="key" class="form-control" value="<?php echo $val; ?>" placeholder="输入广告名称" />
										<span class="input-group-btn">
											<button type="submit" class="btn btn-sm  btn-purple ajax-search-form">
												<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
												搜索
											</button>
										</span>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 margintop5">
					<div class="input-group-btn">
						<a href="<?php echo url('plug_ad_list'); ?>">
							<button type="button" class="btn btn-sm  btn-purple ajax-display-all">
								<span class="ace-icon fa fa-globe icon-on-right bigger-110"></span>
								显示全部
							</button>
						</a>
					</div>
				</div>
			</form>
		</div>


		<div class="row">
			<div class="col-xs-12">
				<div>
					<form class="ajaxForm" name="plug_ad_allorder" method="post" action="<?php echo url('plug_ad_order'); ?>" >
						<table class="table table-striped table-bordered table-hover" id="dynamic-table">
							<thead>
							<tr>
								<th class="hidden-xs">ID</th>
								<th>广告名称</th>
								<th class="hidden-sm hidden-xs">所属位置</th>
								<th class="hidden-sm hidden-xs">语言</th>
								<th class="hidden-sm hidden-xs">添加时间</th>
								<th>排序</th>
								<th>状态</th>
								<th style="border-right:#CCC solid 1px;">操作</th>
							</tr>
							</thead>

							<tbody id="ajax-data">
								<?php if(is_array($plug_ad_list) || $plug_ad_list instanceof \think\Collection): if( count($plug_ad_list)==0 ) : echo "" ;else: foreach($plug_ad_list as $key=>$v): ?>
	<tr>
		<td class="hidden-xs" height="28" ><?php echo $v['plug_ad_id']; ?></td>
		<td><a href="<?php echo $v['plug_ad_url']; ?>" target="_blank"><?php echo $v['plug_ad_name']; ?></a></td>
		<td class="hidden-sm hidden-xs"><?php echo $v['plug_adtype_name']; ?></td>
		<td class="hidden-sm hidden-xs"><?php echo $v['plug_ad_l']; ?></td>
		<td class="hidden-sm hidden-xs"><?php echo date('Y-m-d',$v['plug_ad_addtime']); ?></td>
		<td><input name="<?php echo $v['plug_ad_id']; ?>" value=" <?php echo $v['plug_ad_order']; ?>" class="list_order"/></td>
		<td>
			<?php if($v['plug_ad_open'] == 1): ?>
				<a class="red open-btn" href="<?php echo url('plug_ad_state'); ?>" data-id="<?php echo $v['plug_ad_id']; ?>" title="已开启">
					<div id="zt<?php echo $v['plug_ad_id']; ?>"><button class="btn btn-minier btn-yellow">开启</button></div>
				</a>
				<?php else: ?>
				<a class="red open-btn" href="<?php echo url('plug_ad_state'); ?>" data-id="<?php echo $v['plug_ad_id']; ?>" title="已禁用">
					<div id="zt<?php echo $v['plug_ad_id']; ?>"><button class="btn btn-minier btn-danger">禁用</button></div>
				</a>														<?php endif; ?>														</td>
		<td>
			<div class="hidden-sm hidden-xs action-buttons">
				<a class="green"  href="<?php echo url('plug_ad_edit',array('plug_ad_id'=>$v['plug_ad_id'])); ?>" title="修改">
					<i class="ace-icon fa fa-pencil bigger-130"></i>																</a>
				<a class="red confirm-rst-url-btn" href="<?php echo url('plug_ad_del',array('plug_ad_id'=>$v['plug_ad_id'],'p'=>input('p',1))); ?>" data-info="你确定要删除吗？" title="删除">
					<i class="ace-icon fa fa-trash-o bigger-130"></i>																</a>											</div>
			<div class="hidden-md hidden-lg">
				<div class="inline position-relative">
					<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
						<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
					</button>
					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo url('plug_ad_edit',array('plug_ad_id'=>$v['plug_ad_id'])); ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="修改">
										<span class="green">
											<i class="ace-icon fa fa-pencil bigger-120"></i>
										</span>
							</a>
						</li>

						<li>
							<a href="<?php echo url('plug_ad_del',array('plug_ad_id'=>$v['plug_ad_id'],'p'=>input('p',1))); ?>"  class="tooltip-error confirm-rst-url-btn" data-info="你确定要删除吗？" data-rel="tooltip" title="" data-original-title="删除">
										<span class="red">
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
										</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</td>
	</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
	<td height="50" align="left"><button  id="btnorder" class="btn btn-white btn-yellow btn-sm">排序</button></td>
	<td height="50" colspan="7" align="right"><?php echo $page; ?></td>
</tr>

							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>


		<!-- 显示模态框（Modal） -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="<?php echo url('plug_ad_runadd'); ?>">
				<div class="modal-dialog" style="width:1000px;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
									aria-hidden="true">×
							</button>
							<h4 class="modal-title" id="myModalLabel">
								添加广告
							</h4>
						</div>
						<div class="modal-body">


							<div class="row">
								<div class="col-xs-12">

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 所属位置： </label>
										<div class="col-sm-11">
											<select name="plug_ad_adtypeid"  class="col-sm-4 selector" required>
												<option value="">请选择所属广告位</option>
												<?php if(is_array($plug_adtype_list) || $plug_adtype_list instanceof \think\Collection): if( count($plug_adtype_list)==0 ) : echo "" ;else: foreach($plug_adtype_list as $key=>$v): ?>
													<option value="<?php echo $v['plug_adtype_id']; ?>"><?php echo $v['plug_adtype_name']; ?></option>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 语言： </label>
										<div class="col-sm-11">
											<select name="plug_ad_l"  class="col-sm-4 selector" required>
												<option value="">请选择语言</option>
												<option value="zh-cn">中文</option>
												<option value="en-us">英语</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 广告名称：  </label>
										<div class="col-sm-11">
											<input type="text" name="plug_ad_name" id="plug_ad_name" placeholder="输入广告名称" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 广告模式： </label>
										<div class="col-sm-11">
											<div class="radio" >
												<label>
													<input name="plug_ad_checkid" id="plug_ad_checkid" checked type="radio" class="ace" value="1"/>
													<span class="lbl"> 图片模式</span>
												</label>
												<label>
													<input name="plug_ad_checkid" id="plug_ad_checkjsid" type="radio" class="ace" value="2"/>
													<span class="lbl"> JS代码</span>
												</label>
											</div>
										</div>
									</div>

									<div class="form-group" id="pic_jslist">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> JS代码：  </label>
										<div class="col-sm-11">
											<input type="text" name="plug_ad_js" id="plug_ad_js" placeholder="输入JS代码" class="col-xs-10 col-sm-8" />
										</div>
									</div>

									<div class="form-group" id="pic_list">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 广告图片： </label>
										<div class="col-sm-11">
											<a href="javascript:;" class="file">
												<input type="file" name="file0" id="file0" multiple="multiple"/>
												选择上传文件
											</a>
											<a href="javascript:;" onclick="return backpic('__PUBLIC__/img/no_img.jpg');" title="还原修改前的图片" class="file">
												撤销上传
											</a>

											<div><img src="__PUBLIC__/img/no_img.jpg" height="70" id="img0" ></div>
										</div>
									</div>

									<div class="form-group" id="pic_listurl">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 链接URL：  </label>
										<div class="col-sm-11">
											<input type="text" name="plug_ad_url" id="plug_ad_url" placeholder="输入链接URL" class="col-xs-10 col-sm-8" />
											<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必须是以http://开头</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 是否审核： </label>
										<div class="col-sm-11" style="padding-top:5px;">
											<input name="plug_ad_open" id="plug_ad_open" value="1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
											<span class="lbl">&nbsp;&nbsp;默认关闭</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 排序：  </label>
										<div class="col-sm-11">
											<input type="text" name="plug_ad_order" id="plug_ad_order" value="50" class="col-xs-10 col-sm-3" />
											<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>从小到大排序</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" for="form-field-1"> 内容： </label>
										<div class="col-sm-11">
											<textarea  name="plug_ad_content" cols="20" rows="2" class="col-xs-10 col-sm-8 limitedone" id="form-field-10"></textarea>
											<span class="lbl">&nbsp;&nbsp;广告文字内容</span>
										</div>
									</div>

								</div>
							</div>




						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">
								提交保存
							</button>
							<button class="btn btn-info" type="reset">
								重置
							</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								关闭
							</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</form>
		</div><!-- /.modal -->

	</div><!-- /.page-content -->

			<!-- 右侧下主要内容结束 -->
		</div>
	</div><!-- 主要内容结束 -->
	<!-- 页脚开始 -->
	<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder"><a href="http://www.rainfer.cn" target="_ablank"></a></span>
				后台管理系统 &copy; 2015-<?php echo date('Y'); ?>
			</span>
		</div>
	</div>
</div>

	<!-- 页脚结束 -->
	<!-- 返回顶端开始 -->
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
	<!-- 返回顶端结束 -->
</div><!-- 整个页面内结束 -->

<!-- ace的js,可以通过打包生成,避免引入文件数多 -->
<script src="__PUBLIC__/ace/js/ace.js"></script>
<script src="__PUBLIC__/ace/js/ace.min.js"></script>
<!-- jquery.form、layer、yfcmf的js -->
<script src="__PUBLIC__/others/jquery.form.js"></script>
<script src="__PUBLIC__/others/maxlength.js"></script>
<script src="__PUBLIC__/layer/layer_zh-cn.js"></script>
<script src="__PUBLIC__/datePicker/bootstrap-datepicker.js"></script>
<script src="__PUBLIC__/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="__PUBLIC__/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="__PUBLIC__/yfcmf/yfcmf.js?<?php echo time(); ?>"></script>
<!-- 此页相关插件js -->

	<script>
			$("#pic_jslist").hide();
			$("#plug_ad_checkjsid").click(function(){
				$("#pic_jslist").show();
				$("#pic_list").hide();
				$("#pic_listurl").hide();
			});

			$("#plug_ad_checkid").click(function(){
				$("#pic_jslist").hide();
				$("#pic_list").show();
				$("#pic_listurl").show();
			});
	</script>

<!-- 与此页相关的js -->
</body>
</html>
