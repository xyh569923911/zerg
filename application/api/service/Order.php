<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 16:40
 */

namespace app\api\service;


class Order
{
    protected  $uid;
    //客户提交过来的商品列表
    protected  $oproducts;
    //数据库查询出来的商品列表
    protected  $products;

    public function place($oproducts){
        $this->oproducts=$oproducts;
        $pid=array();
        foreach ($this->oproducts as $product){
            array_push($pid,$product['product_id']);
        }
    }
}
