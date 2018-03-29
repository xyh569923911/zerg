<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 11:57
 */

namespace app\api\Validate;


class Count extends BaseValidate
{
    protected  $rule=[
        'count'=>'isPositiveInteger|between:1,15'
    ];
}