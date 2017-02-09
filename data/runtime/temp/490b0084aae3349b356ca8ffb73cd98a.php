<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:50:"D:\phpsite\YFCMF/app/home/view/default/\index.html";i:1486518571;s:55:"D:\phpsite\YFCMF/app/home/view/default/Public\head.html";i:1485169862;s:58:"D:\phpsite\YFCMF/app/home/view/default/Public\headnav.html";i:1484791007;s:54:"D:\phpsite\YFCMF/app/home/view/default/Public\nav.html";i:1485137871;s:57:"D:\phpsite\YFCMF/app/home/view/default/Public\banner.html";i:1485248435;s:57:"D:\phpsite\YFCMF/app/home/view/default/Public\footer.html";i:1485075551;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title><?php echo $site_seo_title; ?> <?php echo $site_name; ?></title>
    <meta name="keywords" content="<?php echo $site_seo_keywords; ?>" />
    <meta name="description"
          content="<?php echo $site_seo_description; ?>">
    <link href="__PUBLIC__/default/css/lib.min.css" rel="stylesheet" type="text/css" />

    <link href="__PUBLIC__/default/css/page_index.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/default/css/lib.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/default/css/style.css" rel="stylesheet" type="text/css" />

<meta name="author" content=""/>
<script type="text/javascript" src="__PUBLIC__/default/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/default/js/lib.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/default/js/FrontColumns_navigation01.min.js" ></script>
<script type="text/javascript" src="__PUBLIC__/default/js/FrontPublic_slideShow01.min.js" ></script>



</head>
<body>
<div class="pageWidth" id="box_root">
    <!-- 头部导航开始 -->
    <div class="top_welcome_bg" id="box_top_welcome_bg">
    <div class="top_welcome" id="box_top_welcome">
        <div class="top_welcome_body" id="box_top_welcome_body">
            <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450783878400" name="说明页">
                <div id="FrontSpecifies_show01-1450783878400" class="FrontSpecifies_show01-d1_c1">
                    <marquee height="30" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="1" scrolldelay="17" width="900">

                        <?php echo $rollnews; ?>

                    </marquee>
                </div>
            </div>
        </div>
        <div class="top_menu" id="box_top_menu">
            <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450783883605" name="说明页">
                <div id="FrontSpecifies_show01-1450783883605" class="FrontSpecifies_show01-d1_c1">
                    <p>
                        欢迎光临本站！
                        <a href="">联系我们</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="clearBoth"></div>
    </div>
</div>
    <!--头部导航结束-->
    <!--菜单nav开始-->
    <div class="header" id="box_header">
    <!--网站logo-->
    <div class="logo" id="box_logo">
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450783887970" name="说明页">
            <div class="FrontSpecifies_show01-d1_c1">
                <p>
                    <a href=""><img height="200px" alt="" src="<?php echo get_imgurl($site_logo); ?>" /></a>
                </p>
            </div>
        </div>
    </div>
    <!--栏目导航-->
    <div class="nav" id="box_nav">
        <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450783978725" name="栏目导航">

            <div class="FrontColumns_navigation01-d2_c1">
                <div class="mattblackmenu">
                    <ul id=""  class="nav-first"></li>
                        <li ><a
                            <?php if($cpage_id == 0): ?>
                                class="selected"
                            <?php endif; ?>
                                href='<?php echo Url('Index/index'); ?>' class=''>首页</a>
                        <?php if(is_array($menus) || $menus instanceof \think\Collection): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                            <li>
                                <a
                                        <?php if($cpage_id == $vo['id']): ?>
                                        class="selected"
                                        <?php endif; ?>
                             href='<?php echo Url('Listn/index',array('id'=>$vo['id'])); ?>' class=''><?php echo $vo['menu_name']; ?></a>
                            </li>

                        <?php endforeach; endif; else: echo "" ;endif; ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearBoth"></div>
