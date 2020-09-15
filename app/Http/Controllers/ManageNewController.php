<?php
namespace App\Http\Controllers;

class ManageNewController extends ManageController{
    protected $modelName = 'book';
    protected $model = 'book';
    protected $activeMenu = 'books';
    protected $searchFields = ['title'];

    protected $modelRouteName = 'news';
    protected $authMiddleware = 'auth';
    protected $layout = 'bachphuc.elements::layouts.admin';
     
    
    protected $itemDisplayField = 'title';
    
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