<?php
namespace Admin\Controller;
use Controller;
class RbacController extends CommonController {

    //用户列表
    public function user(){
        $user = M("Admin");
        $user = $user->table(array('my_admin'=>'a','my_role_user'=>'b','my_role'=>'c'))->field('a.id,a.username,a.last_logintime,a.last_ip,c.remark')->where('a.id=b.user_id and b.role_id=c.id')->select();
        $this->assign('user',$user);
        $this->display();
    }

    //添加用户
    public function adduser(){
        $Role = M("Role");
        $role = $Role->select();
        $this->assign('role',$role);

        if (!empty($_POST)) {
            //用户信息
            $user =array(
                'username' => I('username'),
                'pwd' => I('pwd','','md5'),
                'last_logintime' => time(),
                'last_ip' => get_client_ip()
            );
            if ($uid = M("Admin")->add($user)) {
                //角色信息
                $role = array(
                    'role_id' => I('role_id'),
                    'user_id' => $uid
                );
                M('Role_user')->add($role);
                $this->success('添加成功',U('Rbac/user'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->display();
        }
    }

    //修改用户
    public function saveuser(){
        $Role = M("Role");
        $role = $Role->select();
        $this->assign('role',$role);

        $id = $_GET['id'];
        $user = M("Admin");
        $user = $user->table(array('my_admin'=>'a','my_role_user'=>'b','my_role'=>'c'))->field("a.id,a.username,c.id,c.name,c.remark")->where("a.id='$id' and a.id=b.user_id and b.role_id=c.id")->find();
        $this->assign('user',$user);

        if (!empty($_POST)) {
            //修改用户信息
            $user =array(
                'username' => I('username'),
                'pwd' => I('pwd','','md5')
            );
            if ($uid = M("Admin")->where("id='$id'")->save($user)) {
                //修改角色信息
                $data['role_id'] = I('role_id');
                M('Role_user')->where("user_id='$id'")->save($data);
                $this->success('修改成功',U('Rbac/user'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $this->display();
        }
    }

    //删除用户
    public function deluser(){
        $id = $_GET['id'];
        //删除用户
        $user = M("Admin");
        $node = $user->where(array('id'=>$id))->delete();
        //删除角色信息
        $role_user = M('Role_user');
        $role_user = $role_user->where(array('user_id'=>$id))->delete();

        if($node && $role_user){
            $this->success("删除成功", U("Rbac/user"));
        }else{
            $this->error("删除失败");
        }
    }

    //角色列表
    public function role(){
        $Role = M("Role");
        $role = $Role->select();
        $this->assign('role',$role);
        $this->display();
    }

    //添加角色
    public function addrole(){
        if(!empty($_POST)){
            $Role = M("Role");
            $Role->create();
            $role = $Role->add();
            if($role){
                $this->success("添加成功", U("Rbac/role"));
            }else{
                $this->error("添加失败");
            }
        }else{
            $this->display();
        }
    }

    //删除角色
    public function delrole(){
        $id = $_GET['id'];
        $Role = M("Role");
        $role = $Role->where(array('id'=>$id))->delete();

        if($role){
            $this->success("删除成功", U("Rbac/role"));
        }else{
            $this->error("删除失败");
        }
    }

    //节点列表
    public function node(){
        $Node = M("Node");
        $field = array('id','name','title','status','pid');
        $node = $Node->field($field)->order('status asc')->select();
        $node = node_merge($node);
        $this->assign('node',$node);
        $this->display();
    }

    //添加节点
    public function addnode(){
        if(!empty($_POST)){
            $Node = M("Node");
            $Node->create();
            $node = $Node->add();
            if($node){
                $this->success("添加成功", U("Rbac/node"));
            }else{
                $this->error("添加失败");
            }
        }else{
            $this->pid = I('pid',0,'intval');
            $this->level = I('level',1,'intval');
            switch($this->level){
                case 1:
                    $this->type = '节点';
                    break;
                case 2:
                    $this->type = '控制器';
                    break;
                case 3:
                    $this->type = '动作方法';
                    break;
            }
            $this->display();
        }
    }

    //修改节点
    public function savenode(){
        $id = $_GET['id'];
        $Node = M('Node');
        $node_info = $Node->find($id);
        $this->assign('show',$node_info);

        if(!empty($_POST)){
            $Node = M("Node");
            $Node->create();

            $node = $Node->where(array('id'=>$id))->save();
            if($node){
                $this->success("修改成功", U("Rbac/node"));
            }else{
                $this->error("修改失败");
            }
        }else{
            $this->pid = I('pid',0,'intval');
            $this->level = I('level',1,'intval');
            switch($this->level){
                case 1:
                    $this->type = '节点';
                    break;
                case 2:
                    $this->type = '控制器';
                    break;
                case 3:
                    $this->type = '动作方法';
                    break;
            }
            $this->display();
        }
    }

    //删除节点
    public function deletenode(){
        $id = $_GET['id'];
        $Node = M("Node");
        $node = $Node->where(array('id'=>$id))->delete();
        if($node){
            $this->success("删除成功", U("Rbac/node"));
        }else{
            $this->error("删除失败");
        }
    }

    //配置权限
    public function access(){
        $rid = I('rid',0,'intval');
        $field = array('id','name','title','pid');
        $node = M('Node')->field($field)->order('status asc')->select();

        //原有权限
        $access = M('Access')->where(array('role_id'=>$rid))->getField('node_id',true);
        $this->node = node_merge($node, $access);
        $this->assign('rid',$rid);
        $this->display();
    }

    //修改权限
    public function saveaccess(){
        $rid = I('rid',0,'intval');
        $db = M("Access");
        //删除原权限
        $db->where(array('role_id'=>$rid))->delete();

        //组合新权限
        $data = array();
        foreach ($_POST['access'] as $value) {
            $tmp = explode('_', $value);
            $data[] = array(
                'role_id'=>$rid,
                'node_id'=>$tmp[0],
                'level'=>$tmp[1]
            );
        }

        //插入新权限
        if ($db->addAll($data)) {
            $this->success('修改成功',U('Admin/Rbac/role'));
        }else{
            $this->error('修改失败');
        }

    }
}