<?php
namespace app\index\controller;
use app\index\model\User as haha;
use think\Controller;
use  think\Request;
class User extends Controller
{
    public function login()
    {
        return $this->fetch();
    }

    public function dologin()
    {
    	
    }


    public function regist()
    {
        return $this->fetch();
    }

    public function doRegister()
    {
    
    $phone = input('param.phone');
    $password = input('param.password');
 
       $user = new haha();
	$data = $user->demo($phone, $password);
	
	return json_encode($data);

    }
}
