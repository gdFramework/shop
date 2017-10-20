<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Base extends Controller
{
	public function _initialize()
	{
		if(!Session::get('admin_name')){
			$this->error('您还没有登录',url('admin/Admin/login'));
		}
	}
}