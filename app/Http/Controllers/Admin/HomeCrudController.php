<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HomeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HomeCrudController extends CrudController
{
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Home::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/home');
        CRUD::setEntityNameStrings('Главная', 'Главная');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->setColumns(
            [
                [
                    'name' => 'title',
                    'label' => 'Название',
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
                    'type' => 'text'
                ],
                [
                    'name' => 'description',
                    'label' => 'Описание',
                ],
                [
                    'name' => 'banner',
                    'label' => 'Баннер',
                    'type' => 'upload_multiple',
                    'disk' => 'public',
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
            ]
        );
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(HomeRequest::class);
        $this->crud->addFields(
            [
                [
                    'name' => 'title',
                    'label' => 'Отображаемое название',
                    'type' => 'text'
                ],
                [
                    'name' => 'description',
                    'label' => 'Описание',
                ],
                [
                    'name' => 'banner',
                    'label' => 'Баннер',
                    'type' => 'upload_multiple',
                    'disk' => 'public',
                    'upload'    => true,
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
            ]
        );
    }

    protected function setupUpdateOperation()
    {
        CRUD::setValidation(HomeRequest::class);
        $this->crud->addFields(
            [
                [
                    'name' => 'title',
                    'label' => 'Отображаемое название',
                    'type' => 'text'
                ],
                [
                    'name' => 'description',
                    'label' => 'Описание',
                ],
                [
                    'name' => 'banner',
                    'label' => 'Баннер',
                    'type' => 'upload_multiple',
                    'disk' => 'public',
                    'upload'    => true,
                ],
                [
                    'name' => 'image',
                    'label' => 'Картинка',
                    'type' => 'image',
                ],
            ]
        );
    }
}
