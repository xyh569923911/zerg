<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 16:14
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function  prefixImgUrl($value,$data){
        $finalUrl=$value;
        if($data['from']==1){
            $finalUrl=config("setting.img_prefix").$value;
        }
        return $finalUrl;
    }
}