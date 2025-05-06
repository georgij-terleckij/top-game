<?php
/**
 * Created by PhpStorm.
 * User: terleckiygp
 * Date: 08.11.19
 * Time: 12:16
 */

namespace App\Core\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
//            'App\Repositories\NewsRepositoryInterface',
            'App\Repositories\NewsRepository'
        );

//        $this->app->bind(
//            'App\Repositories\CommentRepositoryInterface',
//            'App\Repositories\CommentRepository'
//        );
    }
}