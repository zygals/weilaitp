<?php

namespace app\back\controller;

use app\common\model\Anli;
use think\Request;
use app\common\model\CateAnli;

class CateAnliController extends BaseController {

    public function index(Request $request) {
        $data = $request->param();
        $list_ = CateAnli::getList($data);
        $url = $request->url();
        return $this->fetch('',['list_'=>$list_,'url'=>$url]);
    }

    public function create() {

            return $this->fetch('', ['title'=>'添加案例分类','act'=>'save']);
    }

    public function save(Request $request) {
        $data = $request->param();
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if((new CateAnli())->save($data)){
            $this->success('添加成功','index','',1);
        }else{
            $this->error('添加出错');
        }

    }

    public function edit(Request $request) {
        $data = $request->param();
        $referer= $request->header()['referer'];
        //dump($referer);
        $row_ = $this->findById($data['id'],new CateAnli());
        return $this->fetch('create',['row_'=>$row_,'referer'=>$referer,'title'=>'添加案例分类','act'=>'update']);

    }

    public function update(Request $request) {
        //return 233;
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if($this->saveById($data['id'],new CateAnli(),$data)){
            $this->success('修改成功', $referer, '', 1);
        }else{
            $this->error('没有修改内容', $referer);
        }
    }

    public function delete(Request $request) {
        $data = $request->param();
         $list_good = Anli::getListByCateId($data['id']);
        if(count($list_good)>0){
            $this->error('分类下有案例，不能直接删除');
        }
        if ($this->deleteStatusById($data['id'], new CateA())) {
            $this->success('删除成功', $data['url'], '', 1);
        } else {
            $this->error('删除失败', $data['url']);
        }
    }
}
