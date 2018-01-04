<?php
namespace app\back\validate;

use think\Validate;

class SeoSetValidate extends Validate{
	protected $rule = [
		'nav_id'  =>  'require|in:1,2,3,4,5,6,7,8,9',
		'title' =>  'require',
		'keywords' =>  'require',
	];
	protected $message  =   [
		'nav_id.require' => '导航必须',
		'title.require'   => 'seo标题必须',
		'keywords.require'   => 'seo关键词必须',
        'description.require'   => 'seo描述必须',

	];


}