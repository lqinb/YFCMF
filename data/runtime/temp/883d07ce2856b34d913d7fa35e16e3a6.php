<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:50:"D:\phpsite\YFCMF/app/admin\view\model\cmsedit.html";i:1484560944;s:48:"D:\phpsite\YFCMF/app/admin\view\public\base.html";i:1484560944;s:50:"D:\phpsite\YFCMF/app/admin\view\public\header.html";i:1485050766;s:52:"D:\phpsite\YFCMF/app/admin\view\public\left_nav.html";i:1484560944;s:52:"D:\phpsite\YFCMF/app/admin\view\public\head_nav.html";i:1485050807;s:50:"D:\phpsite\YFCMF/app/admin\view\public\footer.html";i:1485050719;}*/ ?>
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
	<script src="__PUBLIC__/ueditor/ueditor.config.js" type="text/javascript"></script>
	<script src="__PUBLIC__/ueditor/ueditor.all.js" type="text/javascript"></script>
	<link href="__PUBLIC__/ppy/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
	<script src="__PUBLIC__/ppy/js/fileinput.js" type="text/javascript"></script>
	<script src="__PUBLIC__/ppy/js/fileinput_locale_zh.js" type="text/javascript"></script>
		<!--主题-->
		<div class="page-header">
			<h1>
				您当前操作
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					修改<?php echo $model['model_title']; ?>
				</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal ajaxForm2" name="plug_ad_runedit" method="post" action="<?php echo url('cmsrunedit'); ?>">
					<input type="hidden" name="<?php echo $model['model_pk']; ?>" value="<?php echo $model_pkid; ?>" />
                    <input type="hidden" name="id" value="<?php echo $model_id; ?>" />
					<?php if(is_array($fields_data) || $fields_data instanceof \think\Collection): if( count($fields_data)==0 ) : echo "" ;else: foreach($fields_data as $k=>$f): switch($f['type']): case "baidu_map": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?php echo $k; ?>" class="col-xs-6 col-sm-6" value="<?php echo htmlspecialchars($f['value']); ?>"
                                    <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "text": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?php echo $k; ?>" class="col-xs-6 col-sm-6" value="<?php echo htmlspecialchars($f['value']); ?>"
                                           <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "number":case "large_number":case "currency": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="number" name="<?php echo $k; ?>" class="col-xs-6 col-sm-6" value="<?php echo htmlspecialchars($f['value']); ?>"
                                           <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "datetime": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?php echo $k; ?>" class="datetime-picker col-xs-6 col-sm-6" value="<?php echo date('Y-m-d H:i:s',$f['value']); ?>"
                                           <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "date": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="text" name="<?php echo $k; ?>" class="date-picker col-xs-6 col-sm-6" value="<?php echo date('Y-m-d',$f['value']); ?>"
                                           <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "switch": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="checkbox" value='1' name="<?php echo $k; ?>" class="ace ace-switch ace-switch-4 btn-flat" <?php if($f['value'] == 1): ?>checked<?php endif; if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>/>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "bigtext": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <textarea name="<?php echo $k; ?>" class="col-xs-6 col-sm-6"
                                           <?php if(in_array('readonly',$f['rules'])): ?> readonly="readonly" <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>><?php echo htmlspecialchars($f['value']); ?>
                                    </textarea>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "richtext": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <textarea name="<?php echo $k; ?>" rows="100%" style="width:100%" id="myEditor_<?php echo $k; ?>"><?php echo $f['value']; ?></textarea>
                                    <script type="text/javascript">
                                        var editor_<?php echo $k; ?> = new UE.ui.Editor();
                                        editor_<?php echo $k; ?>.render("myEditor_<?php echo $k; ?>");
                                    </script>
                                </div>
                            </div>
                            <?php break; case "selectnumber":case "selecttext": if($k == $model['model_cid']): ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <select name="<?php echo $k; ?>" class="col-xs-6 col-sm-6" <?php if(in_array('required',$f['rules'])): ?> required <?php endif; ?>>
                                    <?php if(is_array($f['option']) || $f['option'] instanceof \think\Collection): if( count($f['option'])==0 ) : echo "" ;else: foreach($f['option'] as $key=>$vo): ?>
                                    <option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $model_cid): ?> selected <?php endif; ?> class="bgc"><?php echo $vo['lefthtml']; ?><?php echo $vo['menu_name']; ?>(<?php if($vo['menu_l'] == 'zh-cn'): ?>中<?php else: ?>英<?php endif; ?>)</option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <select name="<?php echo $k; ?>" class="col-xs-6 col-sm-6"
                                    <?php if(in_array('readonly',$f['rules'])): ?> disabled <?php endif; if(in_array('required',$f['rules'])): ?> required <?php endif; ?>>
                                    <?php if(is_array($f['option']) || $f['option'] instanceof \think\Collection): if( count($f['option'])==0 ) : echo "" ;else: foreach($f['option'] as $kk=>$vv): ?>
                                    <option value="<?php echo htmlspecialchars($kk); ?>" <?php if($kk == $f['value']): ?> selected <?php endif; ?>><?php echo $vv; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"><?php if(in_array('required',$f['rules'])): ?>*<?php endif; ?></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php endif; break; case "checkbox": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <?php if(is_array($f['option']) || $f['option'] instanceof \think\Collection): if( count($f['option'])==0 ) : echo "" ;else: foreach($f['option'] as $kk=>$vv): ?>
                                    <label>
                                        <input <?php if(in_array($kk,$f['value'])): ?>checked<?php endif; ?> class="ace ace-checkbox-2" name="<?php echo $k; ?>[]" type="checkbox" value="<?php echo htmlspecialchars($kk); ?>" />
                                        <span class="lbl"> <?php echo $vv; ?></span>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "imagefile": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="checkpic_<?php echo $k; ?>" id="checkpic_<?php echo $k; ?>" value="<?php echo $f['value']; ?>" />
                                    <input type="hidden" name="oldcheckpic_<?php echo $k; ?>" id="oldcheckpic_<?php echo $k; ?>" value="<?php echo $f['value']; ?>" />
                                    <a href="javascript:;" class="file" title="点击选择所要上传的图片">
                                        <input type="file" data-field="<?php echo $k; ?>" name="pic_one_<?php echo $k; ?>[]" id="file_<?php echo $k; ?>" multiple="multiple"/>
                                        选择上传文件
                                    </a>
                                    <span class="lbl">&nbsp;&nbsp;<img src="<?php echo get_imgurl($f['value']); ?>" width="100" height="70" id="img_<?php echo $k; ?>" ></span>
                                    <a href="javascript:;" onclick="return backpic2('<?php echo get_imgurl($f['value']); ?>','<?php echo $k; ?>');" title="还原修改前的图片" class="file">
                                        撤销修改
                                    </a>
                                    <span class="lbl">&nbsp;&nbsp;<span class="red"></span><?php echo htmlspecialchars($f['description']); ?></span>
                                </div>
                            </div>
                            <?php break; case "images": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> <?php echo $f['title']; ?>：  </label>
                                <div class="col-sm-10">
                                    <label>
                                        <span class="btn btn-minier btn-success"  data-toggle="modal" data-target="#myModal">查看已上传的图片</span>
                                    </label>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group" id="pic_list">
                                <div class="col-sm-10 col-sm-offset-2" style="padding-top:5px;">
                                    <input id="file-5" name="pic_all[]" type="file" class="file"  multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon=""><br />
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <input name="pic_oldlist" type="hidden" id="pic_oldlist" type="text" size="130" value="<?php echo $f['value']; ?>" >
                            <!-- 显示模态框（Modal） -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:80%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">
                                                操作已上传的多图
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <ul>
                                                                <?php if(is_array($f['images']) || $f['images'] instanceof \think\Collection): $i = 0; $__LIST__ = $f['images'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                                                                <div class="file-preview-frame" data-fileindex="0" id="id<?php echo $i; ?>">
                                                                    <img src="<?php echo get_imgurl($image); ?>" class="file-preview-image" style="width:auto;height:160px;">
                                                                    <div class="file-thumbnail-footer">
                                                                        <div class="file-actions">
                                                                            <div class="file-footer-buttons">
                                                                                <a class="red" href="javascript:;" onclick="return delall(<?php echo $i; ?>,'<?php echo $image; ?>');" title="回收站">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary">
                                                若想取消修改，请刷新当前页面
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                关闭
                                            </button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <?php break; default: ?>
                            <p class="label-danger">
                                未知字段 <b><?php echo $f['type']; ?></b>
                            </p>
                        <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								保存
							</button>
							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								重置
							</button>
						</div>
					</div>
				</form>
			</div><!--col-xs-12-->
		</div><!--row-->
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
    $(".date-picker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        language:'zh-CN',
    });
    $(".datetime-picker").datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss',
        autoclose: true,
        todayHighlight: true,
        language:'zh-CN',
    });
</script>

<!-- 与此页相关的js -->
</body>
</html>
