<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Controller;
use think\Validate;
use think\Db;
use app\admin\model\Admin as AdminModel;
class Admin extends Controller
{
	public function login()
	{
		return $this->fetch();
	}
	public function doLogin()
	{	
		$captcha = input('post.captcha');
		$name = input('post.username');
		$password = input('post.password');
		$validate = new validate([
					'验证码'=>'require|captcha',
					'用户名'=>'require',
					'密码'=>'require'
				]);

		$data = [
			'验证码'=>$captcha,
			'用户名'=>$name,
			'密码'=>$password
		];

		if(!$validate->check($data)){
			return json_encode([
							'status'=>0,
							'msg'=>$validate->getError()
						]);
		}
		$user = new AdminModel();
		$data = $user->check($name, $password);
		return json_encode($data);
	}
}
