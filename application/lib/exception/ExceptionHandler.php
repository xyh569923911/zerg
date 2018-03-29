<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 16:41
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $error_code;

    public function render(\Exception $e)
    {
        if($e instanceof BaseException){
            $this->code=$e->code;
            $this->msg=$e->msg;
            $this->error_code=$e->error_code;
        }else{
            if(config('app_debug')){
               return parent::render($e);
            }else{
                $this->code=500;
                $this->msg='服务器内部错误';
                $this->error_code=999;
                $this->recordErrorLog($e);
            }

        }
        $request=Request::instance();
        $result=[
            'msg'=>$this->msg,
            '$error_code'=>$this->error_code,
            'request_url'=>$request->url()
        ];
        return json($result,$this->code);
    }

    public function recordErrorLog(\Exception $e){
        Log::init([
            'type'=>'file',
            'path'  => LOG_PATH,
            'level' => ['error']
        ]);
        Log::info($e->getMessage());
    }
}