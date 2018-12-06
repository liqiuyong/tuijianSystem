<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/28
 * Time: 11:01
 */

namespace Admin\Controller;


use Common\Common\AdminController;
use Think\Controller;
use Think\Model;
use Think\Page;
use Think\Upload;

class PhoneController extends AdminController
{

//    public function index(){
//        $this->display();
//    }


    public function index_m(){
        $this->display();
    }


    // 检查是否有完善信息
    public function is_checked(){

        if (session('user_id')){
            $uid = session('user_id');
            $userModel = M('user');
            $user = $userModel->where('user_id=' . $uid)->find();

            if ($user){
                if ($user['is_checked'] == 2){
                    $this->ajax_msg('请先完善个人信息');
                }
            }
        }
    }


    //检查是否已经实名认证了
    public function is_realCheck(){
        if (session('user_id')){
            $uid = session('user_id');
            $userModel = M('user');
            $user = $userModel->where('user_id=' . $uid)->find();

            if ($user){
                if ($user['is_checked'] == 2){
                    $this->redirect("http://__ROOT__/geren_m");
                    exit();
                }
            }
        }



    }




    //积分商城
    public function jifen_mall(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);
        $this->display();

    }

    //拍卖行
    public function paimai(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);
        $this->display();
    }

    //报单
    public function baodan(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);
        $this->display();

    }

    //报单明细
    public function baodan_detail(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);
        $this->display();
    }

    //道具商城
    public function tool_mall(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);
        $this->display();
    }



    //    首页
    public function index()
    {
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);

        $this->display();
    }

    //    财务页面
    public function caiwu()
    {

        $this->is_realCheck();
        if (session('user_id')) {
            $uid = session('user_id');
            $userModel = M('user');
            $user = $userModel->where('user_id=' . $uid)->find();

            $walletModel = M('wallet');
            $wallet = $walletModel->where('user_id=' . $uid)->find();

            $this->assign('user', $user);
            $this->assign('wallet', $wallet);


        }


        $this->display();
    }

    //推荐详情
    public function tuijian_detail(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);

        if ($_GET['pid']){
            $map = [];
            foreach ($_GET as $k => $v){
                if (!empty($v)){
                    $map[$k] = $v;
                }
            }


            $pid = $_GET['pid'];
            $userModel = M('user');
//            $userlist = $userModel->where('pid=' . $pid)->select();
//            $this->assign('userlist', $userlist);





            $count      = $userModel->where($map)->count();// 查询满足要求的总记录数
            $Page       = new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数

            $show       = $Page->show();// 分页显示输出

            //分页显示改成链接带 get参数的形式
            $show_new = str_replace("/index.php/Admin-old/Index/tuijian_detail/m/admin","?",$show);
            $show_new = str_replace("/pid/","&pid=",$show_new);
            $show_new = str_replace("/p/","&p=",$show_new);
            $show_new = str_replace("/jibie/","&jibie=",$show_new);


            $userlist = $userModel->where($map)->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

            $this->assign('userlist', $userlist);// 赋值数据集


            $this->assign('page',$show_new);// 赋值分页输出
            $this->assign('count',$count);// 查询记录数

        }


        $this->display();
    }

    // 推荐页面
    // 推荐页面
    public function tuijian()
    {
        $this->is_realCheck();
        if (session('user_id')) {
            $pid = session('user_id');
            $userModel = M('user');
            $user = $userModel->where('user_id=' . session('user_id'))->find();

            $this->assign('user',$user);


            //有效人数,已认证---- 一级推荐
            $userlsit_1 = $userModel->where('pid='.$pid)->select();

            $count      = $userModel->where('pid='.$pid)->count();// 查询满足要求的总记录数


            $Page = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(10)
            $Page->lastSuffix=false;

            $Page->setConfig('header','<div></div><ul style="margin-top: 0px"><li class="totalPage"><span>第</span><input value="%NOW_PAGE%" >页</li><li class="totalPage">共%TOTAL_PAGE%页</li></ul>');
            $Page->setConfig('first','<img src="/Public/Admin/images/img/shouye.png">');
            $Page->setConfig('prev','<img src="/Public/Admin/images/img/shangyiye.png">');
            $Page->setConfig('next','<img src="/Public/Admin/images/img/xiayiye.png">');
            $Page->setConfig('last','<img src="/Public/Admin/images/img/weiye.png" width="100%">');
            $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $Page->rollPage=5;// 分页栏每页显示的页数

            $show       = $Page->show();// 分页显示输出
            //分页显示改成链接带 get参数的形式
            $show_new = str_replace("Admin/Phone/tuijian/m/admin/p/","tuijian_m.html?p=",$show);


            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $userlsit_1 = $userModel->where('pid='.$pid)->limit($Page->firstRow.','.$Page->listRows)->select();
//            $order = $order_model->where('user_id = '.session('user_id'))->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('userlist_1',$userlsit_1);// 赋值数据集

            $this->assign('page',$show_new);// 赋值分页输出

            $userlist_1_checked = $userModel->where(["pid" => $pid, "is_checked" => 1])->select();
            $userlist_1_unchecked = $userModel->where(["pid" => $pid, "is_checked" => 2])->select();

            $userlist_1_checked_count = 0;
            $userlist_1_unchecked_count = 0;
            $userlist_1_checked_count = count($userlist_1_checked); //已认证人数
            $userlist_1_unchecked_count = count($userlist_1_unchecked); //未认证人数
            $userlist_1_totle = $userlist_1_checked_count + $userlist_1_unchecked_count; //总计
            $user_1_arr[0] = $userlist_1_totle;
            $user_1_arr[1] = $userlist_1_checked_count;
            $user_1_arr[2] = $userlist_1_unchecked_count;


            $this->assign('user_1_arr', $user_1_arr);

//            二级推荐
//            $userlist_2 = [];
//            foreach ($userlsit_1 as $v){
//                $res = $userModel->where('pid='.$v['user_id'])->select();
//                $userlist_2 = array_merge($userlist_2,$res);
//            }
//
//            $userlist_2_totle = count($userlist_2);
//            $userlist_2_checked_count = 0;
//            $userlist_2_unchecked_count = 0;
//            foreach ($userlist_2 as $v){
//                if ($v['is_checked'] == 2){
//                    $userlist_2_unchecked_count++;
//                }else{
//                    $userlist_2_checked_count++;
//                }
//            }
//
////            $userlist_2_checked_count = 0;
////            $userlist_2_unchecked_count = 0;
////            foreach ($userlist_1_checked as $v) {
////                $count1 = count($userModel->where(["pid" => $v['user_id'], "is_checked" => 1])->select());
////                $count2 = count($userModel->where(["pid" => $v['user_id'], "is_checked" => 2])->select());
////                $userlist_2_checked_count += $count1;
////                $userlist_2_unchecked_count += $count2;
////            }
////            $userlist_2_totle = $userlist_2_checked_count + $userlist_2_unchecked_count;
//
//
//
//            $user_2_arr[0] = $userlist_2_totle;
//            $user_2_arr[1] = $userlist_2_checked_count;
//            $user_2_arr[2] = $userlist_2_unchecked_count;
//            $this->assign('user_2_arr', $user_2_arr);
//            $this->assign('userlist_2', $userlist_2);

        }

        $uid = session('user_id');
        $userModel = M('user');
        $this->user = $userModel->where('user_id=' . $uid)->find();
        $this->display();
    }

    // 二级推荐页面
    public function tuijian_2()
    {
        $this->is_realCheck();
        if (session('user_id')) {
            $pid = session('user_id');
            $userModel = M('user');
            $user = $userModel->where('user_id=' . session('user_id'))->find();

            $this->assign('user',$user);


            $userlsit_1 = $userModel->where('pid='.$pid)->select();


//            二级推荐
            $userlist_2 = [];
            foreach ($userlsit_1 as $v){
                $res = $userModel->where('pid='.$v['user_id'])->select();
                $userlist_2 = array_merge($userlist_2,$res);
            }







            $userlist_2_totle = count($userlist_2);
            $userlist_2_checked_count = 0;
            $userlist_2_unchecked_count = 0;
            foreach ($userlist_2 as $v){
                if ($v['is_checked'] == 2){
                    $userlist_2_unchecked_count++;
                }else{
                    $userlist_2_checked_count++;
                }
            }

//            $userlist_2_checked_count = 0;
//            $userlist_2_unchecked_count = 0;
//            foreach ($userlist_1_checked as $v) {
//                $count1 = count($userModel->where(["pid" => $v['user_id'], "is_checked" => 1])->select());
//                $count2 = count($userModel->where(["pid" => $v['user_id'], "is_checked" => 2])->select());
//                $userlist_2_checked_count += $count1;
//                $userlist_2_unchecked_count += $count2;
//            }
//            $userlist_2_totle = $userlist_2_checked_count + $userlist_2_unchecked_count;



            $user_2_arr[0] = $userlist_2_totle;
            $user_2_arr[1] = $userlist_2_checked_count;
            $user_2_arr[2] = $userlist_2_unchecked_count;
            $this->assign('user_2_arr', $user_2_arr);



            $count=count($userlist_2);
            $Page=new Page($count,6);
            $userlist_2=array_slice($userlist_2,$Page->firstRow,$Page->listRows);

            $Page->lastSuffix=false;

            $Page->setConfig('header','<div></div><ul style="margin-top: 0px"><li class="totalPage"><span>第</span><input value="%NOW_PAGE%" >页</li><li class="totalPage">共%TOTAL_PAGE%页</li></ul>');
            $Page->setConfig('first','<img src="/Public/Admin/images/img/shouye.png">');
            $Page->setConfig('prev','<img src="/Public/Admin/images/img/shangyiye.png">');
            $Page->setConfig('next','<img src="/Public/Admin/images/img/xiayiye.png">');
            $Page->setConfig('last','<img src="/Public/Admin/images/img/weiye.png" width="100%">');
            $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $Page->rollPage=5;// 分页栏每页显示的页数

            $show       = $Page->show();// 分页显示输出
            //分页显示改成链接带 get参数的形式
            $show_new = str_replace("Admin/Phone/tuijian_2/m/admin/p/","tuijian_2_m.html?p=",$show);

            $this->assign('page',$show_new);// 赋值分页输出


            $this->assign('userlist_2', $userlist_2);

        }

        $uid = session('user_id');
        $userModel = M('user');
        $this->user = $userModel->where('user_id=' . $uid)->find();
        $this->display();
    }





    //个人页面
    public function geren()
    {
        if ($_POST) {
            $real_name = isset($_POST['real_name']) ? trim($_POST['real_name']) : '';
            $real_card = isset($_POST['real_card']) ? trim($_POST['real_card']) : '';
            $bank_name = isset($_POST['bank_name']) ? trim($_POST['bank_name']) : '';
            $bank_card = isset($_POST['bank_card']) ? trim($_POST['bank_card']) : '';
            $img1 = isset($_POST['img1']) ? trim($_POST['img1']) : '';
            $img2 = isset($_POST['img2']) ? trim($_POST['img2']) : '';
            $user_model = M('user');

//            if (empty($img1)) {
//                $this->ajax_msg("请上传身份证正面");
//
//            }
//            if (empty($img2)) {
//                $this->ajax_msg("请上传身份证反面");
//
//            }
            if (empty($real_card)) {
                $this->ajax_msg("请输入身份证号码");
            }

//            $res = $user_model->where('real_card =' . $real_card)->find();
            $res = $user_model->where(['real_card' => $real_card])->find();
            if ($res){
                if ($res['user_id'] != session('user_id')){
                    $this->ajax_msg("该身份证号码已注册过");
                }
            }


            if (!$this->check_id_card($real_card)) {
                $this->ajax_msg("请输入正确的身份证号码");
            }


            if (strlen($real_name) > 15) {
//                dump("输入字符长度过长");
                $this->ajax_msg("输入字符长度过长");
            }
            if (!$this->isChineseName($real_name)) {
                $this->ajax_msg("请输入正确的姓名");
            }
            if (!$this->checkBankCard($bank_card)) {
                $this->ajax_msg("请输入正确的银行卡号");
            }
            if (empty($bank_name)) {
                $this->ajax_msg("请输入正确开户行");
            }

            $user_model = M('user');
            $user = $user_model->where('user_id =' . session('user_id'))->find();


            $data_save = $user_model->where(array('user_id' => $_SESSION['user_id']))->data(array('real_name' => $real_name,'real_card'=>$real_card, 'bank_card' => $bank_card, 'bank_name' => $bank_name, 'is_checked' => 1))->save();

            if ($data_save !== false){
                $this->ajax_msg("个人信息添加成功!",1);
            }else{
                $this->ajax_msg("个人信息添加失败!");
            }

        }

        if (session('user_id')) {
            $user_model = M('user');
            $user = $user_model->where('user_id =' . session('user_id'))->find();
            if ($user['is_checked'] == 1) {
                $imgModel = M('card_img');
                $res = $imgModel->where('user_id =' . session('user_id'))->find();

                $pic1 = $res['pic1'];
                $pic2 = $res['pic2'];
                $this->assign('pic1', $pic1);
                $this->assign('pic2', $pic2);
            }
            $this->assign('user', $user);

        }

        $this->display();
    }


    //密码修改页面
    public function mimaxiugai()
    {

        if ($_POST) {

            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
            $phone_code = $_POST['code'] ? trim($_POST['code']) : '';
            $real_card = $_POST['real_card'] ? trim($_POST['real_card']) : '';
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];


            if (session('user_id')) {
                $user_model = M('user');
                $user = $user_model->where('user_id =' . session('user_id'))->find();

                //用户信息不符报错
                if (!$user) {
                    $data['msg'] = "用户信息错误";
                    $data['status'] = 0;
                    $this->ajaxReturn($data);
                }

                //验证手机号码
                if (isset($phone)) {
                    if (empty($phone) || !check_phone($phone)) {

                        $this->ajax_msg('请输入正确的手机号码');
                    }

                    if ($user['phone'] != $phone) {
                        $data['msg'] = "手机号码与注册号码不符";
                        $data['status'] = 0;
                        $this->ajaxReturn($data);
                    }
                }

                //验证身份证
                if (isset($real_card)) {
                    if (empty($real_card) || !$this->check_id_card($real_card)) {
                        $this->ajax_msg('请输入正确身份证件号', 0);
                    }

                    if ($user['real_card'] != $real_card) {
                        $data['msg'] = "身份证号与注册号码不符";
                        $data['status'] = 0;
                        $this->ajaxReturn($data);
                    }

                }


                //验证密码
                if (empty($password)) {
                    $this->ajax_msg('请输入密码');
                }

                if (empty($repassword)) {
                    $this->ajax_msg('请输入确认密码');
                }


                if (isset($_POST['password'])) {
                    if (strlen($password) > 20 || strlen($password) < 6) {
                        $this->ajax_msg("密码必须为6-20位的字符串", 0);

                    }

                    if (preg_match("/^\d*$/", $password)) {
                        $this->ajax_msg("密码必须包含字母", 0);//全数字
                    }

                    if (preg_match("/^[a-z]*$/i", $password)) {
                        $this->ajax_msg("密码必须包含数字", 0);//全字母
                    }


                    if (!preg_match("/^[a-z\d]*$/i", $password)) {
                        $this->ajax_msg("密码只能包含数字和字母", 0);//有数字有字母 ";
                    }

                }

                if ($password != $repassword) {
                    $this->ajax_msg('密码输入不一致');
                }

//                if (empty(session('phone_code'))) {
//                    $this->ajax_msg("请先获取短信验证码");
//                }
//
//                if ($phone . '-' . $phone_code != session('phone_code')) {
//                    $this->ajax_msg("验证码错误!");
//                }

                $password = md5(md5($password));

                $data_save = $user_model->where(array('user_id' => $_SESSION['user_id']))->data(array('password' => $password))->save();

                $data['status'] = 1;
                $data['msg'] = '密码修改成功';
                $this->ajaxReturn($data);


            } else {
                $data['msg'] = "用户信息错误";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }


        }

        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();
        $this->assign('user',$user);

        $this->display();
    }

    //交易密码修改
    public function jiaoyimimaxiugai()
    {
        if ($_POST) {

            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
            $phone_code = $_POST['code'] ? trim($_POST['code']) : '';
            $real_card = $_POST['real_card'] ? trim($_POST['real_card']) : '';
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];


            if (session('user_id')) {
                $user_model = M('user');
                $user = $user_model->where('user_id =' . session('user_id'))->find();

                //用户信息不符报错
                if (!$user) {
                    $data['msg'] = "用户信息错误";
                    $data['status'] = 0;
                    $this->ajaxReturn($data);
                }

                //验证手机号码
                if (isset($phone)) {
                    if (empty($phone) || !check_phone($phone)) {

                        $this->ajax_msg('请输入正确的手机号码');
                    }

                    if ($user['phone'] != $phone) {
                        $data['msg'] = "手机号码与注册号码不符";
                        $data['status'] = 0;
                        $this->ajaxReturn($data);
                    }
                }

                //验证身份证
                if (isset($real_card)) {
                    if (empty($real_card) || !$this->check_id_card($real_card)) {
                        $this->ajax_msg('请输入正确身份证件号', 0);
                    }

                    if ($user['real_card'] != $real_card) {
                        $data['msg'] = "身份证号与注册号码不符";
                        $data['status'] = 0;
                        $this->ajaxReturn($data);
                    }

                }


                //验证密码
                if (empty($password)) {
                    $this->ajax_msg('请输入密码');
                }

                if (empty($repassword)) {
                    $this->ajax_msg('请输入确认密码');
                }


                if (isset($_POST['password'])) {
                    if (strlen($password) > 20 || strlen($password) < 6) {
                        $this->ajax_msg("密码必须为6-20位的字符串", 0);

                    }

                    if (preg_match("/^\d*$/", $password)) {
                        $this->ajax_msg("密码必须包含字母", 0);//全数字
                    }

                    if (preg_match("/^[a-z]*$/i", $password)) {
                        $this->ajax_msg("密码必须包含数字", 0);//全字母
                    }


                    if (!preg_match("/^[a-z\d]*$/i", $password)) {
                        $this->ajax_msg("密码只能包含数字和字母", 0);//有数字有字母 ";
                    }

                }

                if ($password != $repassword) {
                    $this->ajax_msg('密码输入不一致');
                }

//                if (empty(session('phone_code'))) {
//                    $this->ajax_msg("请先获取短信验证码");
//                }
//
//                if ($phone . '-' . $phone_code != session('phone_code')) {
//                    $this->ajax_msg("验证码错误!");
//                }

                $password = md5(md5($password));

                $data_save = $user_model->where(array('user_id' => $_SESSION['user_id']))->data(array('tr_password' => $password))->save();

                $data['status'] = 1;
                $data['msg'] = '交易密码修改成功';
                $this->ajaxReturn($data);


            } else {
                $data['msg'] = "用户信息错误";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }


        }

        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();
        $this->assign('user',$user);
        $this->display();

    }

    //客服联系信息
    public function kefulianxi()
    {
        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();
        $this->assign('user',$user);
        $this->display();

    }

    //FAQ页面
    public function faq()
    {
        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();
        $this->assign('user',$user);
        $this->display();

    }

