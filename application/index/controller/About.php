<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Recruit;
use think\Controller;
use think\Request;

class About extends Controller
{
    public function __construct(Request $request = null) {
        parent::__construct($request);
        $row_ad = Ad::getAdByPosition(5);
        $this->assign(['row_ad'=>$row_ad]);
    }

    public function index()
    {
       // $row_ad = Ad::getAdByPosition(5);
        return $this->fetch('');
    }

    public function service()
    {

        return $this->fetch();
    }

    public function law()
    {
        return $this->fetch();
    }

    public function job()
    {
        $list_recruit=Recruit::getList([],['st'=>1]);
        return $this->fetch('',['list_recruit'=>$list_recruit]);
    }

    public function contact()
    {
        return $this->fetch();
    }


}
