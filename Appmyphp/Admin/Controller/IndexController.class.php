<?php
namespace Admin\Controller;
use Controller;
class IndexController extends CommonController {
    public function index(){
        // if(!isset($_SESSION['uid'])){
        //     $this->redirect("Login/login");
        // }
        $this->display();
    }
    public function left(){
        $this->display();
    }
    public function swich(){
        $this->display();
    }
    public function main(){
        $this->display();
    }
}