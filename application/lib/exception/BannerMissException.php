<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 16:47
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
   public  $code=404;
   public  $msg='请求的banner未找到';
   public  $error_code=40000;
}