<?php

namespace App\Admin\Controllers;

use App\Product;
use App\Type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('long_description', __('Long description'));
        $grid->column('short_description', __('Short description'));
        $grid->column('type_id', __('Type id'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('in_stock', __('In stock'));
        $grid->column('amount', __('Amount'));
        $grid->column('discount', __('Discount'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('views', __('Views'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('long_description', __('Long description'));
        $show->field('short_description', __('Short description'));
        $show->field('type_id', __('Type id'));
        $show->field('brand_id', __('Brand id'));
        $show->field('in_stock', __('In stock'));
        $show->field('amount', __('Amount'));
        $show->field('discount', __('Discount'));
        $show->field('quantity', __('Quantity'));
        $show->field('views', __('Views'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());
        $form->text('name', __('Name'));
        $form->textarea('long_description', __('Long description'));
        $form->textarea('short_description', __('Short description'));

        $form->number('brand_id', __('Brand id'));
        $states = [
            'on' => ['value' => '1', 'text' => 'In stock', 'color' => 'primary'],
            'off' => ['value' => '0', 'text' => 'Out of stock', 'color' => 'default'],
        ];
        $form->switch('in_stock', __('In stock'))->states($states);
        $form->decimal('amount', __('Amount'));
        $form->decimal('discount', __('Discount'));
        $form->number('quantity', __('Quantity'));
        $form->multipleImage('image');

        return $form;
    }
}
