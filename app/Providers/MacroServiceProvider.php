<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      \Form::macro('field_wrap', function($label, $name, $type) {
        return '<div class="field-wrap">
                  <label name="'.$name.'">'.$label.'<span class="req">*</span></label>'.
                  \Form::input($type, $name, '', ["required" => "required", "autocomplete" => "off"]).
                '</div>';
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
