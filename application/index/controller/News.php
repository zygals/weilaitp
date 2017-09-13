<?php

namespace app\index\controller;

use think\Controller;

class News extends Controller
{
    public function index()
    {

        return $this->fetch();
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
