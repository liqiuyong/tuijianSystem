<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;


class UserController extends Controller {


    //    注册页面
    public function register(){


        if ($_POST){

            $data = array();
            $checkbox = $_POST['checkbox'];
            $data['phone'] = trim($_POST['phone']);
            $verify_code = trim($_POST['verify_code']);
            $phone_code = trim($_POST['phone_code']);
            $data['password'] = trim($_POST['password']);
            $re_password = trim($_POST['re_password']);

            //获取注册IP, 注册时间
            $data['reg_ip'] = get_client_ip();
            $data['addtime'] = time();
            $data['year_month'] = date('Ym', $data['addtime']);
            $data['reg_day'] = date('j', $data['addtime']);
            $data['reg_hour'] = date('G', $data['addtime']);


            $user_model = M('user');


            //用户协议
            if ($checkbox == "false") {
                $this->ajax_msg('请同意用户协议',0);
            }



            //推荐码验证
            if (!empty($_POST['invite_code'])) {
                if (strlen($_POST['invite_code']) < 1) {
                    $this->ajax_msg("推荐码不能为空!",0);
                }

                if (strlen($_POST['invite_code']) > 6){
                    $this->ajax_msg("推荐码错误!",0);
                }
                //查找对应推荐人是否存在
                $res = $user_model->where('invite_code ='.trim($_POST['invite_code']))->find();
                if ($res){
//                    $data['user_id'] = $res['pid'];
                    $data['pid'] = $res['user_id'];
                }else{
                    $this->ajax_msg("推荐码错误!",0);
                }
            }else{
                $this->ajax_msg("推荐码不能为空!",0);
            }

            //手机号码验证
            if (isset($_POST['phone'])) {
                if (empty($data['phone']) || !$this->check_phone($data['phone'])) {
                    $this->ajax_msg('请输入正确的手机号码',0);
                }

                $res = $user_model->where('phone ='.trim($_POST['phone']))->find();
                if ($res){
                    $this->ajax_msg('该手机用户已存在',0);
                }
            }

            //手机验证码校验

            if (empty(session('phone_code'))) {
                $this->ajax_msg("请先获取短信验证码");
            }

            if ($_POST['phone'] . '-' . $phone_code != session('phone_code')) {
                $this->ajax_msg("验证码错误!");
            }




            //密码校验
            if (isset($_POST['password'])){
                if (strlen($data['password'])>20 || strlen($data['password'])<6)

                {
                    $this->ajax_msg( "密码必须为6-20位的字符串",0);

                }

                if(preg_match("/^\d*$/",$data['password']))

                {
                    $this->ajax_msg( "密码必须包含字母",0);//全数字
                }

                if(preg_match("/^[a-z]*$/i",$data['password']))

                {
                    $this->ajax_msg( "密码必须包含数字",0);//全字母
                }


                if(!preg_match("/^[a-z\d]*$/i",$data['password']))
                {
                    $this->ajax_msg( "密码只能包含数字和字母",0);//有数字有字母 ";
                }

            }

            if ($data['password'] != $re_password){
                $this->ajax_msg( "两次密码不一致",0);//有数字有字母 ";
            }

//            密码加密
            $data['password'] = md5(md5($data['password']));



            //验证码校验
            $res = $this->check_code($verify_code);
            if ($res != true ){
                $this->ajax_msg( "验证码错误",0);
            }

            $res = $user_model->data($data)->add();
            if ($res){

                // 存入session
//                $_SESSION['user_id'] = $res;
//                session('user_id') = $res;
                session('user_id',$res);
                $this->ajax_msg( "注册成功",1);
            }else{
                $this->ajax_msg( "注册失败",0);
            }


        }

        if ($_GET['invite_code']){
            $this->assign('invite_code',$_GET['invite_code']);
        }

        $this->display();
    }




