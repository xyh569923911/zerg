<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/19
 * Time: 10:31
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\model\User as UserModel;
use app\api\service\Token as TokenService;
use app\api\Validate\AddressNew;
use app\lib\exception\SuccessMessage;

class Address extends BaseController
{
    protected  $beforeActionList=[
        'checkPrimaryScope'=>['only'=>'createOrUpdateAddress'],
    ];



    public function  createOrUpdateAddress(){
        $validate=new AddressNew();
        $validate->gocheck();
        $uid=TokenService::getCurrentUid();
        $user=UserModel::get($uid);
        if(!$user){
            throw new UserException();
        }
        $dataArray=$validate->getDataByRule(input('post.'));
        $address=$user->address;
        if(!$address){
            $user->address()->save($dataArray);
        }else{
            $user->address->save($dataArray);
        }
        return json(new SuccessMessage(),201);
    }
}