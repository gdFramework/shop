<?php
namespace app\admin\model;
use app\admin\model\Common;
use think\Db;
use think\Session;
class Admin extends Common
{
	public function check($name,$password)
	{
		$password = md5($password);
		if(!Db::name('admin')->where('admin_name',$name)->find()){
			return [
				'status'=>0,
				'msg'=>'账号不存在'
				];
		}
		if(!Db::name('admin')->where('password',$password)->find()){
			return [
				'status'=>0,
				'msg'=>'账号与密码不匹配'
				];
		}
		Session::set('admin_name', 'sjj');
		return [
			'status'=>1,
			'msg'=>'验证成功'
			];
	}
}