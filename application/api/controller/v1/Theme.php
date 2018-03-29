<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 16:48
 */

namespace app\api\controller\v1;

use app\api\model\Theme as ThemeModel;
use app\api\Validate\IDCollection;
use app\api\Validate\IDMustBePostiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    /*
     * @url /theme?ids=1,2,3
     * @return 一组theme模型
     */
    public function getSimpleList($ids=''){
        (new IDCollection())->gocheck();
        $ids=explode(',',$ids);
       $result =ThemeModel::with(['topicImg','headImg'])->select($ids);
       if($result->isEmpty()){
           throw new ThemeException();
       }
       return $result;
    }

    public function getComplexOne($id){
        (new IDMustBePostiveInt())->gocheck();
        $theme=ThemeModel::getThemeWithProducts($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme;
    }
}