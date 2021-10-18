<?php

namespace DevPackage\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载扩展包的路由文件
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // 加载扩展包的视图文件
        $this->loadViewsFrom(__DIR__.'/views', 'message');
        // 加载扩展包的数据库迁移
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // 加载扩展包的配置文件
        $this->mergeConfigFrom(__DIR__.'/config/message.php', 'message');

    }
}
