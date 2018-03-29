<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 18:33
 */

namespace app\api\controller;
use app\api\service\Token as TokenService;

use think\Controller;

class BaseController extends Controller
{
    protected function checkExclusiveScope(){
        TokenService::needExclusiveScope();
    }

    protected function checkPrimaryScope(){
        TokenService::needPrimaryScope();
    }
}