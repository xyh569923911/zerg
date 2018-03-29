<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/24
 * Time: 17:51
 */

namespace app\api\model;


use function PHPSTORM_META\type;
use think\Db;
use think\Exception;
use think\Model;

class Banner extends BaseModel
{
//    protected $table="category";一个模型对应一张表，但也可以对应不同的表
    protected $hidden=['delete_time','update_time'];
    public function items(){//关联另一个模型对应的表
       return  $this->hasMany("BannerItem",'banner_id','id');
    }

    public static  function  getBannerById($id)
    {
        $banner = self::with(["items",'items.img'])->find($id);
        return $banner;
    }
}