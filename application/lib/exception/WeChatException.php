<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 11:10
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code=400;
    public $msg='微信接口调用失败';
    public $error_code=999;
}