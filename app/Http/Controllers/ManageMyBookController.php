<?php
namespace App\Http\Controllers;

use bachphuc\LaravelHTMLElements\Http\Controllers\ManageBaseController;

class ManageMyBookController extends ManageBaseController{
    protected $modelName = 'book';
    protected $model = 'book';
    protected $activeMenu = 'books';
    protected $searchFields = ['title'];

    protected $modelRouteName = 'my.books';
    protected $authMiddleware = 'auth';

    protected $itemDisplayField = 'title';

    protected $layout = 'bachphuc.elements::layouts.admin';

    public function __construct(){
        $this->formElements = [
            'title' => [
                'validator' => 'required',
                'type' => 'text',
            ],
        ];

        $this->breadcrumbs = [
            [
                'title' => 'Books',
                'url' => route($this->modelRouteName. '.index')
            ]
        ];

        $this->fields = [
            'id',
            'title',
        ];

        parent::__construct();
    }

    public function processTable(&$table){

    }
}