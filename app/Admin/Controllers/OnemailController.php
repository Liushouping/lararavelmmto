<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Onemail;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class OnemailController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Onemail(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('email');
            $grid->column('on_true');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Onemail(), function (Show $show) {
            $show->field('id');
            $show->field('email');
            $show->field('on_true');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Onemail(), function (Form $form) {
            $form->display('id');
            $form->text('email');
            $form->text('on_true');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
