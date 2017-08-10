<?php

namespace admin\controller;

class IndexController extends BaseController
{

	


	public function _init()
	{
		$this->user = new UserModel();
		
	}

	//加载后台首页
	public function index()
	{
		if(empty($_SESSION['admin']))
		{
			$this->error('非管理员登录！！禁止访问！！！','index.php');
		}else{

			$this->display();
		}
		
	}
	

}