<?php
namespace Admin\Controller;
use Controller;
class MessageController extends CommonController {

    public function index(){
        $Message_model = M('Message'); // 实例化Case对象
        $count = $Message_model->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Message_model->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function save(){
        $id = $_GET['id'];
        $Message_model = M('Message');
        $Message_info = $Message_model->find($id);
        $this->assign('show',$Message_info);
        $this->display();
    }

    public function delete(){
        $id = $_GET['id'];
        $Message_model = M('Message');
        $Message_info = $Message_model->where("id='$id'")->delete();
        if($Message_info){
            $this->success("删除成功", U("Message/index"));
        }else{
            $this->error("删除失败");
        }
    }

}