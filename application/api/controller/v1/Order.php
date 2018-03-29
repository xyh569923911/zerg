<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 18:05
 */

namespace app\api\controller\v1;
use app\api\service\Token as TokenService;
use app\api\controller\BaseController;
use app\api\Validate\OrderPlace;

class Order extends BaseController
{
    protected $beforeActionList=[
        'checkExclusiveScope'=>['only'=>'placeOrder'],
    ];

    public function placeOrder(){
        (new OrderPlace())->gocheck();
        $products=input("post.products/a");
        $uid=TokenService::getCurrentUid();

    }

}