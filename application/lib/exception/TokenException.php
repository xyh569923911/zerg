<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 15:02
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code=401;
    public $msg='Token已过期或无效Token';
    public $error_code=10001;
}