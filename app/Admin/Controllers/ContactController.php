<?php

namespace App\Admin\Controllers;

use App\Models\Content;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Content';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Content());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('hurigana', __('Hurigana'));
        $grid->column('email', __('Email'));
        $grid->column('tel', __('Tel'));
        $grid->column('message', __('Message'));
        $grid->column('contact', __('Contact'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Content::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('hurigana', __('Hurigana'));
        $show->field('email', __('Email'));
        $show->field('tel', __('Tel'));
        $show->field('message', __('Message'));
        $show->field('contact', __('Contact'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Content());

        $form->text('name', __('Name'));
        $form->text('hurigana', __('Hurigana'));
        $form->email('email', __('Email'));
        $form->text('tel', __('Tel'));
        $form->textarea('message', __('Message'));
        $form->text('contact', __('Contact'));

        return $form;
    }
}
