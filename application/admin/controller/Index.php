<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class Index extends Base
{
	public function index()
	{
		//获取菜单
		$arr = getMenu();
		$this->assign('jj','sjj');
		$this->assign('arr', $arr);
		return $this->fetch();
	}
	public function welcome()
	{
		return $this->fetch();
	}
}