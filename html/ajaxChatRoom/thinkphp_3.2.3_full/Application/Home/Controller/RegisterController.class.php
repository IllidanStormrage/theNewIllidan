<?php
/**
 * Created by PhpStorm.
 * User: singularis
 * Date: 15-8-24
 * Time: 下午6:46
 */

namespace Home\Controller;
use Think\Controller;

class RegisterController extends  Controller {

    public  function  index () {
        $this->display('Register/index') ;
    }


    public function register () {
        $accident = I(trim('post.inputAddress') , 'htmlspecialchars' ) ;
        $password = I(trim('post.inputPasswordOne') , 'htmlspecialchars' ) ;
        $name = I(trim('post.inputName') , 'htmlspecialchars' ) ;
        $array = [
            'user_accident' => $accident ,
            'user_password' => $password ,
            'user_name' => $name ,
        ] ;
        $panding = [
            'user_name' => $name  ,
        ] ;
        $sql = M('t_login') ;
        $user = $sql->where($panding)->find() ;
        if($user) {
            $this->error('用户名重复' , 'Register' , 3) ;
        } else {
            $add = $sql->data($array)->add();
            if ($add) {
                $this->success('登陆成功', 'Register/index', 3);
                session_start();
                $_SESSION["user_name"] = $user['user_name'];
            } else {
                $this->error('注册失败', 'Register', 3);
            }

        }
}