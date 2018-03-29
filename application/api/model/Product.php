<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 16:48
 */

namespace app\api\model;

class Product extends BaseModel
{
    protected $hidden=['delete_time','from','create_time','update_time','pivot'];

    public  function imgs(){
        return $this->hasMany('ProductImage','product_id','id');
    }
    public function properties(){
        return $this->hasMany('ProductProperty','product_id','id');
    }

    protected  function getMainImgUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }

    public  static  function  getMostRecent($count){
        $products=self::limit($count)->order("create_time desc")->select();
        return $products;
    }

    public static function getProductsByCategoryID($categoryID){
        $products=self::where("category_id","=",$categoryID)->select();
        return $products;
    }

    public static function getProductDetail($id){
         $product=self::with([
             'imgs'=>function($q){
                 $q->with('imgUrl')->order('order','asc');
             }
         ])
             ->with('properties')
             ->find($id);
         return $product;
    }
}