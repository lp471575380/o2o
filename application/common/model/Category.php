<?php
namespace app\common\model;

use think\Model;

class Category extends Model
{
	public function add($data)
	{
		$data['status']=1;
		$data['create_time']=time();
		return $this->save($data);
	}
}