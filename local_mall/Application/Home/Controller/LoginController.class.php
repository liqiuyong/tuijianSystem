<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/31
 * Time: 18:55
 */

namespace Home\Controller;


use Think\Controller;

class LoginController extends Controller
{

    public function signin(){

        $this->display();
    }

    public function login_in(){

        if ($_POST['gm_id'] && $_POST['password']){

            $login_data['gm_id'] = isset($_POST['gm_id']) ? trim($_POST['gm_id']) : '';
            $login_data['password'] = isset($_POST['password']) ? trim($_POST['password']) : '';

            if (empty($login_data['gm_id'])){
                $data['msg'] = "请输入用户名";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }
            if (empty($login_data['password'])){
                $data['msg'] = "请输入密码";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }

            $login_data['password'] = md5(md5($login_data['password']));

            $gm_user_model = M('gm_user');

            $res = $gm_user_model->where($login_data)->find();

            if ($res){
                $_SESSION['gm_id'] = $login_data['gm_id'];
                $data['msg'] = "登陆成功";
                $data['status'] = 1;
                $this->ajaxReturn($data);
            }else{
                $data['msg'] = "登陆失败";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }

        }




    }


}