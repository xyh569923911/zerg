<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/19
 * Time: 16:39
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden =['id', 'delete_time', 'user_id'];
}