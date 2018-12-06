<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/31
 * Time: 19:33
 */

namespace Common\Common;


use Think\Controller;

class HomeController extends Controller
{

    public function _initialize(){
        if (!session('gm_id')){
            $this->redirect("http://__ROOT__/Home/login/signin");
            exit();
        }
    }

}