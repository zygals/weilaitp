<?php
namespace app\index\controller;

use think\Controller;

class Yewu extends Controller
{
    public function index()
    {

        return $this->fetch();
    }
  public function yingxiao(){

      return $this->fetch('index');
  }
  public function tuoguan(){
      return $this->fetch();
  }
  public function qyy(){
      $this->view->engine->layout('layout/qyy');
      return $this->fetch();
  }

}
