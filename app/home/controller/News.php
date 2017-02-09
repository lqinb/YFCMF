<?php

namespace app\home\controller;
use think\Db;
class News extends Base {
    //文章内页
    public function index() {





        $page=input('page',1);
        $news=Db::name('news')->alias("a")->join(config('database.prefix').'member_list b','a.news_auto =b.member_list_id')->where(array('n_id'=>input('id'),'news_open'=>1,'news_back'=>0))->find();
//        print_r($news);exit;
        if(empty($news)){
            $this->error(lang('operation not valid'));
        }
        $news_data=explode('_ueditor_page_break_tag_',$news['news_content']);
        $total=count($news_data);
        $news['content']=$news_data[$page-1];
        $news['page']='';
//        $news['news_pic_allurl'] = imageurl($news['news_pic_allurl']);
//        $news['news_pic_content'] = imagename($news['news_pic_content']);
        $news['news_pic_allurl'] = explode(',',$news['news_pic_allurl']);
        $news['news_pic_content'] = explode('|',$news['news_pic_content']);

//        print_r($news['news_pic_content']);exit;

        if($total>1){
            $prevbtn=($page<=1)?'<li class="disabled"><span>&laquo;</span></li>':'<li><a href="' . url('News/index',['id'=>input('id'),'page'=>($page-1)]) . '">&laquo;</a></li>';
            $nextbtn=($page>=$total)?'<li class="disabled"><span>&raquo;</span></li>':'<li><a href="' . url('News/index',['id'=>input('id'),'page'=>($page+1)]) . '">&raquo;</a></li>';
            $link=$this->getLinks($page,$total,input('id'));
            $news['page']=sprintf(
                '<ul class="pagination">%s %s %s</ul>',
                $prevbtn,
                $link,
                $nextbtn
            );
        }
//        获取当前文章所属菜单
        $menu=Db::name('menu')->find($news['news_columnid']);
        if(empty($menu)){
            $this->error(lang('operation not valid'));
        }
        $curmenuid = $menu['id'];
        $cpage_id =$menu['parentid'];
        $parmenu = Db::name('menu')->find($menu['parentid']);
        $submenu = Db::name('menu')->where('menu_open',1)->where('parentid',$parmenu['id'])->select();
        $pagetitle = $parmenu['menu_name'];
        $this->assign("parmenu",$parmenu);
        $this->assign("submenu",$submenu);
        $this->assign("pagetitle",$pagetitle);


        $this->assign('cpage_id',$cpage_id);
        $this->assign('list_id',$curmenuid);
//        print_r($menu);exit;
        $tplname=$menu['menu_newstpl'];
        $tplname=$tplname?$tplname:'news';
        //自行根据网站需要考虑，是否需要判断
        $can_do=check_user_action('news'.input('id'),0,false,60);
//        print_r($can_do);exit;
        if($can_do){
            //更新点击数
            Db::name('news')->update(array("n_id"=>input('id'),"news_hits"=>array("exp","news_hits+1")));
            $news['news_hits']+=1;
        }
//        获取文章的上一个和下一个
        $next=Db::name('news')->where(array("news_time"=>array("egt",$news['news_time']), "n_id"=>array('neq',input('id')),"news_open"=>1,'news_back'=>0,'news_columnid'=>$news['news_columnid']))->order("news_time asc")->find();
        $prev=Db::name('news')->where(array("news_time"=>array("elt",$news['news_time']), "n_id"=>array('neq',input('id')),"news_open"=>1,'news_back'=>0,'news_columnid'=>$news['news_columnid']))->order("news_time desc")->find();
//        文章是否开启评论功能
        $t_open=config('comment.t_open');
        if($t_open){
            //获取评论数据
            $comments=Db::name('comments')->alias("a")->join(config('database.prefix').'member_list b','a.uid =b.member_list_id')->where(array("a.t_name"=>'news',"a.t_id"=>input('id'),"a.c_status"=>1))->order("a.createtime ASC")->select();
            $count=count($comments);
            $new_comments=array();
            $parent_comments=array();
            if(!empty($comments)){
                foreach ($comments as $m){
                    if($m['parentid']==0){
                        $new_comments[$m['c_id']]=$m;
                    }else{
                        $path=explode("-", $m['path']);
                        $new_comments[$path[1]]['children'][]=$m;
                    }
                    $parent_comments[$m['c_id']]=$m;
                }
            }
            $this->assign("count",$count);
            $this->assign("comments",$new_comments);
            $this->assign("parent_comments",$parent_comments);
        }
//        print_r($news);exit;
        $this->assign("t_open",$t_open);
        $this->assign($news);
        $this->assign('menu',$menu);
        $this->assign("next",$next);
        $this->assign("prev",$prev);
        return $this->view->fetch(":$tplname");
    }

}