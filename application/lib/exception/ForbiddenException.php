<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/27
 * Time: 18:22
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code=403;
    public $msg='权限不够';
    public $error_code=10001;
}