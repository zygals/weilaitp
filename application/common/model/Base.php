<?php

namespace app\common\model;

use think\Model;

class Base extends model {
    //分页点击时有查询参数
    public static function getPageStr($data,$page_str) {
        if(isset($data['page'])){
            unset($data['page']);
        }
        if(count($data)>0){

            $query_str = '';
            foreach($data as $k=>$v){
                $query_str.= $k.'='.$v.'&';
            }
            $page_str = preg_replace("/(page=)/im", $query_str.'page=', $page_str);
        }
        return $page_str;
    }
    protected static function getListCommon($data=[],$where = ['st' => ['<>', 0]]){

        $order = "create_time desc";

        if (!empty($data['title'])) {
            $where['title'] = ['like', '%' . $data['title'] . '%'];
        }
        if (!empty($data['paixu'])) {
            $order = $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->paginate();

        return $list_;
    }


}