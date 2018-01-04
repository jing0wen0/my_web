<?php
namespace Index\Controller;
use Think\Controller;
class BasicController extends Controller {

    public function _initialize() {
    	//底部热门帖子
    	$Tiezi_model = M('Tiezi');
        $tiezi_list = $Tiezi_model->order('hits desc')->limit(3)->select();
        $this->assign('tiezi_list',$tiezi_list);
    }

}