    // 登陆界面
    public function login(){

        if ($_POST){
//            $this->ajax_msg($_POST);
            $username = $_POST['username'];
            $password = $_POST['password'];
            $verify_code = $_POST['verify_code'];


            if (empty($username)) {
                $data['status'] = 0;
                $data['msg'] = '请输入用户名';
                $this->ajaxReturn($data);
            }

            if (empty($password)) {
                $data['status'] = 0;
                $data['msg'] = '请输入用户密码';
                $this->ajaxReturn($data);
            }

            if (empty($verify_code)) {
                $data['status'] = 0;
                $data['msg'] = '请输入验证码';
                $this->ajaxReturn($data);
            }

            //校验验证码
            $res = $this->check_code($verify_code);
            if ($res){
                //验证码正确....继续
                $user_model = M("user");
                $user_info = $user_model->where("phone = ".$username)->find();

                if (empty($user_info)) {
                    $data['status'] = 0;
                    $data['msg'] = '没有该用户';
                    $this->ajaxReturn($data);
                }

                if ($user_info['password'] != md5(md5($password))) {
                    $data['status'] = 0;
                    $data['msg'] = '用户名或密码错误';
                    $this->ajaxReturn($data);
                }

                $_SESSION['user_id'] = $user_info['user_id'];
                $data['status'] = 1;
                $data['msg'] = '登录成功';
                $this->ajaxReturn($data);
            }else{
                $data['status'] = 0;
                $data['msg'] = '验证码错误';
                $this->ajaxReturn($data);
            }

        }


        $this->display();
    }


    /**
     * 退出登陆
     * @return [type] [description]
     */
    public function logout()
    {

            session('user_id',null);
            $data['msg'] = "注销成功!";
            $data['status'] = 1;
            $this->ajaxReturn($data);
            if (empty($_SESSION['user_id'])){
                $data['msg'] = "注销成功!";
                $data['status'] = 1;
                $this->ajaxReturn($data);
            }else{
                $data['msg'] = "注销失败!";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }



    }


    /**
     * 获取手机短信验证码
     */
    public function get_phoneCode(){

        if (isset($_POST['phone'])){
            $phone  = trim($_POST['phone']);
            //检验号码
            if (empty($phone) || !check_phone($phone)){
                $data['msg'] = "请输入正确的手机号码";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }

            $user_model = M('user');
            $res = $user_model->where('phone ='.$phone)->find();
            if ($res){
                $data['msg'] = "该手机已被注册";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }else{
                //发送短信验证码
                $code = rand(1111,9999);
                session('phone_code',$phone.'-'.$code);
//                $data['msg'] = session('phone_code');
                //              发送验证码
                $res = $this->sendsms($phone,$code);
                $data['msg'] = '验证码已发送';
                $data['status'] = 1;
                $this->ajaxReturn($data);

            }

        }

    }










    public function ajax_msg($msg = '', $type = '0')
    {
        if (!$msg) {
            return false;
        }
        if ($type == 0) {
            $data['status'] = 0;
        } else if ($type == 1) {
            $data['status'] = 1;
        } else {
            $data['status'] = $type;
        }
        $data['msg'] = $msg;
        $this->ajaxReturn($data);
    }


    public function ajax_msg_jsonp($msg = '', $type = '0')
    {
        if (!$msg) {
            return false;
        }
        if ($type == 0) {
            $data['status'] = 0;
        } else if ($type == 1) {
            $data['status'] = 1;
        } else {
            $data['status'] = $type;
        }
        $data['msg'] = $msg;
        $this->ajaxReturn($data,'jsonp');
    }


    /**
     * 验证手机格式
     * @author linjunbin
     */
    public function check_phone($phone) {
        $pattern = "/1[345789]{1}\d{9}$/";
        return preg_match($pattern, $phone);
    }

    /**
     * 获取验证码
     * @return [type] [description]
     */
    public function get_code(){
        $verify = new Verify();
        $verify->codeSet = '0123456789';
        $verify->fontSize = 50;
        $verify->length   = 4;
        $verify->useCurve = false;
        //生成验证码
        $verify->entry();
    }
    /**
     *  检测验证码
     * @return [type] [description]
     */

    function check_code($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }


    /**
     *  检查身份证号码
     */
    public function check_id_card($id_card = '') {
        return ( preg_match("/^\w{18}$/i", $id_card) || preg_match("/^\d{15}$/i", $id_card) );
    }


    /**
     * @param $tel_number 接收短信验证手机号
     * @param $code 短信验证码
     */
    public function sendsms($tel_number,$code){
        Vendor('AliyunSMS.aliyun');
        $sms = new \Aliyun();
        $resp = $sms->template('user_auth')  // 短信模板
        ->to($tel_number) // 手机号
        ->templateParam('code', $code) // 短信模板内参数
        ->send();
        if($resp->Code !== 'OK') {
            //短信发送失败
            return false;
        }else{
            //短信发送成功
            return true;
        }
    }



}