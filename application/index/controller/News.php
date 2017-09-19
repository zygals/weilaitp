<?php

namespace app\index\controller;

use app\common\model\Article;
use app\common\model\Base;
use app\common\model\Recruit;
use app\common\model\SeoSet;
use think\Controller;
use think\Request;

class News extends Controller
{
    public function index(Request $request)
    {
        $data=$request->param();

        $list_new_index= Article::getList(['index_show'=>1],['st'=>1],4);
        $list_new_1 =  Article::getList(['cate'=>1],['st'=>1],6);
        $list_new_2 =  Article::getList(['cate'=>2],['st'=>1],6);
        $list_new_3 =  Article::getList(['cate'=>3],['st'=>1],6);
        $list_new = Article::getList([],['st'=>1]);
        $seo = SeoSet::getSeoByNavId(4);
        $page_str = $list_new->render();
        $page_str = Base::getPageStr($data,$page_str);
        return $this->fetch('',compact('list_new_index','list_new_1','list_new_2','list_new_3','list_new','seo','page_str'));
    }
    public function get_list(Request $request){
       $data= $request->param();

        $list_new = Article::getList(['cate'=>$data['cate']],['st'=>1]);
        $page_str = $list_new->render();
        $page_str = Base::getPageStr($data,$page_str);
        return $this->fetch('list',['list_new'=>$list_new,'page_str'=>$page_str]);

    }
  public function read(Request $request){
        $data = $request->param();
        $row_ = Article::findOne($data['id']);
        if(!$row_){
            $this->error('暂无数据');
        }
        $seo = (object)[
            'title'=>$row_->name.'_'.$row_->cate.'_'.config('site_name'),
            'keywords'=>$row_->keywords,
            'description'=>$row_->description,
        ];
       // dump($row_->cate);exit;
        return $this->fetch('',['row_news'=>$row_,'seo'=>$seo]);

  }
    public function media()
    {

        return $this->fetch();
    }

    public function industry()
    {
        return $this->fetch();
    }

    public function dynamic()
    {
        return $this->fetch();
    }

    public function chuangke()
    {
        $this->view->engine->layout(false);
        return $this->fetch();
    }


}
