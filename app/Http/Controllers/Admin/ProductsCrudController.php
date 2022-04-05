<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Products::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/products');
        CRUD::setEntityNameStrings('продукт', 'продукты');
    }

    protected function setupListOperation()
    {
        $this->crud->setColumns(
            [
                [
                    'name' => 'title',
                    'label' => 'Название',
                ],
                [
                    'name' => 'category',
                    'type' => 'relationship',
                    'label' => 'Категория',
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
                    'name' => 'short_description',
                    'label' => 'Краткое описание',
                ],
                [
                    'name' => 'description',
                    'label' => 'Описание',
                ],
                [
                    'name' => 'type',
                    'label' => 'Тип',
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
                [
                    'name' => 'category_id',
                    'type' => 'relationship',
                    'attribute'=>'title',
                    'label' => 'Категория',
                ],
                [
                    'name' => 'slug',
                    'label' => 'Url',
                ],
                [
                    'name' => 'price',
                    'label' => 'Цена',
                ],
                [
                    'name' => 'old_price',
                    'label' => 'Старая цена',
                ],
                [
                    'name' => 'discount',
                    'label' => 'Скинда',
                ],
                [
                    'name' => 'on_main',
                    'label' => 'На главной',
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
        CRUD::setValidation(ProductsRequest::class);
        $this->crud->addFields(
            [
                [
                    'name' => 'title',
                    'label' => 'Отображаемое название',
                ],
                [
                    'name' => 'description',
                    'label' => 'Описание',
                ],
                [
                    'name' => 'short_description',
                    'label' => 'Краткое описание',
                ],
                [
                    'name' => 'type',
                    'label' => 'Тип',
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
                [
                    'name' => 'category_id',
                    'type' => 'relationship',
                    'attribute'=>'title',
                    'label' => 'Категория',
                ],
                [
                    'name' => 'slug',
                    'label' => 'Url',
                ],
                [
                    'name' => 'price',
                    'label' => 'Цена',
                ],
                [
                    'name' => 'old_price',
                    'label' => 'Старая цена',
                ],
                [
                    'name' => 'discount',
                    'label' => 'Скинда',
                ],
                [
                    'name' => 'on_main',
                    'label' => 'На главной',
                ],
                [
                    'name' => 'sort',
                    'label' => 'Сортировка',
                    'default' => 1000,
                ],
            ]
        );
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
