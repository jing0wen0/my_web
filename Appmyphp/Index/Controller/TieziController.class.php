<?php
namespace Index\Controller;
use Think\Controller;
class TieziController extends BasicController {

    public function tiezi_list(){
        $Tiezi_model = M('Tiezi'); // 实例化Tiezi对象
        $count = $Tiezi_model->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $Tiezi_list = $Tiezi_model->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('tiezi_list',$Tiezi_list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function tiezi_show(){
        $id = $_GET['id'];
        $Tiezi_model = M('Tiezi');
        $Tiezi_show = $Tiezi_model->where("id='$id'")->find();
        $Tiezi_model->where("id='$id'")->setInc('hits');//点击次数加1
        $this->assign('show',$Tiezi_show);



        $Csae_model = M('Case');
        $Case_rm = $Csae_model->order('hits desc')->limit(3)->select();
        $this->assign('case_rm',$Case_rm);

        $this->display();
    }

}