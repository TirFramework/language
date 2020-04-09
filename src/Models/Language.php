<?php

namespace Tir\Language\Models;

use Tir\Crud\Models\CrudModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends CrudModel
{
    
    //Additional trait insert here
    
    use SoftDeletes;

    public $table = 'languages';
    public static $routeName = 'language';

   

    public function getValidation()
    {
        return [
            'name' => 'required',
            'code' => 'required',
        ];
    }

    public function getFields()
    {
        $fields = [
            [
                'name'       => 'id',
                'type'       => 'text',
                'visible'    => 'io',
            ],
            [
                'name'       => 'name',
                'type'       => 'text',
                'visible'    => 'isce',
            ],
            [
                'name'       => 'code',
                'type'       => 'text',
                'visible'    => 'isce',
            ],
            [
                'name'       => 'locale',
                'type'       => 'text',
                'visible'    => 'isce',
            ],   
            [
                'name'       => 'image',
                'type'       => 'image',
                'visible'    => 'sce',
            ],   
            [
                'name'       => 'directory',
                'type'       => 'text',
                'visible'    => 'sce',
            ],
            [
                'name'       => 'sort_order',
                'type'       => 'order',
                'visible'    => 'isceo',
            ],     
            [
                'name'       => 'status',
                'type'       => 'status',
                'visible'    => 'iscef',
            ]                
        ];

        return json_decode(json_encode($fields));
    }

}
