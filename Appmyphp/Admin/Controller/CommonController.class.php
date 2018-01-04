<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize(){

        //$notAuth = in_array(CONTROLLER_NAME,explode(',',C('NOT_AUTH_MODULE'))) || in_array(ACTION_NAME,C('NOT_AUTH_ACTION'));
        /*if(C('USER_AUTH_ON')) {
            $Rbac = new \Org\Util\Rbac();
            Rbac::AccessDecision(GROUP_NAME) || $this->error('没有访问权限');
        }*/
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