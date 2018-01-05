<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize(){
    	
        $rbac=new \Org\Util\Rbac();

        //检测是否登录
        if(!session("uid")){  
            $this->redirect('Login/login');
        }

        //检测是否有权限没有权限就做相应的处理
        if(C('USER_AUTH_ON')){
            $rbac::AccessDecision()||$this->error('没有访问权限',U('Admin/Index/main'));
        }

    }

}