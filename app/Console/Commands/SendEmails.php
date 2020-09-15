<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to user {user}';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = $this->argument('user');
        
                
        $className = 'ManageTestController';
        $path = app_path('Http/Controllers/' . $className. ".php");
        $namespace = "App\Http\Controllers";

        $view = view('templates.email', ['model' => $model, 'className' => $className, 'namespace' => $namespace]);
        $content = $view->render();
        
        file_put_contents($path, $content);

        echo 'Create email template...' . $this->argument('user'); 
    }
}
