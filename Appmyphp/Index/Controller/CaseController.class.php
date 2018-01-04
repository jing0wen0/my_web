<?php
namespace Index\Controller;
use Think\Controller;
class CaseController extends BasicController {

    public function case_list(){
        $Case_model = M('Case'); // 实例化Case对象
        $count = $Case_model->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $case_list = $Case_model->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('case_list',$case_list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display(); // 输出模板
    }

    public function case_show(){
        $id = $_GET['id'];
        $Case_model = M('Case');
        $case_show = $Case_model->where("id='$id'")->find();
        $Case_model->where("id='$id'")->setInc('hits');//点击次数加1
        $this->assign('show',$case_show);

        $case_rm = $Case_model->order('hits desc')->limit(3)->select();
        $this->assign('case_rm',$case_rm);

        $this->display();
    }

}