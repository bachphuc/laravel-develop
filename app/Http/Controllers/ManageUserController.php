<?php

namespace App\Http\Controllers;

use bachphuc\LaravelHTMLElements\Http\Controllers\ManageBaseController;

class ManageUserController extends ManageBaseController{
    protected $model = 'user';
    protected $activeMenu = 'users';
    protected $searchFields = ['email', 'name'];
    protected $modelRouteName = 'users';
    protected $authMiddleware = 'auth';

    public function __construct(){
        // $this->formElements = [
        //     'name' => [
        //         'validator' => 'required',
        //         'type' => 'text',
        //         'title' => trans('lang.full_name')
        //     ],
        //     'email' => [
        //         'type' => 'text',
        //         'validator' => 'required|unique:users',
        //         'validator_update' => 'required'
        //     ],
        //     'password' => [
        //         'type' => 'text',
        //         'validator' => 'required',
        //         'validator_update' => '',
        //         'input_type' => 'password',
        //         'encode' => 'bcrypt',
        //         'leave_if_empty' => true
        //     ]
        // ];

        // $this->fields = [
        //     'id',
        //     'name',
        //     'email'
        // ];

        $this->pageConfig = [
            'form' => [
                'name' => [
                    'validator' => 'required',
                    'type' => 'text',
                    'title' => trans('lang.full_name')
                ],
                'email' => [
                    'type' => 'text',
                    'validator' => 'required|unique:users',
                    'validator_update' => 'required'
                ],
                'password' => [
                    'type' => 'text',
                    'validator' => 'required',
                    'validator_update' => '',
                    'input_type' => 'password',
                    'encode' => 'bcrypt',
                    'leave_if_empty' => true
                ]
            ],
            'table' => [
                'fields' => [
                    'id',
                    'name',
                    'email'
                ],
                'custom_actions' => [
                    [
                        'title' => 'View books',
                        'route' => 'store.users.books.index'
                    ],
                    [
                        'title' => 'View profile',
                        'route' => 'users.show'
                    ]
                ],
            ],
            'auth_middleware' => 'auth',
            'model_route_name' => 'users',
            'item_display_field' => 'name',
            'model' => 'user',
            'active_menu' => 'users',
            'search_fields' => ['name', 'email'],
            'custom_views' => [
                'show' => 'users.show'
            ],
            'breadcrumbs' => [
                [
                    'title' => 'Manage Users',
                    'url' => route('users.index')
                ]
            ]
        ];
        parent::__construct();
    }

    public function processTable(&$table){
        // $table->setItemUrlResolve(function($item, $action, $params){
        //     return route('users.' . $action, ['id' => $item->id]);
        // });

        // $table->setCustomAction([
        //     [
        //         'title' => 'View books',
        //         'route' => 'store.users.books.index'
        //     ],
        //     [
        //         'title' => 'View profile',
        //         'route' => 'users.show'
        //     ]
        // ]);
    }

    // public function resolveItemAction($item, $action){
    //     if($action === 'title') return $item->name;
    //     if($action === 'href') return route('users.edit', ['id' => $item->id]);
    //     return null;
    // }

    // public function resolveItemUrl($item, $action){
    //     if($action === 'index') return route('users.index');
    //     if($action === 'create') return route('users.create');
    //     if($action === 'show') return route('users.show', ['id' => $item->id]);
    //     if($action === 'edit') return route('users.edit', ['id' => $item->id]);
    //     if($action === 'update') return route('users.update', ['id' => $item->id]);

    //     return url('');
    // }

    // public function getActionUrl($action, $routeParams = []){
    //     return route('users.' . $action, $routeParams);
    // }

    // public function getModelRoute($path){
    //     if($path === 'index'){
    //         return 'users.index';
    //     }
    // }


}