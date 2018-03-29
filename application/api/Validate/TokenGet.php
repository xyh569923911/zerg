<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 12:26
 */

namespace app\api\Validate;


class TokenGet extends BaseValidate
{
    protected $rule=[
        'code'=>'require|isNotEmpty',
    ];

    public $message=[
        'code'=>"没有token还想获取数据，是不行的",
    ];

}