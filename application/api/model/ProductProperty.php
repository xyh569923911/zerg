<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 16:50
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected  $hidden=['product_id','delete_time','update_time'];
}