</div>
    <!-- 菜单nav结束 -->
    <!--内容页面开始-->
    <!--banner图片开始-->
    <div class="banner" id="box_banner">
    <div xmlns="" class="columnSpace">
        <script type="text/javascript" src="__PUBLIC__/default/js/superslide.2.1.js"></script>
        <div class="FrontPublic_slideShow01-d6_c1">
            <div class="fullSlide">
                <div class="bd">

                    <ul>
                        <?php if(is_array($adpic) || $adpic instanceof \think\Collection): $i = 0; $__LIST__ = $adpic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo $vo['plug_ad_url']; ?>" class="f_pic" target="_blank">
                                <img width="1400PX" src="<?php echo $vo['plug_ad_pic']; ?>"/>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
                <div class="hd">
                    <ul></ul>
                </div>
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <script type="text/javascript">
                $(".fullSlide").hover(function () {
                            $(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
                        },
                        function () {
                            $(this).find(".prev,.next").fadeOut()
                        });
                $(".fullSlide").slide({
                    titCell: ".hd ul",
                    mainCell: ".bd ul",
                    effect: "fold",
                    autoPlay: true,
                    autoPage: true,
                    trigger: "click",
                    interTime: "5" * 1000,
                    startFun: function (i) {
                        var curLi = jQuery(".fullSlide .bd li").eq(i);
                        if (!!curLi.attr("_src")) {
                            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
                        }
                    }
                });
            </script>
        </div>
    </div>
</div>

    <!--banner图片开始-->

    <div class="index_main" id="box_index_main">
        <!--新闻列表开始-->
        <div class="index_news" id="box_index_news">
            <div class="index_news_title" id="box_index_news_title">
                <!-- 一列栏目开始 -->
                <!-- 一列栏目结束 -->
                <div class="clearBoth"></div>
                <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450784207899" name="说明页">
                    <ul class="u72">
                        <li>
                            <a href="<?php echo Url('Listn/index',array('id'=>5)); ?>">新闻资讯</a>
                            <a style="float: right;font-size: 14px" href="<?php echo Url('Listn/index',array('id'=>5)); ?>">更多>></a>
                        </li>

                    </ul>
                    <!--<div id="FrontSpecifies_show01-1450784207899" class="FrontSpecifies_show01-d1_c1">-->
                        <!--<p>-->
                        <!--<a href="/list-22.html">-->
                            <!--<img alt="" src="<?php echo $yf_theme_path; ?>public/images/06de7deb-fcd1-4ecb-9d99-c2207da42b09.jpg"/></a>-->
                    <!--</p>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="index_news_info" id="box_index_news_info">
                <div xmlns="" class="columnSpace" id="elem-FrontNews_list01-1450785771079" name="资讯列表">

                    <div id="FrontNews_list01-1450785771079" class="FrontNews_list01-d2_c1_01">
                        <div>
                            <ul class="comstyle newslist-01">
                                <?php if(is_array($mainnews) || $mainnews instanceof \think\Collection): $i = 0; $__LIST__ = $mainnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li class="content column-num1">
                                    <div class="pic">
                                        <a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="<?php echo $vo['news_title']; ?>" target="_self"><img
                                                src="<?php echo $vo['news_img']; ?>" alt="<?php echo $vo['news_title']; ?>"
                                                title="<?php echo $vo['news_title']; ?>"/></a>
                                    </div>
                                    <div class="main">
                                        <div class="newstitle">
                                            <ul>
                                                <li class="title">
                                                    <h3><a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="<?php echo $vo['news_title']; ?>"
                                                           target="_self"><?php echo $vo['news_title']; ?></a></h3>
                                                </li>
                                                <li class="date"><span></span><?php echo date("Y-m-d",$vo['news_time']); ?></li>
                                            </ul>
                                        </div>
                                        <div class="newslist">
                                            <ul>
                                                <li class="summary">
                                                    <h3>概要：</h3>
                                                    <p>
                                                        <?php echo $vo['news_scontent']; ?>
                                                        <a class="detail" href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="详细" target="_self">详细&gt;&gt;</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearBoth"></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--新闻列表结束-->
        <!--公司介绍开始-->
        <div class="index_case" id="box_index_case">
            <div class="index_case_title" id="box_index_case_title">
                <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450784211815" name="说明页">
                    <ul class="u73">
                        <li class="hover">
                            <a href="<?php echo Url('Listn/index',array('id'=>1)); ?>">企业介绍</a>
                            <a style="float: right;font-size: 14px" href="<?php echo Url('Listn/index',array('id'=>1)); ?>">更多>></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="index_case_info" id="box_index_case_info">
                <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450784215925" name="说明页">
                    <div id="FrontSpecifies_show01-1450784215925" class="FrontSpecifies_show01-d1_c1"><p>
                        <img width="200px" alt="" src="<?php echo $intronews['menu_img']; ?>"
                             style="float: left; margin-right: 12px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>
                            <?php echo $intronews['menu_content']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearBoth"></div>
    </div>
    <!--公司介绍结束-->
    <!--公司业务内容列表开始-->
    <div class="index_bussing_title" id="box_index_bussing_title">
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450784077613" name="说明页">
            <ul class="u74">
                <li class="hover">
                    <a href="<?php echo Url('Listn/index',array('id'=>5)); ?>"> 工程业绩 </a>
                    <a style="float: right;font-size: 14px" href="<?php echo Url('Listn/index',array('id'=>5)); ?>">更多>></a>
                </li>
            </ul>
            <!--<div id="FrontSpecifies_show01-1450784077613" class="FrontSpecifies_show01-d1_c1"><p>-->
                <!--<a href="/list-2.html"><img alt=""-->
                                            <!--src="<?php echo $yf_theme_path; ?>public/images/b25b05f1-e456-49bd-9779-0fd1b3b49bb3.png"/></a>-->
            <!--</p></div>-->
        </div>
    </div>
    <div class="index_bussing" id="box_index_bussing">
        <div xmlns="" class="columnSpace" id="elem-FrontProducts_list01-1450784676078" name="商品列表">
            <div id="FrontProducts_list01-1450784676078" class="FrontProducts_list01-d5_c1">
                <div class="type">
			<span class="sort">
				</span>
                </div>
                <ul class="mainul productlist-02">
                    <?php if(is_array($casenews) || $casenews instanceof \think\Collection): $i = 0; $__LIST__ = $casenews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="content column-num99">
                        <div class="pic-module">
                            <div class="pic">
                                <a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="<?php echo $vo['news_title']; ?>" target="_self">
                                    <img src="<?php echo $vo['news_img']; ?>" id="FrontProducts_list02-<?php echo $vo['news_time']; ?>" alt="<?php echo $vo['news_title']; ?>"
                                         title="<?php echo $vo['news_title']; ?>"
                                         onerror="this.src='/app/home/view/default/public/images/noimage.jpg'"/></a>
                            </div>
                        </div>
                        <div class="pro-module">
                            <ul class="basic">
                                <li class="code">
                                    <h1>
                                        <span>产品名称：</span>
                                        <strong><?php echo $vo['news_title']; ?></strong>
                                    </h1>
                                </li>
                                <li class="detaillinks"><a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="<?php echo $vo['news_title']; ?>">详细内容</a></li>
                            </ul>
                            <p class="buttonP"></p>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div>
            <script type="text/javascript">
            </script>
        </div>
    </div>
    <!--公司业务内容列表结束-->
    <!-- 底部版权开始 -->
    <div class="copyright_bg" id="box_copyright_bg">
    <div class="copyright" id="box_copyright">
        <div id="box_copyright_sub1">
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450784227487" name="栏目导航">
                <div id="FrontColumns_navigation01-1450784227487" class="FrontColumns_navigation01-d3_c1">
                    <ul class="nav-first">
                        <li id="columns34" class="first">
                            <a href="" title="公司简介">
                                <span>公司介绍</span>
                            </a>
                        </li>
                        <?php if(is_array($intromenus) || $intromenus instanceof \think\Collection): $i = 0; $__LIST__ = $intromenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Listn/index',array('id'=>$vo['id'],'pid'=>$vo['parentid'])); ?>" title="<?php echo $vo['menu_name']; ?>">
                                <span><?php echo $vo['menu_name']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="box_copyright_sub2">
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450784234053" name="栏目导航">
                <script type="text/javascript">
                    //<![CDATA[
                    FrontColumns_navigation01['FrontColumns_navigation01-1450784234053_init'] = function () {
                        FrontColumns_navigation01.extEvents("FrontColumns_navigation01-1450784234053", "");
                    }
                    $(FrontColumns_navigation01['FrontColumns_navigation01-1450784234053_init']);
                    // ]]>
                </script>
                <div id="FrontColumns_navigation01-1450784234053" class="FrontColumns_navigation01-d3_c1">
                    <ul class="nav-first">
                        <li id="columns35" class="first">
                            <a title="专业团队">
                                <span>专业团队</span>
                            </a>
                        </li>
                        <?php if(is_array($membermenus) || $membermenus instanceof \think\Collection): $i = 0; $__LIST__ = $membermenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Listn/index',array('id'=>$vo['id'],'pid'=>$vo['parentid'])); ?>" title="<?php echo $vo['menu_name']; ?>">
                                <span><?php echo $vo['menu_name']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="box_copyright_sub3">
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450784245260" name="栏目导航">
                <script type="text/javascript">
                    //<![CDATA[
                    FrontColumns_navigation01['FrontColumns_navigation01-1450784245260_init'] = function () {
                        FrontColumns_navigation01.extEvents("FrontColumns_navigation01-1450784245260", "");
                    }
                    $(FrontColumns_navigation01['FrontColumns_navigation01-1450784245260_init']);
                    // ]]>
                </script>
                <div id="FrontColumns_navigation01-1450784245260" class="FrontColumns_navigation01-d3_c1">
                    <ul class="nav-first">
                        <li id="columns36" class="first">
                            <a title="工程业绩">
                                <span>工程业绩</span>
                            </a>
                        </li>
                        <?php if(is_array($casenews) || $casenews instanceof \think\Collection): $i = 0; $__LIST__ = $casenews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" title="<?php echo $vo['news_title']; ?>">
                                <span><?php echo $vo['news_title']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="box_copyright_sub4">
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450784249927" name="栏目导航">
                <script type="text/javascript">
                    //<![CDATA[
                    FrontColumns_navigation01['FrontColumns_navigation01-1450784249927_init'] = function () {
                        FrontColumns_navigation01.extEvents("FrontColumns_navigation01-1450784249927", "");
                    }
                    $(FrontColumns_navigation01['FrontColumns_navigation01-1450784249927_init']);
                    // ]]>
                </script>
                <div id="FrontColumns_navigation01-1450784249927" class="FrontColumns_navigation01-d3_c1">
                    <ul class="nav-first">
                        <li id="columns37" class="first">
                            <a title="人才招聘">
                                <span>人才招聘</span>
                            </a>
                        </li>
                        <?php if(is_array($advmenus) || $advmenus instanceof \think\Collection): $i = 0; $__LIST__ = $advmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Listn/index',array('id'=>$vo['id'],'pid'=>$vo['parentid'])); ?>" title="<?php echo $vo['menu_name']; ?>">
                                <span><?php echo $vo['menu_name']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="box_copyright_sub5">
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1450784263463" name="栏目导航">
                <script type="text/javascript">
                    //<![CDATA[
                    FrontColumns_navigation01['FrontColumns_navigation01-1450784263463_init'] = function () {
                        FrontColumns_navigation01.extEvents("FrontColumns_navigation01-1450784263463", "");
                    }
                    $(FrontColumns_navigation01['FrontColumns_navigation01-1450784263463_init']);
                    // ]]>
                </script>
                <div id="FrontColumns_navigation01-1450784263463" class="FrontColumns_navigation01-d3_c1">
                    <ul class="nav-first">
                        <li id="columns38" class="first">
                            <a>
                                <span>联系我们</span>
                            </a>
                        </li>
                        <?php if(is_array($conmenus) || $conmenus instanceof \think\Collection): $i = 0; $__LIST__ = $conmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Listn/index',array('id'=>$vo['id'],'pid'=>$vo['parentid'])); ?>" title="<?php echo $vo['menu_name']; ?>">
                                <span><?php echo $vo['menu_name']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <li class="last"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright_info" id="box_copyright_info">
            <div class="columnSpace">
                <div id="FrontSpecifies_show01-1450784268118" class="FrontSpecifies_show01-d1_c1">
                    <p><?php echo $site_co_name; ?></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>地址：<?php echo $site_address; ?><br/>电话： <?php echo $site_tel; ?><br/>传真： <?php echo $site_qq; ?></p>
                </div>
            </div>
        </div>
        <div class="clearBoth"></div>
    </div>
</div>
<div class="hide_code" id="box_hide_code">
    <script type="text/javascript">
        $(document).ready(function () {
            $("#box_sub_banner .FrontSpecifies_show01-d1_c1").each(function (i) {
                var img = $(this).find("img");
                var src = img.attr("src");
                img.css("display", "block");
                $(this).css("background", "url(" + src + ") no-repeat center center");
            })
        });
    </script>
    <!--InstanceEndEditable-->
</div>
    <!-- 底部版权结束 -->
</div>

</body>
</html>
