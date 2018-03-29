<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 16:26
 */

namespace app\api\Validate;


class IDCollection extends BaseValidate
{
    protected $rule=[
        'ids'=>'require|checkIDs',
    ];

    protected $message=['ids'=>'id必须是已逗号分割的正整数'];

    protected function checkIDs($value){
        $values=explode(',',$value);
        if(empty($values)){
            return false;
        }
        foreach ($values as $ids){
            if(!$this->isPositiveInteger($ids)){
                return false;
            }
        }
        return true;
    }
}