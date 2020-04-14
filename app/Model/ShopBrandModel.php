<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopBrandModel extends Model
{
    //商品表
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'shop_brand';
    protected  $primaryKey='brand_id';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = [];
}
