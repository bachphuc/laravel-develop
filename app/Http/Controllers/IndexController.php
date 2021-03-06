<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use bachphuc\LaravelHTMLElements\Information;
use bachphuc\LaravelHTMLElements\Components\Text;
use bachphuc\LaravelHTMLElements\Components\Form;

use Shopy;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo '2020-09-16 16:35:45';
        // $date = new \DateTime('2020-09-16T16:35:45+0700');
        // var_dump($date);die;
        $info = new Information();
        // return $info->display();

        $input = new Text();
        $input->render();

        $form = Form::create([
            'elements' => [
                'title',
                'image' => [
                    'type' => 'image_input'
                ],
                'sex' => [
                    'type' => 'select',
                    'options' => [
                        'data' => [
                            [
                                'title' => 'Female',
                                'value' => 'female'
                            ], [
                                'title' => 'Male',
                                'value' => 'male'
                            ]
                        ]
                    ]
                ],
                'feature' => [
                    'type' => 'checkbox'
                ],
                'description' => [
                    'text' => 'text_content'
                ],
                'user_id' => [
                    'type' => 'select',
                    'options' => [
                        'model' => \App\User::class,
                        'display_field' => 'name'
                    ]
                ],
                'favorite'
            ],
        ]);

        return view('form', [
            'form' => $form
        ]);
    }

    public function shopy(){
        $information = new \bachphuc\Shopy\Version();
        Shopy::test();
        return $information->display();
    }
}
