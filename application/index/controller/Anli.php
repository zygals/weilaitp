<?php

namespace app\index\controller;

use think\Controller;

class Anli extends Controller
{
    public function index()
    {

        return $this->fetch();
    }

    public function yingxiao()
    {

        return $this->fetch();
    }

    public function tuoguan()
    {
        return $this->fetch();
    }

    public function guanjia()
    {
        return $this->fetch();
    }

    public function website()
    {
        return $this->fetch();
    }

    public function app()
    {
        return $this->fetch();
    }

    public function qyy()
    {
        //用自己的布局
        $this->view->engine->layout('layout/qyy');
        return $this->fetch();
    }


}
