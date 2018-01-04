<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends BasicController {
    public function index(){
        $Case_model = M('Case');
        $case_list = $Case_model->order('create_time DESC')->select();
        $this->assign('case_list',$case_list);

        $this->display();
    }
}