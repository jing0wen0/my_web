<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    //登录系统
    public function login(){
        if(!empty($_POST)){
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
            $user_model = D('Admin');
            if(!empty($username) || !empty($pwd)){
                $user_info = $user_model->where("username='$username'")->find();
                if($username == $user_info['username']){
                    if(md5($pwd) == $user_info['pwd']){
                        //$_SESSION['login_count'] = array('exp','login_count+1');
                        session(C('USER_AUTH_KEY'),$user_info['id']);
                        session('username',$user_info['username']);
                        session('last_logintime',date('Y-m-d H:i:s',$user_info['last_logintime']));
                        session('last_ip',$user_info['last_ip']);
                        session('login_count',$user_info['login_count']);

                        //保存登录信息
                        $data = array();
                        $data['id'] = $user_info['id'];
                        $data['last_logintime'] = time();
                        $data['last_ip'] = get_client_ip();
                        $data['login_count'] = array('exp','login_count+1');
                        $user_model->save($data);

                        //超级管理员识别
                        dump($user_info['username']);
                        if ($user_info['username'] == C('RBAC_SUPERADMIN')) {
                            session(C('ADMIN_AUTH_KEY'),true);
                        }

                        //将权限写入session
                        $rbac=new \Org\Util\Rbac();  
                        $rbac::saveAccessList();
                        dump($_SESSION);
                        //die();

                        //进入后台主页面
                        $this->redirect("Index/index");
                    }else{
                        $this->success('密码错误！','Login/login');
                    }
                }else{
                    $this->success('用户名错误或不存在！','Login/login');
                }
            }else{
                $this->success('用户名或密码不能为空！','Login/login');
            }
        }else{
            $this->display();
        }
    }

    /*public function verify(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }*/

    //退出系统
    public function logout(){
        session(null);
        $this->redirect("Login/login");
    }

}