//    订单列表页面
//    public function order_list(){
//        $this->is_realCheck();
//        if (session('user_id')){
//            $order_model = M('order');
//            $order = $order_model->where('user_id = '.session('user_id'))->order('addtime desc')->select();
//            $this->assign('order',$order);
//        }
//
//        $uid = session('user_id');
//        $userModel = M('user');
//        $user = $userModel->where('user_id=' . $uid)->find();
//
//        $this->assign('user',$user);
//
//        $this->display();
//    }

    public function order_list(){
        $this->is_realCheck();

        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);


        if (session('user_id')){






            $order_model = M('order'); // 实例化User对象
            $count      = $order_model->where('user_id = '.session('user_id'))->count();// 查询满足要求的总记录数


            $Page = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(10)
            $Page->lastSuffix=false;

            $Page->setConfig('header','<div></div><ul style="margin-top: 0px"><li class="totalPage"><span>第</span><input value="%NOW_PAGE%" >页</li><li class="totalPage">共%TOTAL_PAGE%页</li></ul>');
            $Page->setConfig('first','<img src="/Public/Admin/images/img/shouye.png">');
            $Page->setConfig('prev','<img src="/Public/Admin/images/img/shangyiye.png">');
            $Page->setConfig('next','<img src="/Public/Admin/images/img/xiayiye.png">');
            $Page->setConfig('last','<img src="/Public/Admin/images/img/weiye.png" width="100%">');
            $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $Page->rollPage=5;// 分页栏每页显示的页数

            $show       = $Page->show();// 分页显示输出
            //分页显示改成链接带 get参数的形式
            $show_new = str_replace("Admin/Phone/order_list/m/admin/p/","order_list_m.html?p=",$show);


            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $order = $order_model->where('user_id = '.session('user_id'))->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('order',$order);// 赋值数据集

            $this->assign('page',$show_new);// 赋值分页输出





//            $order_model = M('order');
//            $order = $order_model->where('user_id = '.session('user_id'))->order('addtime desc')->select();
//            $this->assign('order',$order);
        }



        $this->display();
    }

