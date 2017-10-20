<?php
namespace app\index\controller;
use think\Controller;
class Seller extends Controller
{
    public function index()
    {

        return $this->fetch();
    }
}
