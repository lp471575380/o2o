<?php
namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{
	public function add()
	{
		return $this->fetch();
	}
	public function index()
	{
		return $this->fetch();
	}
	public function save()
	{
		
		//print_r($_POST);
		//echo $_POST['name'];
		//echo $_POST['parent_id'];
		//print_r(input('post.'));
       	
		$data=input('post.');
		$validate=validate('Category');
		if(!$validate->check($data))
		{
			$this->error($validate->getError());
		}
		model('Category')->add($data);
	}
}