<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
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
        // Register the form components      
      Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
      Form::component('bsSelect', 'components.form.select', ['name', 'value' => null, 'attributes' => []]);
      Form::component('bsSubmit', 'components.form.submit', ['value' => 'submit','attributes' => []]);
      Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
      Form::component('bsCheckbox', 'components.form.checkbox', ['name', 'value'=>null,'default', 'attributes' => []]);
    
    }
}
