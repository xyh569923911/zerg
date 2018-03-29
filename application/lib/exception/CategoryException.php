<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 17:06
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code=404;
    public $msg='指定的目录，不存在';
    public $error_code=50000;
}