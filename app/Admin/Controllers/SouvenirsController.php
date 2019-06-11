<?php

namespace App\Admin\Controllers;

use App\Models\Souvenir;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SouvenirsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Products List')
//            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Souvenir);

        $grid->id('Id')->sortable();
        $grid->Name('Product Name');
        $grid->Description('Description');
        $grid->Price('Price');
        $grid->PathOfImage('PathOfImage');
        $grid->SupplierID('SupplierID');
        $grid->CategoryID('CategoryID');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });

        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

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
        $show = new Show(Souvenir::findOrFail($id));

        $show->id('Id');
        $show->Name('Name');
        $show->Description('Description');
        $show->Price('Price');
        $show->PathOfImage('PathOfImage');
        $show->SupplierID('SupplierID');
        $show->CategoryID('CategoryID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Souvenir);

        $form->text('Name', 'Name');
        $form->text('Description', 'Description');
        $form->decimal('Price', 'Price');
        $form->text('PathOfImage', 'PathOfImage');
        $form->number('SupplierID', 'SupplierID');
        $form->number('CategoryID', 'CategoryID');

        return $form;
    }
}
