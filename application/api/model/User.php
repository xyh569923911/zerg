<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 12:25
 */

namespace app\api\model;


class User extends BaseModel
{
    public function address(){
        return $this->hasOne("UserAddress",'user_id','id');
    }
    public static function getByOpenId($openID){
        $result=self::where("openid",'=',$openID)->find();
        return $result;
    }
}