<?php

namespace index\controller;

use index\model\UserModel;


class IndexController extends BaseController
{

	protected $user;//用户model
	


	public function _init()
	{
		$this->user = new UserModel();
		
	}

	public function index()
	{
		
		//加载首页
		$this->display();
	}

	

	
}