<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/31
 * Time: 16:11
 */

namespace app\api\Validate;

use think\Validate;

class ValidateTest extends Validate
{
     protected  $rule=[
         'name'=>'require|max:10|alpha',
         'email'=>'email'
     ];
}