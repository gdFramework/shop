<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;
class User extends Model {

 public function demo($phone,$password)
 {
	
		$list = ['phone' => $phone, 'password' => $password];
		
		return $this->save($list);

 }

}
