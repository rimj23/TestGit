<?php

namespace App\Admin\Controllers;

use App\Member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Member';



    // public function index()
    // {
    //   return Admin::content(function(Content $content){
    //   $content->body($this->grid()->render());
    //   });
    // }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member());


        $grid->column('id', __('ID'))->sortable();
        $grid->column('varchar', __('Varchar'))->image();
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Member::findOrFail($id));


        $show->field('id', __('ID'));
        $grid->column('varchar', __('Varchar'));
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
        $form = new Form(new Member());
    

        $form->display('id', __('ID'));
        $form->text('name', __('Name'));
        $form->image('varchar', __('Varchar'))->move('public/upload/image1/');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));
        
   
        return $form;
    }



}