//    订单支付页面
    public function charge(){
        $this->is_realCheck();
        $level_model = M('level');
        $level_arr = $level_model->select();


        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();

        $pid = $user['pid'];
        $p_user = $user_model->where('user_id =' . $pid)->find();



        if ($_POST){

            if ($user['is_checked'] != 1){
                $this->ajax_msg('请先完成实名认证以及交易密码设置!',2);

            }

            $phone = $_POST['phone'];
            $bank_card = $_POST['bank_card'];
            $real_card = $_POST['real_card'];
            $real_name = $_POST['real_name'];
            $bank_name = $_POST['bank_name'];
            $level_id = $_POST['level_id'];


            //验证手机号码
            if (isset($phone)) {
                if (empty($phone) || !check_phone($phone)) {

                    $this->ajax_msg('请输入正确的手机号码');
                }

                if ($user['phone'] != $phone) {
                    $data['msg'] = "手机号码与注册号码不符";
                    $data['status'] = 0;
                    $this->ajaxReturn($data);
                }
            }
//            if (!$this->checkBankCard($bank_card)) {
//                $this->ajax_msg("请输入正确的银行卡号");
//            }
            if (empty($real_card)) {
                $this->ajax_msg("请输入身份证号码");
            }
            if (!$this->check_id_card($real_card)) {
                $this->ajax_msg("请输入正确的身份证号码");
            }

            if (empty($real_name)){
                $this->ajax_msg("请输入真实姓名");
            }

            if (empty($bank_name)){
                $this->ajax_msg("请输入开户行");
            }


            //创建订单
            $order_model = M('order');
            $level_info = $level_model->where('id='.$level_id)->find();

            $order_num = $this->build_order_no();
            $order_arr = [
                "order_num"=>$order_num,
                'user_id'=>$user['user_id'],
                'phone'=>$phone,
                'real_name'=>$real_name,
                'charge_bank'=>$bank_name,
                'real_card'=>$real_card,
                'charge_bankcard'=>$bank_card,
                'level'=>$level_info['level'],
                'charge_money'=>$level_info['coin'],
                'addtime'=>time(),
                'pid'=>$pid,
                'p_phone'=>$p_user['phone'],
                'p_real_name'=>$p_user['real_name'],
            ];
            $res = $order_model->data($order_arr)->add();
            if ($res){
                $data['msg'] = "订单创建成功";
                $data['order_num'] = $order_num;
                $data['status'] = 1;
                $this->ajaxReturn($data);
            }

        }


        $this->assign('level_arr',$level_arr);
        $this->assign('user',$user);
        $this->display();
    }

    //订单状态页面
    public function charge_status(){
        $this->is_realCheck();
        $uid = session('user_id');
        $userModel = M('user');
        $user = $userModel->where('user_id=' . $uid)->find();

        $this->assign('user',$user);

        if ($_POST){

            $data['order_num'] = isset($_POST['order_num']) ? trim($_POST['order_num']) : '';
            $data['charge_status'] = isset($_POST['charge_status']) ? trim($_POST['charge_status']) : '';

            if (empty($data['order_num'])){
                $this->ajax_msg('账单获取失败,请重新操作');
            }

            $order_model = M('order');
            $order = $order_model->where('order_num = '.$data['order_num'])->find();

            if ($order){
                if ($order['charge_status'] == 1 ){
                    $res = $order_model->where('order_num = '.$data['order_num'])->data(['charge_status'=>2,'complete_time'=>time()])->save();

                    $this->ajax_msg('订单状态已改变,等待客服审核',1);
                }
            }




        }

        if ($_GET['order_num']){
            $order_model = M('order');
            $order = $order_model->where('order_num = '.$_GET['order_num'])->find();
            if ($order){
                $this->assign('order',$order);
            }else{
                $this->redirect('./index');
            }
            $this->display();
            return;
        }


        $this->redirect('./index');

    }


    /**
     * 提现界面
     */

    public function get_cash(){
        $this->is_realCheck();
        $user_model = M('user');
        $user = $user_model->where('user_id =' . session('user_id'))->find();

        $walletModel = M('wallet');
        $wallet = $walletModel->where('user_id=' . session('user_id'))->find();

        $pid = $user['pid'];
        $p_user = $user_model->where('user_id =' . $pid)->find();

        if($_POST){

            if ($user['is_checked'] != 1){
                $this->ajax_msg('请先完成实名认证以及交易密码设置!',2);

            }

            $charge_money = trim($_POST['charge_money']);

            $phone = $_POST['phone'];
            $bank_card = $_POST['bank_card'];
            $real_card = $_POST['real_card'];
            $real_name = $_POST['real_name'];
            $bank_name = $_POST['bank_name'];
            $tr_password = $_POST['tr_password'];



//            验证提现金额
            if(!preg_match("/^[1-9][0-9]*$/",$charge_money)){
                $this->ajax_msg('提现金额必须为正整数!');
            }

            if (empty($charge_money)){
                $this->ajax_msg('提现金额不能为空');
            }
            if (empty($tr_password)){
                $this->ajax_msg('交易密码不能为空');
            }

            if ($charge_money > $wallet['active_money']){
                $this->ajax_msg('可提现余额不足');
            }

            //验证交易密码
            $tr_password = md5(md5($tr_password));
            if ($tr_password != $user['tr_password']){
                $this->ajax_msg('密码错误');
            }


            //验证手机号码
            if (isset($phone)) {
                if (empty($phone) || !check_phone($phone)) {

                    $this->ajax_msg('请输入正确的手机号码');
                }

                if ($user['phone'] != $phone) {
                    $data['msg'] = "手机号码与注册号码不符";
                    $data['status'] = 0;
                    $this->ajaxReturn($data);
                }
            }
//            if (!$this->checkBankCard($bank_card)) {
//                $this->ajax_msg("请输入正确的银行卡号");
//            }
            if (empty($real_card)) {
                $this->ajax_msg("请输入身份证号码");
            }
            if (!$this->check_id_card($real_card)) {
                $this->ajax_msg("请输入正确的身份证号码");
            }

            if (empty($real_name)){
                $this->ajax_msg("请输入真实姓名");
            }

            if (empty($bank_name)){
                $this->ajax_msg("请输入开户行");
            }

            //钱包扣钱
            $new_active_money = $wallet['active_money'] - $charge_money;
            $res = $walletModel->where('user_id='.$user['user_id'])->data(array('active_money'=>$new_active_money))->save();

            if ($res){
                //创建提现记录
                $cash_log_model = M('get_cash_log');
                $order_num = $this->build_order_no();

                $res = $cash_log_model->data(['order_num'=>$order_num,'user_id'=>$user['user_id'],'money'=>$charge_money,'addtime'=>time()])->add();

                if ($res){

                    //创建订单
                    $order_model = M('order');

                    $order_arr = [
                        "is_charge"=>2, //提现订单
                        "charge_status"=> 2, //待审核
                        "order_num"=>$order_num,
                        'user_id'=>$user['user_id'],
                        'phone'=>$phone,
                        'real_name'=>$real_name,
                        'charge_bank'=>$bank_name,
                        'real_card'=>$real_card,
                        'charge_bankcard'=>$bank_card,
                        'level'=>$user['level'],
                        'charge_money'=>$charge_money,
                        'addtime'=>time(),
                        'pid'=>$pid,
                        'p_phone'=>$p_user['phone'],
                        'p_real_name'=>$p_user['real_name'],
                    ];
                    $res = $order_model->data($order_arr)->add();
                    if ($res){
                        $data['msg'] = "订单创建成功";
                        $data['order_num'] = $order_num;
                        $data['status'] = 1;
                        $this->ajaxReturn($data);
                    }

                }
            }

        }


        $this->assign('wallet', $wallet);
        $this->assign('user',$user);



        $this->display();
    }




