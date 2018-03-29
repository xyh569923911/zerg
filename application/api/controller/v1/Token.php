<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 12:07
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\Validate\TokenGet;

class Token
{
    public function getToken($code=''){
        (new TokenGet())->gocheck();
        $ut=new UserToken($code);
        $token=$ut->get();
        return [
            "token"=>$token
        ];
    }
}