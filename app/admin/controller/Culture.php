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
class Culture extends Base {
    public function idea() {

        $menu=Db::name('menu')->where(array('id'=>25))->find();
//        print_r($menu);exit;
        $model=Db::name('model')->select();
        $this->assign('model',$model);
        $this->assign('menu',$menu);
//        $this->assign('tpls',$this->tpls);
        return $this->fetch('Culture/index');
    }

    public function honor() {

        $menu=Db::name('menu')->where(array('id'=>24))->find();
        $model=Db::name('model')->select();
        $this->assign('model',$model);
        $this->assign('menu',$menu);
        return $this->fetch();
    }

    public function news_menu_runedit() {
        $lang_list=input('lang_list');
        if (!request()->isAjax()){
            $this->error('提交方式不正确',url('news_menu_list',array('menu_l'=>$lang_list)));
        }else{
            $checkpic=input('checkpic');
            $oldcheckpic=input('oldcheckpic');
            $img_url='';
            if ($checkpic!=$oldcheckpic){
                $file = request()->file('file0');
                if(!empty($file)){
                    if(config('storage.storage_open')){
                        //七牛
                        $upload = \Qiniu::instance();
                        $info = $upload->upload();
                        $error = $upload->getError();
                        if ($info) {
                            $img_url= config('storage.domain').$info[0]['key'];
                        }else{
                            $this->error($error,url('news_menu_list',array('menu_l'=>$lang_list)));//否则就是上传错误，显示错误原因
                        }
                    }else{
                        $validate=config('upload_validate');
                        $info = $file->validate($validate)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                        if($info) {
                            $img_url=config('upload_path'). '/' . date('Y-m-d') . '/' . $info->getFilename();
                            //写入数据库
                            $data['uptime']=time();
                            $data['filesize']=$info->getSize();
                            $data['path']=$img_url;
                            Db::name('plug_files')->insert($data);
                        }else{
                            $this->error($file->getError(),url('news_menu_list',array('menu_l'=>$lang_list)));//否则就是上传错误，显示错误原因
                        }
                    }
                }
            }
            $data=array(
                'id'=>input('id'),
                'menu_seo_title'=>input('menu_seo_title'),
                'menu_seo_key'=>input('menu_seo_key'),
                'menu_seo_des'=>input('menu_seo_des'),
                'menu_content'=>htmlspecialchars_decode(input('menu_content')),
            );

            $rst=Db::name('menu')->update($data);
            if($rst!==false){
                cache('site_nav_main',null);
                $this->success('修改成功',url('Admin/Index/index'));
            }else{
                $this->error('修改失败',url('Admin/Index/index'));
            }
        }
    }
}