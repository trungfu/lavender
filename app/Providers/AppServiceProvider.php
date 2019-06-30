<?php

namespace App\Providers;

use App\Repositories\Song\SongRepository;
use App\Repositories\Song\SongRepositoryInterface;
use App\Repositories\Upload\UploadRepository;
use App\Repositories\Upload\UploadRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        SongRepositoryInterface::class   => SongRepository::class,
        UploadRepositoryInterface::class => UploadRepository::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
