<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Student;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());

        $grid->column('id', __('Id'));
        $grid->column('Name', __('Name'));
        $grid->column('DOB', __('DOB'));
        $grid->column('Major', __('Major'));
        $grid->column('Email', __('Email'));
        $grid->column('Image')->image();
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
        $show = new Show(Student::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Name', __('Name'));
        $show->field('DOB', __('DOB'));
        $show->field('Major', __('Major'));
        $show->field('Email', __('Email'));
        $show->field('Image', __('Image'));
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
        $form = new Form(new Student());

        $form->text('Name', __('Name'));
        $form->date('DOB', __('DOB'))->default(date('Y-m-d'));
        $form->text('Major', __('Major'));
        $form->email('Email', __('Email'));
        $form->image('Image', __('Image'));

        return $form;
    }
}
