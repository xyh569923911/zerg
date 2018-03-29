<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 16:49
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden=['topic_img_id','delete_time','update_time','head_img_id'];
   public function topicImg(){
       return $this->belongsTo("Image",'topic_img_id','id');
   }

   public function headImg(){
       return $this->belongsTo("Image",'head_img_id','id');
   }

   public function products(){
       return $this->belongsToMany('Product','theme_product','product_id','theme_id');
   }

   public static function getThemeWithProducts($id){
       $theme=self::with(['topicImg','headImg','products'])->find($id);
       return $theme;
   }
}