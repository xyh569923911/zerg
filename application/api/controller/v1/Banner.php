<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/31
 * Time: 10:42
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\Validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
    public function getBanner($id){
        (new IDMustBePostiveInt())->gocheck();
        $banner = BannerModel::getBannerById($id);
        if(!$banner){
            throw new BannerMissException();
        }
        return $banner;
    }
}