<?php

namespace app\index\controller;

use app\common\model\Article;
use app\common\model\Recruit;
use think\Controller;
use think\Request;

class News extends Controller
{
    public function index()
    {

        $list_new_index= Article::getList(['index_show'=>1],['st'=>1],4);
        $list_new_1 =  Article::getList(['cate'=>1],['st'=>1],6);
        $list_new_2 =  Article::getList(['cate'=>2],['st'=>1],6);
        $list_new_3 =  Article::getList(['cate'=>3],['st'=>1],6);
        $list_new = Article::getList([],['st'=>1]);
        //dump($list_new_index);
        return $this->fetch('',compact('list_new_index','list_new_1','list_new_2','list_new_3','list_new'));
    }
    public function get_list(Request $request){
       $data= $request->param();

        $list_new = Article::getList(['cate'=>$data['cate']],['st'=>1]);

        return $this->fetch('list',['list_new'=>$list_new]);

    }
  public function read(Request $request){
        $data = $request->param();
        $row_ = Article::findOne($data['id']);
        if(!$row_){
            $this->error('暂无数据');
        }
       // dump($row_->cate);exit;
        return $this->fetch('',['row_news'=>$row_]);

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
