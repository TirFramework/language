<?php

namespace Tir\Language\Controllers;

use Tir\Language\Models\Language;
use Tir\Crud\Controllers\CrudController;

class AdminLanguageController extends CrudController
{
    protected $model = Language::Class;

}
