<?php
namespace Index\Controller;
use Think\Controller;
class ContactController extends BasicController {
    public function contact(){
        if(!empty($_POST)){
            $Message_model = M('Message');
            $data['name'] = trim($_POST['name']);
            $data['email'] = trim($_POST['email']);
            $data['title'] = trim($_POST['title']);
            $data['content'] = $_POST['content'];
            $data['time'] = time();
            $message_info = $Message_model->data($data)->add();
            if($message_info){
                $this->success("留言成功", U("Contact/contact"));
            }else{
                $this->error("留言失败");
            }
        }else{
            $this->display();
        }
    }
}