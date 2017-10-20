<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Category;
class Goods extends Base
{
	//后台商品列表管理
	public function goodsList()
	{

	}
	//后台商品分类
	public function categoryList()
	{/*
		$cat = new Category();
		$cat->data(['c_name'=>'手机','fid'=>2]);
		$cat->save();die;*/
		$cat = new Category();
		$arr = $cat->getAll();
		$this->assign('arr',$arr);
		return $this->fetch();
	}

}