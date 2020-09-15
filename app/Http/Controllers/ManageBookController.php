<?php

namespace App\Http\Controllers;

use bachphuc\LaravelHTMLElements\Http\Controllers\ManageBaseController;

class ManageBookController extends ManageBaseController{
    protected $modelName = 'book';
    protected $model = 'book';
    protected $activeMenu = 'books';
    protected $searchFields = ['title', 'description'];
    protected $modelRouteName = 'store.books';
    // protected $authMiddleware = 'auth';

    protected $itemDisplayField = 'title';

    public function __construct(){
        $this->formElements = [
            'title' => [
                'validator' => 'required',
                'type' => 'text',
            ],
            'description' => [
                'type' => 'text',
                'validator' => 'required',
            ],
            'user_id' => [
                'type' => 'select',
                'options' => [
                    'model' => 'user',
                    'display_field' => 'name'
                ]
            ]
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
            'user' => [
                'render' => function($book){
                    if(!$book->user) return '';
                    $href = route('store.users.books.index', ['user' => $book->user]);
                    $html = "<a href='{$href}'>{$book->user->name}</a>";
                    return $html;
                }
            ],
            'description'
        ];

        parent::__construct();
    }

    public function processTable(&$table){

    }
}