<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30
 * Time: 15:08
 */

namespace Home\Controller;


use Common\Common\HomeController;
use function PHPSTORM_META\map;
use Think\Controller;
use Think\Page;

class IndexController extends HomeController
{

//    首页
    public function index(){

        //注册用户总数
        $user_model = M('user');
        $totle_user = $user_model->count();

        //订单总数
        $order_model= M('order');
        $totle_order = $order_model->count();

        //充值总额
        $totle_charge = $order_model->where(['charge_status'=>3])->sum('charge_money');


        $this->assign('totle_user',$totle_user);
        $this->assign('totle_order',$totle_order);
        $this->assign('totle_charge',$totle_charge);

        $this->display();
    }


    //用户管理
    public function user_manager(){
        $user_model = M('user');
        $level_model = M('level');
        $order_model= M('order');



        $map=[];

        if ($_GET){
            foreach ($_GET as $k => $v){
                if (!empty($v)){
                    $map[$k] = $v;
                }
            }
        }
        $count      = $user_model->where($map)->count();// 查询满足要求的总记录数
        $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

        $show       = $Page->show();// 分页显示输出
        $userlist = $user_model->where($map)->order('user_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $levellist = $level_model->select();

        foreach($userlist as $k => $v){

            //匹配推荐人信息
            $pUser = $user_model->where('user_id ='.$v['pid'])->find();
            if ($pUser){
                $userlist[$k]['p_phone'] = $pUser['phone'];
                $userlist[$k]['p_real_name'] = $pUser['real_name'];
            }else{
                $userlist[$k]['p_phone'] = '未知';
                $userlist[$k]['p_real_name'] =  '未知';
            }

            $totleCharge = $order_model->where(['user_id'=>$v['user_id'],'charge_status'=>3])->sum('charge_money');
            $userlist[$k]['totleCharge'] = $totleCharge;

            //匹配身份证图片
            $img_model = M('card_img');
            $imgRes = $img_model->where('user_id ='.$v['user_id'])->find();
            if ($imgRes){
//                $userlist[$k]['img1'] = "/Uploads/".$v['user_id']."_pic_1.jpg";
//                $userlist[$k]['img2'] = "/Uploads/".$v['user_id']."_pic_2.jpg";
                $userlist[$k]['img1'] = $imgRes['pic1'];
                $userlist[$k]['img2'] = $imgRes['pic2'];
            }else{
                $userlist[$k]['img1'] = "";
                $userlist[$k]['img2'] = "";
            }

        }

        $this->assign('userlist',$userlist)->assign('levellist',$levellist);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('count',$count);// 查询记录数
//        $Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $this->display(); // 输出模板



//        $userlist = $user_model->select();
//        $levellist = $level_model->select();
//
//
//        foreach($userlist as $k => $v){
//
//            //匹配推荐人信息
//            $pUser = $user_model->where('user_id ='.$v['pid'])->find();
//            if ($pUser){
//                $userlist[$k]['p_phone'] = $pUser['phone'];
//                $userlist[$k]['p_real_name'] = $pUser['real_name'];
//            }else{
//                $userlist[$k]['p_phone'] = '未知';
//                $userlist[$k]['p_real_name'] =  '未知';
//            }
//
//
//            $totleCharge = $order_model->where(['user_id'=>$v['user_id'],'charge_status'=>3])->sum('charge_money');
//            $userlist[$k]['totleCharge'] = $totleCharge;
//
//        }
//
//        $this->assign('userlist',$userlist)->assign('totle_user',count($userlist))->assign('levellist',$levellist);
//
//
//        $this->display();

    }


    //    充值管理
    public function charge_manager(){


        if ($_GET['is_charge']){



            $order_model = M('order');
    //        $order_list = $order_model->order('addtime desc')->select();
    //
    //
    //        $this->assign('order_list',$order_list);
    //        $this->display();

            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取

            $map=[];
            $map['is_charge'] = $_GET['is_charge'];

            if ($_GET){
                foreach ($_GET as $k => $v){
                    if (!empty($v)){
                        $map[$k] = $v;
                    }
                }
            }


            $count      = $order_model->where($map)->count();// 查询满足要求的总记录数
            $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

            $show       = $Page->show();// 分页显示输出
            $order_list = $order_model->where($map)->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

            $this->assign('order_list',$order_list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this->assign('count',$count);// 查询记录数
    //        $Page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $this->display(); // 输出模板
        }
    }

//    //提款管理
//    public function getCash_manager(){
//
//    }


    public function change_chargeStatus(){
        if ( $_GET['order_num'] && $_GET['charge_status'] ){


            //是提现订单
            if ($_GET['is_charge'] == 2){

                $order_num = $_GET['order_num'];
                $charge_status = $_GET['charge_status'];


                $order_model = M('order');




                if ($charge_status == 3){
                    //后台审核通过
                    //更新订单表
                    $res = $order_model->where('order_num='.$order_num)->data(array('charge_status'=>$charge_status,'complete_time'=>time()))->save();
                    //更新取现记录表
                    if ($res){
                        $cash_log_model = M('get_cash_log');
                        $res = $cash_log_model->where('order_num='.$order_num)->data(array('is_checked'=>1,'complete_time'=>time()))->save();
                        if ($res){
                            $this->success('操作成功！','charge_manager.html?is_charge=2');
                        }else{
                            $this->error('操作失败','charge_manager.html?is_charge=2');
                        }
                    }

                }
                if ($charge_status == 4){
                    //后台审核不通过
                    //更新订单表
                    $res = $order_model->where('order_num='.$order_num)->data(array('charge_status'=>$charge_status,'complete_time'=>time()))->save();


                    //更新取现记录表
                    if ($res){
                        $cash_log_model = M('get_cash_log');
                        $res = $cash_log_model->where('order_num='.$order_num)->data(array('is_checked'=>1,'complete_time'=>time()))->save();
                        if ($res){
                            //更新钱包,把钱还回去
                            $walletModel = M('wallet');
                            $order = $order_model->where('order_num='.$order_num)->find();

                            $wallet = $walletModel->where('user_id=' . $order['user_id'])->find();
                            $new_active_money = $wallet['active_money'] + $order['charge_money'];
                            $res = $walletModel->where('user_id='.$order['user_id'])->data(array('active_money'=>$new_active_money))->save();

                            if ($res){
                                $this->success('操作成功！','charge_manager.html?is_charge=2');
                            }else{
                                $this->error('操作失败','charge_manager.html?is_charge=2');
                            }

                        }else{
                            $this->error('操作失败','charge_manager.html?is_charge=2');
                        }
                    }

                }


            }else{

                $order_num = $_GET['order_num'];
                $charge_status = $_GET['charge_status'];


                $order_model = M('order');
                $res = $order_model->where('order_num='.$order_num)->data(array('charge_status'=>$charge_status,'complete_time'=>time()))->save();

                if (false !==$res){

                    //确认到账,开始进行权益分配
                    if ($charge_status == 3){
                        $user_model = M('user');
                        $order = $order_model->where('order_num='.$order_num)->find();
                        $pid = $order['pid'];
                        //被推荐人等级更新
                        $user_model->where('user_id='.$order['user_id'])->data(['level'=>$order['level']])->save();


//                   一级推荐人权益分配
                        if ($pid){
                            $data = [];
                            $data['user_id'] = $pid;
                            $p_user = $user_model->where('user_id='.$pid)->find();
                            $data['phone'] = $p_user['phone'];

                            //直推省级
                            if ($order['charge_money'] == 1000000 ){
                                $data['active_money'] = $order['charge_money'] * 0.2 ;

                                //查找是否有钱包,有则更新,没有则创建一个
                                $res = M('wallet')->where('user_id='.$pid)->find();
                                if ($res){
                                    $data['active_money'] = $res['active_money']+$data['active_money'];
                                    M('wallet')->where('user_id='.$pid)->data($data)->save();
                                }else{
                                    M('wallet')->data($data)->add();
                                }
                                // 1表示1级权益,2表示2级权益,3表示直推奖励
                                $data['active_money'] = $order['charge_money'] * 0.2;
                                $data['from_level'] = 3;
                                $data['from_user_id'] = $order['user_id'];
                                $data['from_charge_money'] = $order['charge_money'];
                                $data['addtime'] = time();
                                M('wallet_qy_changlog')->data($data)->add();
                                $this->success('操作成功！','charge_manager.html?is_charge=1');
                                return;

                            }
                            //直推荐市级
                            if ($order['charge_money'] == 400000 ){
                                $data['active_money'] = $order['charge_money'] * 0.15 ;

                                //查找是否有钱包,有则更新,没有则创建一个
                                $res = M('wallet')->where('user_id='.$pid)->find();
                                if ($res){
                                    $data['active_money'] = $res['active_money']+$data['active_money'];
                                    M('wallet')->where('user_id='.$pid)->data($data)->save();
                                }else{
                                    M('wallet')->where('user_id='.$pid)->data($data)->add();
                                }
                                // 1表示1级权益,2表示2级权益,3表示直推奖励
                                $data['active_money'] = $order['charge_money'] * 0.15;
                                $data['from_level'] = 3;
                                $data['from_user_id'] = $order['user_id'];
                                $data['from_charge_money'] = $order['charge_money'];
                                $data['addtime'] = time();
                                M('wallet_qy_changlog')->data($data)->add();
                                $this->success('操作成功！','charge_manager.html?is_charge=1');
                                return;
                            }

                            //其他权益分配


                            if($p_user['level'] == '省级代理'){
                                $qy_percent = 0.95;
                            }
                            if ($p_user['level'] == '市级代理'){
                                $qy_percent = 0.95;
                            }
                            if ($p_user['level'] == '金钻代理'){
                                $qy_percent = 0.95;
                            }
                            if ($p_user['level'] == '钻石代理'){
                                $qy_percent = 0.85;
                            }
                            if ($p_user['level'] == '铂金代理'){
                                $qy_percent = 0.75;
                            }
                            if ($p_user['level'] == '金牌代理'){
                                $qy_percent = 0.65;
                            }
                            if ($p_user['level'] == '银牌代理'){
                                $qy_percent = 0.55;
                            }
                            if ($p_user['level'] == '铜牌代理'){
                                $qy_percent = 0.35;
                            }

//                            if ($order['charge_money'] == 1000000){
//                                $qy_percent = 0.95;
//                            }
//                            if ($order['charge_money'] == 400000){
//                                $qy_percent = 0.95;
//                            }
//
//                            if ($order['charge_money'] == 58000){
//                                $qy_percent = 0.95;
//                            }
//                            if ($order['charge_money'] == 28000){
//                                $qy_percent = 0.85;
//                            }
//                            if ($order['charge_money'] == 13800){
//                                $qy_percent = 0.75;
//                            }
//                            if ($order['charge_money'] == 8800){
//                                $qy_percent = 0.65;
//                            }
//                            if ($order['charge_money'] == 3800){
//                                $qy_percent = 0.55;
//                            }
//                            if ($order['charge_money'] == 880){
//                                $qy_percent = 0.35;
//                            }

                            //被推荐人充值金额*一级推荐权益*50% ≤ 自己充值金额 ---- 可用余额
                            $res = M('level')->where('level='."'".$p_user['level']."'")->find();

//                        $levelArr = [
//                            '铜牌代理' => 880,
//                            '银牌代理' => 3800,
//                            '金牌代理' => 8800,
//                            '铂金代理' => 13800,
//                            '钻石代理' => 28000,
//                            '金钻代理' => 58000,
//                            '市级代理' => 400000,
//                            '省级代理' => 1000000,
//                        ];
//                            $p_user_charge = $levelArr[$p_user['level']];

                            if ($res){
                                $p_user_charge = $res['coin'];

                                if ($p_user_charge > ($order['charge_money'] * $qy_percent * 0.5)){
                                    $data['active_money'] = $order['charge_money'] * $qy_percent * 0.5 ;
                                }else{
                                    $data['active_money'] = $p_user_charge ;
                                }
                            }

                            $old_active_money = $data['active_money'] ;

                            //被推荐人充值金额*一级推荐权益*50% ----冻结余额
                            $data['frozen_money'] =  $order['charge_money'] * $qy_percent * 0.5 ;

                            //红,白 ,黑积分 10%的权益
                            $data['red_coin'] = $order['charge_money'] * 0.1;
                            $data['white_coin'] = $order['charge_money'] * 0.1;
                            $data['black_coin'] = $order['charge_money'] * 0.3;


                            // 1表示1级权益,2表示2级权益,3表示直推奖励, 更新充值记录
                            $data['active_money'] = $old_active_money;
                            $data['from_level'] = 1;
                            $data['from_user_id'] = $order['user_id'];
                            $data['from_charge_money'] = $order['charge_money'];
                            $data['addtime'] = time();
                            M('wallet_qy_changlog')->data($data)->add();


                            //查找是否有钱包,有则更新,没有则创建一个
                            $res = M('wallet')->where('user_id='.$pid)->find();
                            if ($res){
                                $data['active_money'] = $res['active_money']+$data['active_money'];
                                $data['frozen_money'] = $res['frozen_money']+$data['frozen_money'];
                                $data['red_coin'] = $res['red_coin']+$data['red_coin'];
                                $data['white_coin'] = $res['white_coin']+$data['white_coin'];
                                $data['black_coin'] = $res['black_coin']+$data['black_coin'];

                                M('wallet')->where('user_id='.$pid)->data($data)->save();
                            }else{
                                M('wallet')->data($data)->add();
                            }

                        }

                        $p_user = $user_model->where('user_id='.$pid)->find();
                        if ($p_user){
                            $pid_2 = $p_user['pid'];
                            if ($pid_2) {
                                //二级推荐人权益分配

                                $data_2 = [];
                                $data_2['user_id'] = $pid_2;
                                $p_2_user = $user_model->where('user_id=' . $pid_2)->find();
                                $data_2['phone'] = $p_2_user['phone'];

                                //释放机制
                                if ($order['charge_money'] == 1000000) {
                                    $qy_percent = 0;
                                }
                                if ($order['charge_money'] == 400000) {
                                    $qy_percent = 0;
                                }

                                if ($order['charge_money'] == 58000) {
                                    $qy_percent = 0.5;
                                }
                                if ($order['charge_money'] == 28000) {
                                    $qy_percent = 0.3;
                                }
                                if ($order['charge_money'] == 13800) {
                                    $qy_percent = 0.2;
                                }
                                if ($order['charge_money'] == 8800) {
                                    $qy_percent = 0.1;
                                }
                                if ($order['charge_money'] == 3800) {
                                    $qy_percent = 0.08;
                                }
                                if ($order['charge_money'] == 880) {
                                    $qy_percent = 0.02;
                                }

                                //红,白 ,黑积分 10%的权益
//                                $data_2['red_coin'] = $order['charge_money'] * 0.1;
                                $data_2['white_coin'] = $order['charge_money'] * 0.1;
                                $data_2['black_coin'] = $order['charge_money'] * 0.1;

                                //冻结余额*被推荐人充值金额对应的释放机制
                                $res = M('wallet')->where('user_id=' . $pid_2)->find();
                                $data_2['frozen_money'] = 0;
                                if ($res) {
                                    $data_2['frozen_money'] = $res['frozen_money'] * $qy_percent;
                                }


                                //from_level 1表示1级权益,2表示2级权益,3表示直推奖励, 更新充值记录
                                $data_2['from_level'] = 2;
                                $data_2['from_user_id'] = $order['user_id'];
                                $data_2['from_charge_money'] = $order['charge_money'];
                                $data_2['addtime'] = time();
                                M('wallet_qy_changlog')->data($data_2)->add();


                                //查找是否有钱包,有则更新,没有则创建一个

                                if ($res) {
                                    $data_2['active_money'] = $res['active_money'] + $data_2['frozen_money'];
                                    $data_2['frozen_money'] = $res['frozen_money'] - $data_2['frozen_money'];
                                    $data_2['red_coin'] = $res['red_coin'] + $data_2['red_coin'];
                                    $data_2['white_coin'] = $res['white_coin'] + $data_2['white_coin'];
                                    $data_2['black_coin'] = $res['black_coin'] + $data_2['black_coin'];

                                    M('wallet')->where('user_id=' . $pid_2)->data($data_2)->save();
                                } else {
                                    M('wallet')->data($data_2)->add();
                                }


                            }
                        }

                    }
                    $this->success('操作成功！','charge_manager.html?is_charge=1');
                } else {
                    $this->error('操作失败','charge_manager.html?is_charge=1');

                }
            }

        }
    }


    //用户密码重置
    public function resetPwd(){

        if ($_GET['user_id']){
            $user_model = M('user');
            $user_model->where('user_id='.$_GET['user_id'])->save(['password'=>md5(md5('123456abc'))]);
            $this->success('密码重置成功！','user_manager.html');

        }



    }

    //商城配置
    //道具商城














}