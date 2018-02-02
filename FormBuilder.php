<?php

namespace App\Services;

use Collective\Html\FormFacade as Form;

class FormBuilder
{
    private static $viewPath = 'layouts.components.form';

    /**
     * Override the components of LaravelCollective to fit Bootstrap.
     *
     * @return void
     */
    public static function boot()
    {
        Form::component('hiddenH', self::$viewPath . '.hidden', [
            'name',
            'value' => null
        ]);

        Form::component('textH', self::$viewPath . '.text', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('textareaH', self::$viewPath . '.textarea', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('emailH', self::$viewPath . '.email', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('passwordH', self::$viewPath . '.password', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('checkboxH', self::$viewPath . '.checkbox', [
            'name',
            'label' => null,
            'value' => 1,
            'attributes' => []
        ]);

        Form::component('radioH', self::$viewPath . '.radio', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('checkboxGroupH', self::$viewPath . '.checkbox_group', [
            'name',
            'label' => null,
            'list' => [],
            'selected' => [],
            'attributes' => []
        ]);

        Form::component('radioGroupH', self::$viewPath . '.radio_group', [
            'name',
            'label' => null,
            'list' => [],
            'selected' => null,
            'attributes' => []
        ]);

        Form::component('urlH', self::$viewPath . '.url', [
            'name',
            'label' => null,
            'attributes' => []
        ]);

        Form::component('submitH', self::$viewPath . '.submit', [
            'name',
            'buttonClass'
        ]);

        Form::component('resetH', self::$viewPath . '.reset', [
            'name',
            'buttonClass'
        ]);
    }
}