//    生成订单号
    public function build_order_no(){
        $order_num = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        $res = M('order')->where('order_num='.$order_num)->find();
        if ($res){
            $this->build_order_no();
        }
        return $order_num;

    }



//  获取邀请码
    public function get_inviteCode()
    {


        if (session('user_id')) {
            $userModel = M('user');
            $user = $userModel->where('user_id =' . session('user_id'))->find();

            if (empty($user['level'])){
                $this->ajax_msg("还未充值,请先充值后再推广");
            }

//            当前没有推荐码
            if (empty($user['invite_code'])) {
                //生成随机邀请码
                $invite_code = $this->mk_inviteCode();
                $res =$userModel->where('user_id =' . session('user_id'))->data(array('invite_code' => $invite_code))->save();
                if($res){
                    $data['msg'] = "您生成的推荐码为".$invite_code;
                    $data['status'] = 1;
                    $data['invite_code'] = $invite_code;
                    $this->ajaxReturn($data);
//                    $this->ajax_msg("您生成的推荐码为:".$invite_code);
                }

            }else{
                //已有推荐码
                $this->ajax_msg("您已生成过推荐码:".$user['invite_code']);
            }
        }
    }


    public function get_qrcode(){
        $userModel = M('user');
        $user = $userModel->where('user_id =' . session('user_id'))->find();


        if (empty($user['invite_code'])){
            $this->ajax_msg("请先生成推荐码");
        }else{
//            $url = "www.baidu.com";
//            $src = $this->qrcode($url);
            $data['msg'] = "分享图片已生成";
            $data['status'] = 1;
            $data['invite_code'] = $user['invite_code'];
            $this->ajaxReturn($data);
        }
    }



    //生成二维码分享链接
    public function qrcode($url="http://www.baidu.com",$level=3,$size=4)
    {
        $url = "http://".$_SERVER['HTTP_HOST']."/register.html" ;
        if (isset($_GET)){
            $url = $url."?invite_code=".$_GET['invite_code'];
        }
        Vendor('phpqrcode.phpqrcode');
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        //生成二维码图片
        $object = new \QRcode();
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }





    //生成邀请码
    public function mk_inviteCode(){
        $userModel = M('user');
        $invite_code = rand(100000,999999);
        $res = $userModel->where('invite_code =' . $invite_code)->find();
        if ($res){
            $this->mk_inviteCode();
        }
        return $invite_code;
    }




