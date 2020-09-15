<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use bachphuc\LaravelHTMLElements\Http\Controllers\ManageBaseController;

class ManageUserBookController extends ManageBaseController{
    protected $modelName = 'book';
    protected $model = 'book';
    protected $activeMenu = 'books';
    protected $searchFields = ['title', 'description'];
    protected $modelRouteName = 'store.users.books';
    // protected $authMiddleware = 'auth';
    // protected $subjectRouteName = 'book';

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
            'description',
        ];

        parent::__construct();
    }

    public function processTable(&$table){

    }

    // public function resolveItemAction($item, $action){
    //     if($action === 'title') return $item->title;
    //     if($action === 'href') return route('books.edit', ['id' => $item->id]);
    //     return null;
    // }

    public function init(){
        parent::init();
        
        $this->breadcrumbs = [
            [
                'title' => 'Books',
                'url' => route($this->modelRouteName. '.index', $this->routeParams)
            ]
        ];
    }

    public function processQuery(Request $request, &$query){
        if(isset($this->routeParams['user'])){
            $query->where('user_id', $this->routeParams['user']->id);
        }
    }
}