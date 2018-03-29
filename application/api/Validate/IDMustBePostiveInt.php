<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/31
 * Time: 17:22
 */

namespace app\api\Validate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule=[
        'id'=>"require|isPositiveInteger"
    ];

    protected  $message=['id'=>'id必须是正整数'];
}