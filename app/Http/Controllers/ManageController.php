<?php
namespace App\Http\Controllers;

use bachphuc\LaravelHTMLElements\Http\Controllers\ManageBaseController;

class ManageController extends ManageBaseController{
    public function __construct(){
        parent::__construct();
    }

    public function init(){
        parent::init();

        $this->menus = [
            [
                'title' => 'Dashboard',
                'icon' => 'dashboard',
                'url' => url(''),
                'key' => 'dashboard'
            ], 
            [
                'title' => 'News',
                'icon' => 'dashboard',
                'url' => route('news.index'),
                'key' => 'news'
            ]
        ];

        // $this->menus = [[
        //     'title' => 'Dashboard',
        //     'icon' => 'dashboard',
        //     'url' => url('admin'),
        //     'key' => 'dashboard',
        // ], [
        //     'title' => 'Menus',
        //     'icon' => 'dashboard',
        //     'url' => url('admin/menus'),
        //     'key' => 'menus',
        // ], [
        //     'title' => 'Page Categories',
        //     'icon' => 'dashboard',
        //     'url' => url('admin/page-categories'),
        //     'key' => 'page_categories',
        // ],[
        //     'title' => 'Pages',
        //     'icon' => 'pages',
        //     'url' => url('admin/pages'),
        //     'key' => 'pages',
        // ], [
        //     'title' => 'Videos',
        //     'icon' => 'video_library',
        //     'key' => 'video_module',
        //     'subs' => [
        //         [
        //             'title' => 'Report',
        //             'url' => url('admin/videos/v/report'),
        //             'icon' => 'dashboard',
        //             'key' => 'video_report'
        //         ],
        //         [
        //             'title' => 'Video Categories',
        //             'url' => url('admin/video-categories'),
        //             'icon' => 'dashboard',
        //             'key' => 'video_categories'
        //         ],
        //         [
        //             'title' => 'Videos',
        //             'url' => url('admin/videos'),
        //             'icon' => 'video_library',
        //             'key' => 'videos'
        //         ],[
        //             'title' => 'Waiting Videos',
        //             'url' => route('admin.videos.waiting'),
        //             'icon' => 'help_outline',
        //             'key' => 'waiting_videos'
        //         ]
        //     ]
        // ], [
        //     'title' => trans('lang.articles'),
        //     'icon' => 'video_library',
        //     'key' => 'articles_module',
        //     'subs' => [
        //         [
        //             'title' => 'Articles Categories',
        //             'url' => url('admin/article-categories'),
        //             'icon' => 'dashboard',
        //             'key' => 'article_categories'
        //         ],
        //         [
        //             'title' => trans('lang.articles'),
        //             'url' => url('admin/articles'),
        //             'icon' => 'video_library',
        //             'key' => 'articles'
        //         ],
        //     ]
        // ], [
        //     'title' => trans('lang.photos'),
        //     'icon' => 'photo_library',
        //     'key' => 'photos_module',
        //     'subs' => [
        //         [
        //             'title' => 'Photo Categories',
        //             'url' => url('admin/photo-categories'),
        //             'icon' => 'dashboard',
        //             'key' => 'photo_categories'
        //         ],
        //         [
        //             'title' => trans('lang.photos'),
        //             'url' => url('admin/photos'),
        //             'icon' => 'video_library',
        //             'key' => 'photos'
        //         ],
        //     ]
        // ],   [
        //     'title' => 'Users',
        //     'icon' => 'people',
        //     'url' => url('admin/users'),
        //     'key' => 'users',
        // ],  [
        //     'title' => 'Adverts',
        //     'icon' => 'people',
        //     'url' => url('admin/adverts'),
        //     'key' => 'adverts',
        // ], [
        //     'title' => 'Push Notification',
        //     'icon' => 'video_library',
        //     'key' => 'push_notifications',
        //     'subs' => [
        //         [
        //             'title' => 'Lịch Vạn Niên',
        //             'url' => url('admin/push/lichvannien'),
        //             'icon' => 'dashboard',
        //             'key' => 'article_categories'
        //         ]
        //     ]
        // ], [
        //     'title' => 'Security',
        //     'icon' => 'settings',
        //     'key' => 'security',
        //     'subs' => [
        //         [
        //             'title' => 'IP Blocker',
        //             'url' => url('admin/security/ip-blocker'),
        //             'icon' => 'dashboard',
        //             'key' => 'security_ip_blocker',
        //         ]
        //     ]
        // ], [
        //     'title' => 'Configure',
        //     'icon' => 'settings',
        //     'url' => url('admin/settings'),
        //     'key' => 'settings',
        // ],  [
        //     'title' => 'Clear Cache',
        //     'icon' => 'settings',
        //     'url' => route('admin.flush-cache'),
        //     'key' => 'flush_cache',
        // ], [
        //     'title' => 'Build Theme',
        //     'icon' => 'settings',
        //     'url' => get_route('admin.build.theme'),
        //     'key' => 'build_theme',
        // ]
        // ];
    }
}