<?php
namespace app\admin\validate;

use think\Validate;

class Category extends Validate
{
	protected $rule=[
		'name'      => 'require|max:25',
        'parent_id' => 'number',
		
	
	];

	protected $message=[
		'name.require'      => '分类名称不能为空',
		'name.max'          => '分类名称最多不超过25个字符',
		'parent_id'         => '是数字',
                       

	];
	
}