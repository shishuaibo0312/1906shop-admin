<?php

namespace App\Admin\Controllers;

use App\Model\ShopGoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\ShopGoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ShopGoodsModel());

        $grid->column('gid', __('Gid'));
        $grid->column('g_name', __('G name'));
        $grid->column('g_jiage', __('G jiage'));
        $grid->column('g_jifen', __('G jifen'));
        $grid->column('g_kucun', __('G kucun'));
        $grid->column('g_img', __('G img'))->image();
        //$grid->column('g_huohao', __('G huohao'));
       //$grid->column('g_imgs', __('G imgs'))->image();
        $grid->column('g_new', __('G new'));
//        $grid->column('g_best', __('G best'));
//        $grid->column('g_hot', __('G hot'));
        $grid->column('g_count', __('G count'));
        $grid->column('g_type', __('G type'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('tid', __('Tid'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ShopGoodsModel::findOrFail($id));

        $show->field('gid', __('Gid'));
        $show->field('g_name', __('G name'));
        $show->field('g_jiage', __('G jiage'));
        $show->field('g_jifen', __('G jifen'));
        $show->field('g_kucun', __('G kucun'));
        $show->field('g_img', __('G img'));
        $show->field('g_huohao', __('G huohao'));
        $show->field('g_imgs', __('G imgs'));
        $show->field('g_new', __('G new'));
        $show->field('g_best', __('G best'));
        $show->field('g_hot', __('G hot'));
        $show->field('g_count', __('G count'));
        $show->field('g_type', __('G type'));
        $show->field('brand_id', __('Brand id'));
        $show->field('tid', __('Tid'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ShopGoodsModel());

        $form->text('g_name', __('G name'));
        $form->decimal('g_jiage', __('G jiage'));
        $form->number('g_jifen', __('G jifen'));
        $form->text('g_kucun', __('G kucun'));
        $form->image('g_img', __('G img'));
        $form->number('g_huohao', __('G huohao'));
        $form->text('g_imgs', __('G imgs'));
        $form->text('g_new', __('G new'));
        $form->text('g_best', __('G best'));
        $form->text('g_hot', __('G hot'));
        $form->textarea('g_count', __('G count'));
        $form->number('g_type', __('G type'));
        $form->number('brand_id', __('Brand id'));
        $form->number('tid', __('Tid'));

        return $form;
    }
}
