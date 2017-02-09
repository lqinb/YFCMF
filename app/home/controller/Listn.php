<?php

// +----------------------------------------------------------------------
namespace app\home\controller;
use think\Db;

class Listn extends Base {
    public function index(){
        $list_id=input('id');
//        当前页面主ID 即二级菜单
        $cpage_id = input('pid')? input('pid'):$list_id;
//        $page = 1;
        $page=input('page');
//        print_r($cpage_id);exit;
        $pagesize=10;
        $menu=Db::name('menu')->find(input('id'));
        $parmenu = Db::name('menu')->find($menu['parentid']);
        $submenuid = Db::name('menu')->where('menu_open',1)->where('parentid',$list_id)->column('id');
//        存在子菜单 就获取子菜单的所有文章，否则 就获取本菜单的所有文章
        if(!empty($submenuid)){
            $data = array(
            'news_columnid' => array('in',$submenuid),
        );
        }else{
            $data = array(
                'news_columnid' => $list_id,
            );
        }
        $submenu = Db::name('menu')->where('menu_open',1)->where('parentid',$cpage_id)->select();
        $pagetitle =Db::name('menu')->where('menu_open',1)->where('id',$cpage_id)->value('menu_name');

        $this->assign('submenu',$submenu);
        $this->assign('pagetitle',$pagetitle);
        $this->assign('cpage_id',$cpage_id);
        $this->assign('list_id',$list_id);



//        $arr = get_menu(2);
//        print_r($submenu);exit;
        if(empty($menu)){
            $this->error(lang('operation not valid'));
        }
        $tplname=$menu['menu_listtpl'];
        $tplname=$tplname?:'list';
//        print_r($tplname);exit;
        if($tplname=="piclist") $pagesize=16;//相册格式
        if($tplname=="about") { //关于模版
//            获取默认显示menu内容
            if(!empty($submenuid)){ //
                $menucontent = Db::name('menu')->where('menu_open',1)->where('parentid',$cpage_id)->value('menu_content');
            }else{
                $menucontent = Db::name('menu')->where('menu_open',1)->where('id',$list_id)->value('menu_content');
            }
            $this->assign('menucontent',$menucontent);
//            print_r($menucontent);exit;
        }

        if(request()->isAjax()){
            $lists=get_news('order:news_time desc',1,$pagesize,null,null,$data,$page);
            $tplname=":ajax_".$tplname;

        }else{
            $lists=get_news('order:news_time desc',1,$pagesize,null,null,$data,null);
        }
        //替换成带ajax的class
        $page_html=$lists['page'];
        $page_html=preg_replace("(<a[^>]*page[=|/](\d+).+?>(.+?)<\/a>)","<a href='javascript:ajax_page($1);'>$2</a>",$page_html);

        $this->assign('menu',$menu);
        $this->assign('parmenu',$parmenu);

//        print_r($tplname);exit;
        $this->assign('page_html',$page_html);
        $this->assign('lists',$lists);
        $this->assign('list_id', $list_id);
        return $this->view->fetch(":$tplname");

    }

}