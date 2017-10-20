<?php
namespace app\index\controller;
use think\Controller;
class Goods extends Controller
{
	public function goodsInfo()
	{
		return $this->fetch();
	}
	
	public function goodsList()
	{
		return $this->fetch();
	}
}