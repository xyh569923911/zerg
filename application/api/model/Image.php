<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/7
 * Time: 18:09
 */

namespace app\api\model;


use think\Model;

class Image extends BaseModel
{
  protected $hidden=["id","from","delete_time","update_time"];

  public function getUrlAttr($value,$data){
     return $this->prefixImgUrl($value,$data);
  }
}