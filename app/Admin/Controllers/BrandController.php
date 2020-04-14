<?php

namespace App\Admin\Controllers;

use App\Model\ShopBrandModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BrandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\ShopBrandModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ShopBrandModel());

        $grid->column('brand_id', __('Brand id'));
        $grid->column('brand_name', __('Brand name'));
        $grid->column('brand_logo', __('Brand logo'));
        $grid->column('brand_desc', __('Brand desc'));
        $grid->column('brand_url', __('Brand url'));

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
        $show = new Show(ShopBrandModel::findOrFail($id));

        $show->field('brand_id', __('Brand id'));
        $show->field('brand_name', __('Brand name'));
        $show->field('brand_logo', __('Brand logo'));
        $show->field('brand_desc', __('Brand desc'));
        $show->field('brand_url', __('Brand url'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ShopBrandModel());

        $form->text('brand_name', __('Brand name'));
        $form->text('brand_logo', __('Brand logo'));
        $form->text('brand_desc', __('Brand desc'));
        $form->text('brand_url', __('Brand url'));

        return $form;
    }
}
