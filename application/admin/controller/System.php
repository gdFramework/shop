<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class System extends Base
{
	public function index()
	{
		
		return $this->fetch();
	}
}