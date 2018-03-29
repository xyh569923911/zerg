<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 15:43
 */

namespace app\api\Validate;


use app\lib\exception\ParameterException;

class OrderPlace extends BaseValidate
{
    protected $rule=[
        'products'=>'checkPorducts',
    ];

    protected $singleRule=[
        'product_id'=>'require|isPositiveInteger',
        'count'=>'require|isPositiveInteger'
    ];
    protected function checkProducts($values){
        if(is_array($values)){
            throw new ParameterException([
                'msg'=>'商品参数不正确',
            ]);
        }
        if(empty($values)){
            throw new ParameterException([
                'msg'=>'商品列表不能为空',
            ]);
        }
        foreach ($values as $value){
            $this->checkProduct($value);
        }
    }

    protected function checkProduct($value){
        $validate=new BaseValidate($this->singleRule);
        $result=$validate->check($value);
        if(!$result){
            throw new ParameterException([
                'msg'=>'商品参数不正确'
            ]);
        }
    }
}