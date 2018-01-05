<?php
namespace Admin\Controller;
use Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }
    public function left(){
        $uid = session('uid');
        $user_model = M('Admin');
        //获取管理员信息
        $user = $user_model->table(array('my_admin'=>'a','my_role_user'=>'b','my_role'=>'c'))->field('a.id,a.username,c.remark')->where("a.id='$uid' and a.id=b.user_id and b.role_id=c.id")->find();
        $this->assign('user',$user);
        $this->display();
    }
    public function swich(){
        $this->display();
    }
    public function main(){
        $uid = session('uid');
        $user_model = M('Admin');
        //获取管理员信息
        $user = $user_model->table(array('my_admin'=>'a','my_role_user'=>'b','my_role'=>'c'))->field('a.id,a.username,c.remark,a.last_logintime,a.last_ip,a.login_count')->where("a.id='$uid' and a.id=b.user_id and b.role_id=c.id")->find();
        //获取管理员个数
        $user_count = $user_model->count();
        //获取数据库版本号
        $model = new \Think\Model();
        $v = $model->query("select VERSION() as ver");
        $array['mysqlver'] = $v[0]['ver'];
        $mysqlver = $array['mysqlver'];

        $this->assign('mysqlver',$mysqlver);
        $this->assign('user_count',$user_count);
        $this->assign('user',$user);
        $this->display();
    }
    //获取要清除的目录和目录所在的绝对路径
    public function cache(){
        $rtim = del_dir(APP_PATH.'/Runtime');
        if($rtim){
            echo 1;
        }else{
            echo 2;
        }
    }
}