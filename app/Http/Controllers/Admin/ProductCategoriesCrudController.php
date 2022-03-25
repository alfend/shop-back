<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCategoriesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCategoriesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCategoriesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ProductCategories::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product-categories');
        CRUD::setEntityNameStrings('категорию', 'категории');
        //CRUD::setEntityNameStrings('product categories', 'product categories');
    }

    protected function setupListOperation()
    {
        $this->crud->setColumns(
            [
                [
                    'name' => 'id',
                    'type'=>'text',
                    'label' => '#',
                ],
                [
                    'name' => 'title',
                    'label' => 'Название',
                ],
                [
                    'name' => 'parent_category_id',
                    'label' => 'Родительская категория',
                ],
                [
                    'name' => 'slug',
                    'label' => 'Url',
                ],
            ]
        );
    }

    protected function setupShowOperation(): void
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->setColumns(
            [
                [
                    'name' => 'title',
                    'label' => 'Отображаемое название',
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
                [
                    'name' => 'parent',
                    'type' => 'relationship',
                    'attribute'=>'title',
                    'label' => 'Родительская категория',
                ],
                [
                    'name' => 'slug',
                    'label' => 'Url',
                ],
                [
                    'name' => 'sort',
                    'label' => 'Сортировка',
                ],
            ]
        );
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductCategoriesRequest::class);
        $this->crud->addFields(
            [
                [
                    'name' => 'title',
                    'label' => 'Отображаемое название',
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
                [
                    'name' => 'parent',
                    'type' => 'relationship',
                    'attribute'=>'name',
                    'label' => 'Родительская категория',
                ],
                [
                    'name' => 'slug',
                    'label' => 'Url',
                ],
                [
                    'name' => 'sort',
                    'label' => 'Сортировка',
                    'default' => 1000,
                ],
            ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
