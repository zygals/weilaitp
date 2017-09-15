<?php

namespace app\back\controller;

use app\common\model\Base;
use app\common\model\Recruit;
use think\Request;


class RecruitController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
        $data = $request->param();
        $list_ = Recruit::getList($data);
        $page_str = $list_->render();
        $page_str = Base::getPageStr($data,$page_str);
        $url = $request->url();
        return $this->fetch('index', ['list_' => $list_,'url'=>$url,'page_str'=>$page_str]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {

        return $this->fetch('',['title'=>'添加资讯','act'=>'save']);

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
       // dump($request->param());exit;
        $data = $request->param();
        $res = $this->validate($data,"RecruitValidate");
        if ($res !== true) {
            $this->error($res);
        }
        $Article = new Recruit();
        $Article->save($data);
        $this->success('添加成功', 'index', '', 1);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request) {
//       return 23;
        $data = $request->param();
        $row_ = $this->findById($data['id'],new Recruit());
        $referer = $request->header()['referer'];
        return $this->fetch('',['act'=>'update','title'=>'修改资讯 '.$row_->name,'row_'=>$row_,'referer'=>$referer]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request) {
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'RecruitValidate');
        if ($res !== true) {
            $this->error($res);
        }

        if($this->saveById($data['id'],new Recruit(),$data)){

            $this->success('编辑成功', $referer, '', 1);
        }else{
            $this->error('编辑失败', $referer, '', 3);
        }
    }
    /**
     * soft-delete 指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete(Request $request) {
        $data = $request->param();
        if( $this->deleteStatusById($data['id'],new Recruit())){
            $this->success('删除成功', $data['url'], '', 1);
        }else{
            $this->error('删除失败', $data['url'], '', 3);
        }
    }


}
