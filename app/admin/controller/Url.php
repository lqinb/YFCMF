<?php
// +----------------------------------------------------------------------
// | YFCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2016 http://www.rainfer.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: rainfer <81818832@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;
use think\Db;
use think\Cache;
use think\helper\Time;
class Url extends Base
{
    public function index() {

        $u_id = input('u_id');
//        print_r($u_id);exit;

        switch ($u_id){
//            id 为1 修改公司信息
            case 1:
                $this->redirect('Sys/sys');
//                $this->redirect('Sys/sys', ['cate_id' => 2]);
//                http://yfcmf.com/admin/sys/sys.html
                break;
//            发布文章
            case 2:
                $this->redirect('News/news_add');
                break;
//            文章列表
            case 3:
                $this->redirect('News/news_list');
                break;
//            企业简介修改
            case 4:
                $this->redirect('Intro/summary');
                break;
//            为某个栏目添加文章
            case 5:
                $this->redirect('Intro/honor');
                break;
//            经营理念
            case 6:
                $this->redirect('Culture/idea');
                break;
//            企业精神
            case 7:
                $this->redirect('News/news_menu_edit', ['id' => 26]);
                break;
            //            行为准则
            case 8:
                $this->redirect('News/news_menu_edit', ['id' => 27]);
                break;
            //            轮播广告
            case 9:
                $this->redirect('Plug/plug_ad_list');
                break;
            //            滚动通知
            case 10:
                $this->redirect('Notice/sub');
                break;
//            菜单管理
            case 11:
                $this->redirect('News/news_menu_list');
                break;
            //            管理员管理
            case 12:
                $this->redirect('Sys/admin_list');
                break;
            //            联系我们
            case 13:
                $this->redirect('News/news_menu_edit', ['id' => 29]);
                break;

//            自定义模版 通过signal传入 和｛if｝标签 实现内容页面自定义显示
            case 227:
                $this->redirect('News/news_add', ['signal' => 1]);
                break;
            default:
                echo "No number between 1 and 3";
        }


    }

    }