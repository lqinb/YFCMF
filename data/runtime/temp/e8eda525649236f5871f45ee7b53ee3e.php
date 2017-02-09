<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:52:"D:\phpsite\YFCMF/app/home/view/default/\piclist.html";i:1485170230;s:55:"D:\phpsite\YFCMF/app/home/view/default/Public\head.html";i:1485169862;s:58:"D:\phpsite\YFCMF/app/home/view/default/Public\headnav.html";i:1484791007;s:54:"D:\phpsite\YFCMF/app/home/view/default/Public\nav.html";i:1485137871;s:58:"D:\phpsite\YFCMF/app/home/view/default/Public\leftnav.html";i:1485139414;s:56:"D:\phpsite\YFCMF/app/home/view/default/ajax_piclist.html";i:1484893718;s:57:"D:\phpsite\YFCMF/app/home/view/default/Public\footer.html";i:1485075551;s:58:"D:\phpsite\YFCMF/app/home/view/default/Public\scripts.html";i:1484560944;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
    <link href="__PUBLIC__/default/css/page_bussing.min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/default/css/page_news.min.css" rel="stylesheet" type="text/css" />
    <title><?php echo (isset($menu['menu_seo_title']) && ($menu['menu_seo_title'] !== '')?$menu['menu_seo_title']:$site_seo_title); ?> <?php echo $site_name; ?></title>
    <meta name="keywords" content="<?php echo (isset($menu['menu_seo_key']) && ($menu['menu_seo_key'] !== '')?$menu['menu_seo_key']:$site_seo_keywords); ?>" />
    <meta name="description" content="<?php echo (isset($menu['menu_seo_des']) && ($menu['menu_seo_des'] !== '')?$menu['menu_seo_des']:$site_seo_description); ?>">
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
    <!-- 头部导航开始 -->
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

    <!-- 装饰图片开始 -->
    <div class="sub_banner" id="box_sub_banner">
        <!--InstanceBeginEditable name="box_sub_banner"-->
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450850493014" name="说明页">
            <div class="FrontSpecifies_show01-d1_c1"><img width="1200px" src="__PUBLIC__/default/images/about_banner.jpg" /></div>
        </div>
        <!--InstanceEndEditable-->
    </div>
    <!-- 装饰图片开始 -->
    <div class="sub_main" id="box_sub_main">
        <div class="sub_left" id="box_sub_left">
    <div class="sub_left_title" id="box_sub_left_title">
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450850650552" name="说明页">
            <div id="FrontSpecifies_show01-1450850650552" class="FrontSpecifies_show01-d1_c1">
                <p>
                    <?php echo $pagetitle; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="sub_left_type" id="box_sub_left_type">
        <div xmlns="" class="columnSpace" id="elem-FrontNewsCategory_tree01-1450850671971" name="资讯分类">
            <div id="FrontNewsCategory_tree01-1450850671971" class="FrontNewsCategory_tree01-d2_c1">
                <div class="menu-first">
                    <ul>
                        <li class="menu-none">
                            <?php if(is_array($submenu) || $submenu instanceof \think\Collection): $i = 0; $__LIST__ = $submenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a

                                    <?php if($list_id == $vo['id']): ?>
                                    style="background: #fe7e00;color: #ffffff;width:205px;margin-bottom: 2px"
                                    <?php endif; if($list_id != $vo['id']): ?>
                            style="margin-bottom: 2px"
                            <?php endif; ?>

                               href="<?php echo url('Listn/index',array('id'=>$vo['id'],'pid'=>$vo['parentid'])); ?>" target="_self" class="menu-text1"><?php echo $vo['menu_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sub_contact_title" id="box_sub_contact_title">
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450837792432" name="说明页">
            <div id="FrontSpecifies_show01-1450837792432" class="FrontSpecifies_show01-d1_c1"><p>
                联系我们</p></div>
        </div>
    </div>
    <div class="sub_contact" id="box_sub_contact">
        <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1450837797007" name="说明页">
            <div id="FrontSpecifies_show01-1450837797007" class="FrontSpecifies_show01-d1_c1"><p>
                <?php echo $site_tel; ?></p>
                <p>
                    <?php echo $site_qq; ?></p>
                <p>
                    <a href="mailto:quanneng_design@126.com"><?php echo $site_admin_email; ?></a></p>
                <p><?php echo $site_address; ?></p></div>
        </div>
    </div>
</div>

        <div class="sub_body" id="box_sub_body">
            <div class="sub_mbx" id="box_sub_mbx">
                <div xmlns="" class="columnSpace" id="elem-FrontPublic_breadCrumb01-1450850463894" name="面包屑">
                    <div id="FrontPublic_breadCrumb01-1450850463894" class="FrontPublic_breadCrumb01-d1_c1">
                        <div>
                            您现在的位置：
                            <a href="<?php echo Url('Index/index'); ?>" target="_self">网站首页</a>>>&nbsp;
                            <?php if(!empty($parmenu)): ?>
                            <a href="<?php echo url('Listn/index',array('id'=>$parmenu['id'])); ?>" target="_self"><?php echo $parmenu['menu_name']; ?></a>>>&nbsp;
                            <?php endif; ?>
                            <a href="<?php echo url('Listn/index',array('id'=>$menu['id'])); ?>" target="_self"><?php echo $menu['menu_name']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub_info" id="box_sub_info">
                        <div xmlns="" class="columnSpace" id="elem-FrontProducts_list01-1450859311543" name="商品列表">
            <div id="FrontProducts_list01-1450859311543" class="FrontProducts_list01-d3_c1_01">

                <ul class="mainul productlist-02">
                    <?php if(is_array($lists['news']) || $lists['news'] instanceof \think\Collection): $i = 0; $__LIST__ = $lists['news'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="content column-num4">
                        <div class="pic-module">
                            <div class="pic">
                                <a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" target="_self">
                                    <img  src="<?php echo get_imgurl($vo['news_img']); ?>" alt="<?php echo $vo['news_title']; ?>" title="<?php echo $vo['news_title']; ?>" onerror="this.src='/app/home/view/jxqndl/public/images/noimage.jpg'"></a>
                            </div>
                        </div>
                        <div class="pro-module">
                            <ul class="basic">
                                <li class="code">
                                    <h1>
                                        <span>产品名称：</span>
                                        <strong>
                                            <a href="<?php echo url('News/index',array('id'=>$vo['n_id'])); ?>" target="_self"><?php echo $vo['news_title']; ?></a>
                                        </strong>
                                    </h1>
                                </li>
                            </ul>
                            <p class="buttonP"></p>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <li class="clearBoth"></li>
                </ul>

            </div>

        </div>
        <div class="pagination">
            <?php echo $page_html; ?>
        </div>

            </div>
        </div>
        <!--InstanceEndEditable-->
        <div class="clearBoth"></div>
    </div>
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
    <!--<div class="hide_code" id="box_hide_code">-->
    <!--<script type="text/javascript">-->
    <!--$(document).ready(function() {-->
    <!--$("#box_sub_banner .FrontSpecifies_show01-d1_c1").each(function(i) {-->
    <!--var img = $(this).find("img");-->
    <!--var src = img.attr("src");-->
    <!--img.css("display", "block");-->
    <!--$(this).css("background", "url(" + src + ") no-repeat center center");-->
    <!--})-->
    <!--});-->
    <!--</script>-->
    <!--&lt;!&ndash;InstanceEndEditable&ndash;&gt;-->
    <!--</div>-->
    <!-- 底部版权结束 -->
</div>
<script src="<?php echo $yf_theme_path; ?>public/js/jquery.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/bootstrap.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/jquery.parallax.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/jquery.nivo.slider.pack.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/superfish.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/circularnav.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/jflickrfeed.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/waypoints.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/spectrum.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/tytabs.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/custom.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/portfolio.js"></script> 
<script src="<?php echo $yf_theme_path; ?>public/js/qrcode.min.js"></script>
<script src="<?php echo $yf_theme_path; ?>public/js/jquery.sticky.js"></script>
<script src="__PUBLIC__/others/jquery.form.js"></script>
<script src="__PUBLIC__/layer/layer_<?php echo $lang; ?>.js"></script>



    
    
    


</body>

<!-- InstanceEnd -->

</html>