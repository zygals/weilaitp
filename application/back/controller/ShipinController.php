<?php

namespace app\back\controller;

use app\common\model\Shipin;
use app\common\model\CateShipin;
use app\common\model\Base;

use app\common\model\Func;
use think\Request;


class ShipinController extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->assign(['modelName'=>'视频']);
    }

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
//        return 111;
        $data = $request->param();
        $list_ = Shipin::getList($data);
        $page_str = $list_->render();
        $page_str = Base::getPageStr($data,$page_str);
        $url = $request->url();
        $list_cate = CateShipin::getList();
        return $this->fetch('index', ['list_' => $list_,'list_cate'=>$list_cate,'url'=>$url,'page_str'=>$page_str]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {
        $list_cate = CateShipin::getList();
        $list_func  = Func::getList();
        $img_big_show = 'none';
        return $this->fetch('',['act'=>'save','list_cate'=>$list_cate,'list_func'=>$list_func,'img_big_show'=>$img_big_show]);

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
       //dump($request->param());exit;
        $data = $request->param();
        $res = $this->validate($data,"ShipinValidate");
        if ($res !== true) {
            $this->error($res);
        }
        $file = $request->file('img');

        if (empty($file)) {
            $this->error('请上传图片或检查图片大小！');
        }

        $size = $file->getSize();
        if ($size > config('upload_size')) {
            $this->error('图片大小超过限定！');
        }

        $path_name = 'shipin';
        $arr = $this->dealImg($file, $path_name);
        $data['img'] = $arr['save_url_path'];
        if($data['index_show']==1){
            $file2 = $request->file('img_index');

            if (empty($file2)) {
                $this->error('请上传大图或检查图片大小！');
            }
            $size = $file2->getSize();
            if ($size > config('upload_size')) {
                $this->error('大图图片大小超过限定！');
            }
            $arr = $this->dealImg($file2, $path_name);
            $data['img_index'] = $arr['save_url_path'];

        }
        $Article = new Shipin();
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
        $row_ = $this->findById($data['id'],new Shipin());

        $list_cate = CateShipin::getList();

        $referer = $request->header()['referer'];
        $img_big_show = $row_->getData('index_show')?'block':'none';
        return $this->fetch('create',['act'=>'update','row_'=>$row_,'referer'=>$referer,'list_cate'=>$list_cate,'img_big_show'=>$img_big_show]);
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
        $res = $this->validate($data,'ShipinValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $row_ = $this->findById($data['id'],new Shipin());
        $file = $request->file('img');
        $path_name = 'shipin';

        if(!empty($file)){
            $size = $file->getSize();
            if ($size > config('upload_size') ) {
                $this->error('图片大小超过限定！');
            }
            $this->deleteImg($row_->img);
            $arr = $this->dealImg($file, $path_name);
            $data['img'] = $arr['save_url_path'];
        }

        $file2 = $request->file('img_index');
        if($row_->index_show=='是'){

            if($data['index_show']==1){
                if (!empty($file2)) {
                    $size = $file2->getSize();
                    if ($size > config('upload_size')) {
                        $this->error('大图图片大小超过限定！');
                    }
                    $this->deleteImg($row_->img_index);
                    $arr = $this->dealImg($file2, $path_name);
                    $data['img_index'] = $arr['save_url_path'];
                }
            }else{
                $this->deleteImg($row_->img_index);
            }
        }else{
            if($data['index_show']==1){
                if (empty($file2)) {
                    $this->error('请上传大图或检查图片大小！');
                }
                $size = $file2->getSize();
                if ($size > config('upload_size')) {
                    $this->error('大图图片大小超过限定！');
                }
                $arr = $this->dealImg($file2, $path_name);
                $data['img_index'] = $arr['save_url_path'];
            }
        }

        if($this->saveById($data['id'],new Shipin(),$data)){

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
        if( $this->deleteStatusById($data['id'],new Shipin())){
            $this->success('删除成功', $data['url'], '', 1);
        }else{
            $this->error('删除失败', $data['url'], '', 3);
        }
    }


}
