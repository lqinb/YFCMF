<?php
namespace app\home\controller;
use think\Cache;
use think\Db;
use \think\View;
use app\common\controller\Common;

use think\captcha\Captcha;

class Index extends Base {

    public function index() {

//      获取广告图片
        $adpic = Db::name('plug_ad')->where('plug_ad_open','1')->order('plug_ad_order')->select();
        $this->assign('adpic',$adpic);


//        获取新闻文章列表 id为5
//        首先获取一级菜单下的所有二级子菜单
        $submenu = Db::name('menu')->where('menu_open',1)->where('parentid',5)->column('id');
//        获取属于二级子菜单下的文章列表
        $mainnews = Db::name('news')->where('news_columnid','in',$submenu)->where('news_open',1)->where('news_back',0)->limit(4)->select();
//        $this->assign('mainnews',$mainnews);
        foreach($mainnews as $k => $v){
//            print_r($v['news_extra']);exit;
            $mainnews[$k]['news_time'] = intval(preg_replace('/\D/s', '', $v['news_extra']));
//            dump($mainnews[$k]['news_time']);dump(preg_replace('/\D/s', '', $v['news_extra']));exit;
//            print_r($v['news_extra']);exit;
        }
//        print_r($mainnews);exit;
//        $arr = strstr($mainnews[0]['news_extra'],':');
//        print_r($arr);exit;
//        $arr = preg_replace('/\D/s', '', $mainnews[0]['news_extra']);
//        print_r($arr);exit;
        $this->assign('mainnews',$mainnews);

        return $this->view->fetch(':index');
    }
}
