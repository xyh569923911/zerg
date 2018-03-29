<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 12:41
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code=404;
    public $msg='指定的商品部存在，请检查参数';
    public $error_code=20000;
}