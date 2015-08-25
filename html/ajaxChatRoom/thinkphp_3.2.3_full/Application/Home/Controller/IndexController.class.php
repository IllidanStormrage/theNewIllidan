<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index() {
        $this->display('Index/login') ;
    }

    public  function login() {
        $accident = I(trim('post.inputAddress') , 'htmlspecialchars' ) ;
        $password = I(trim('post.inputPassword') , 'htmlspecialchars' ) ;
        $array = [
            'user_accident' => $accident ,
            'user_password' => $password ,
        ] ;
        $sql = M('t_login') ;
        $user = $sql->where($array)->find() ;
        if ($user) {
            if($user['user_state'] == 1)  {
                $this->error('你已经被管理员禁止聊天' , 'Index' , 3) ;
            }   else {
                $this->success('登陆成功' , '../Register/index' , 3) ;
                session_start();
                $_SESSION["user_name"]=$user['user_name'] ;

            }
        } else {
            $this->error('账号或密码错误,请重新登陆' , 'Index' ,  3) ;
        }
    }

}