//    获取手机验证码,并写入session中
    public function get_phoneCode(){

        if (isset($_POST['phone'])){
            $phone  = trim($_POST['phone']);
            //检验号码
            if (empty($phone) || !check_phone($phone)){
                $data['msg'] = "请输入正确的手机号码";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }



            if (!session('user_id')){
                $data['msg'] = "用户信息错误";
                $data['status'] = 0;
                $this->ajaxReturn($data);
            }else{
                $user_model = M('user');
                $res = $user_model->where('user_id ='.session('user_id'))->find();

                if ($res){
                    if ($res['phone'] != $phone){
                        $data['msg'] = "手机号码与注册号码不符";
                        $data['status'] = 0;
                        $this->ajaxReturn($data);
                    }

                }

                $code = rand(1111,9999);
                session('phone_code',$phone.'-'.$code);
                $data['msg'] = session('phone_code');
                $data['status'] = 1;
                $this->ajaxReturn($data);
            }



        }

    }


    function randName($ext){
        //当前时间+随机数+唯一值
        $nowTime = date("YmdHis");
        $randNum = rand(1000,9999);
        $uniID = uniqid();
        return $nowTime.$randNum.$uniID.".".$ext;
    }


    /**
     * 身份证图片上传
     */
    public function upload_img(){


        if ($_FILES['myfiles']){
            $fileArr = $_FILES['myfiles'];
            $pic = 'pic1';
        }
        if ($_FILES['myfiles_2']){
            $fileArr = $_FILES['myfiles_2'];
            $pic = 'pic2';
        }

        $fileNum = count($fileArr['name']);
        $data = ['status' => 1];

        //存储过程  1.判断文件是否有错--->2.没错的情况下,修改文件名,文件另存为   3. 返回json给前端

        for ($i=0;$i<$fileNum;$i++){

            if ($fileArr['error'][$i] !=0){
                $data['status'] = 0;
                continue;
            }

            //正常文件的情况,执行文件处理
            $fileNameArr = explode('.',$fileArr['name'][$i]);

            $cur_ext = end($fileNameArr);

            $name= time().md5(rand(10000,99999)).'.'.$cur_ext;

            $filepath = "/Public/Uploads/".$name;
//            unlink($filepath);
            if (move_uploaded_file($fileArr['tmp_name'][$i],'.'.$filepath)){
                //存储上传文件的路径
                $imgModel = M('card_img');

                $res = $imgModel->where('user_id ='.session('user_id'))->find();

                if ($res){
                    $res = $imgModel->where('user_id ='.session('user_id'))->save(['user_id'=>session('user_id'),$pic=>$filepath,'addtime'=>time()]);

                }else{
                    $res = $imgModel->data(['user_id'=>session('user_id'),$pic=>$filepath,'addtime'=>time()])->add();
                }

                if ($res !== false){
                    $data['src'][] = $filepath;
                    $data['msg'] = '上传成功';
                }else{
                    $data['status'] = 0;
                    $data['msg'] = '上传失败';
                }

            }else{
                $data['status'] = 0;
                $data['msg'] = '上传失败';

            }
        }
        $this->ajaxReturn($data);

        die();
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
     *  检查身份证号码
     */
    public function check_id_card($id_card = '') {
        return ( preg_match("/^\w{18}$/i", $id_card) || preg_match("/^\d{15}$/i", $id_card) );
    }

    /**
     * func 验证中文姓名
     * @param $name
     * @return bool
     */
    function isChineseName($name){
        if (preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,5}$/', $name)) {
            return true;
        } else {
            return false;
        }
    }


    /**  * 验证银行卡号  * @param  string $bankCardNo 银行卡号  * @return bool             是否合法(true:合法,false:不合法)  */
    public function checkBankCard($bankCardNo)
    {
        $strlen = strlen($bankCardNo);
        if ($strlen < 15 || $strlen > 19) {
            return false;
        }
        if (!preg_match("/^\d{15}$/i", $bankCardNo) && !preg_match("/^\d{16}$/i", $bankCardNo) && !preg_match("/^\d{17}$/i", $bankCardNo) && !preg_match("/^\d{18}$/i", $bankCardNo) && !preg_match("/^\d{19}$/i", $bankCardNo)) {
            return false;
        }
        $arr_no = str_split($bankCardNo);
        $last_n = $arr_no[count($arr_no) - 1];
        krsort($arr_no);
        $i = 1;
        $total = 0;
        foreach ($arr_no as $n) {
            if ($i % 2 == 0) {
                $ix = $n * 2;
                if ($ix >= 10) {
                    $nx = 1 + ($ix % 10);
                    $total += $nx;
                } else {
                    $total += $ix;
                }
            } else {
                $total += $n;
            }
            $i++;
        }
        $total -= $last_n;
        $x = 10 - ($total % 10);
        if ($x != $last_n) {
            return false;
        }
        return true;
    }


}