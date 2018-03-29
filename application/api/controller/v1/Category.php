<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 17:02
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\api\Validate\IDMustBePostiveInt;
use app\lib\exception\CategoryException;


class Category
{
    public function getAllCategories(){
        $categories=CategoryModel::with('img')->select();
        if($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }

}