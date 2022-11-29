<?php

namespace App\Providers;

use App\Lib\BHelp;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
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
        app('view')->composer("*", function ($view) {
            if(!empty(app("request")->route())){
                $action = app("request")->route()->getAction();
    
                $controller = class_basename($action["controller"]);
        
                list($controller_name, $action_name) = explode("@", $controller);
        
                $view->with(compact("controller_name", "action_name"));
            }
            
        });
        //
        Schema::defaultStringLength(191);
        $this->configMail();
    }

    private function configMail() {
        Config::set('mail.driver',BHelp::getConfigSetting('MAIL_DRIVER'));
        Config::set('mail.host',BHelp::getConfigSetting('MAIL_HOST'));
        Config::set('mail.port',BHelp::getConfigSetting('MAIL_PORT'));
        Config::set('mail.from.address',BHelp::getConfigSetting('MAIL_FROM_ADDRESS'));
        Config::set('mail.from.name',BHelp::getConfigSetting('MAIL_FROM_NAME'));
        Config::set('mail.encryption',BHelp::getConfigSetting('MAIL_ENCRYPTION'));
        Config::set('mail.username',BHelp::getConfigSetting('MAIL_USERNAME'));
        Config::set('mail.password',BHelp::getConfigSetting('MAIL_PASSWORD'));
    }
}
