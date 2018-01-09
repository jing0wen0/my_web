<?php
namespace Admin\Controller;
use Controller;
class TieziController extends CommonController {

    public function index(){
        $Tiezi_model = M('Tiezi'); // 实例化Tiezi对象
        $count = $Tiezi_model->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Tiezi_model->order('create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function add(){
        if(!empty($_POST)){
            if ($_POST['title'] == '' || $_POST['content'] == '') {
                $this->error("标题或者内容不能为空");
            }else{
                $Tiezi_model = M('Tiezi');
                $data['title'] = trim($_POST['title']);
                $data['content'] = $_POST['content'];
                $data['create_time'] = strtotime($_POST['create_time']);
                $Tiezi_info = $Tiezi_model->data($data)->add();
                if($Tiezi_info){
                    $this->success("添加成功", U("Tiezi/index"));
                }else{
                    $this->error("添加失败");
                }
            }
        }else{
            $this->display();
        }
    }

    public function save(){
        $id = $_GET['id'];
        $Tiezi_model = M('Tiezi');
        $Tiezi_info = $Tiezi_model->find($id);
        $this->assign('show',$Tiezi_info);

        if(!empty($_POST)){
            if ($_POST['title'] == '' || $_POST['content'] == '') {
                $this->error("标题或者内容不能为空");
            }else{
                $data['id'] = $id;
                $data['title'] = trim($_POST['title']);
                $data['content'] = $_POST['content'];
                $data['create_time'] = strtotime($_POST['create_time']);
                $Tiezi_info = $Tiezi_model->save($data);
                if($Tiezi_info){
                    $this->success("修改成功", U("Tiezi/index"));
                }else{
                    $this->error("修改失败");
                }
            }
        }else{
            $this->display();
        }
    }

    public function delete(){
        $id = $_GET['id'];
        $Tiezi_model = M('Tiezi');
        $Tiezi_info = $Tiezi_model->where("id='$id'")->delete();
        if($Tiezi_info){
            $this->success("删除成功", U("Tiezi/index"));
        }else{
            $this->error("删除失败");
        }
    }

}