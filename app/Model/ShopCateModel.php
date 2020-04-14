<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopCateModel extends Model
{
    //商品分类表
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'shop_cate';
    protected  $primaryKey='tid';

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
