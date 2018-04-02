<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company'
    ];
    public function company(){
        return $this->belongsTo(Company::class,'id');
    }
    
    public static function rules(){
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ];
        return $rules;
    }
}
