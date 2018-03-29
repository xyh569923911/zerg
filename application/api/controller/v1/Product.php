<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 11:52
 */

namespace app\api\controller\v1;
use app\api\model\Product as ProductModel;
use app\api\Validate\Count;
use app\api\Validate\IDMustBePostiveInt;
use app\lib\exception\ProductException;


class Product
{
    public function getRecent($count=15){
        (new Count())->gocheck();
        $products=ProductModel::getMostRecent($count);
        if($products->isEmpty()){
            throw new ProductException();
        }
        $products->hidden(['summary']);

        return $products;
    }

    public function getAllInCategory($id){
        (new IDMustBePostiveInt())->gocheck();
        $products=ProductModel::getProductsByCategoryID($id);
        if($products->isEmpty()){
            throw  new ProductException();
        }
        $products->hidden(['summary']);
        return $products;
    }

    public function getOne($id){
        (new IDMustBePostiveInt())->gocheck();
        $result=ProductModel::getProductDetail($id);
        if(!$result){
            throw new ProductException();
        }
        return $result;
    }
}