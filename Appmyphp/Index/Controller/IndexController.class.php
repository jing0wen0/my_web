<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Case_model = M('Case');
        $case_list = $Case_model->order('create_time DESC')->select();
        $this->assign('case_list',$case_list);

        $Tiezi_model = M('Tiezi');
        $tiezi_list = $Tiezi_model->order('hits desc')->limit(3)->select();
        $this->assign('tiezi_list',$tiezi_list);

        $this->display();
    }
}