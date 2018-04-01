<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];
    public static function rules(){
        $rules = [
            'name'=>'required',
            'img'=>'dimensions:min_width=100,min_height=100'
        ];
        return $rules;
    }
}
