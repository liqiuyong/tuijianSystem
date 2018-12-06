<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/24
 * Time: 13:38
 */

namespace Common\Common;


use Think\Controller;

class AdminController extends Controller
{

    //先注释掉,上线后解开
    public function _initialize(){
        if (!session('user_id')){
            $this->redirect("http://__ROOT__/login");
            exit();
        }
        if(session('user_id')){
            $uid = session('user_id');
            $userModel = M('user');
            $res = $userModel->where('user_id=' . $uid)->find();
            if (!$res){
                $this->redirect("http://__ROOT__/login");
                exit();
            }
        }



//        $uid = session('user_id');
//        $userModel = M('user');
//        $user = $userModel->where('user_id=' . $uid)->find();
//        $this->user = $user;


    }

}