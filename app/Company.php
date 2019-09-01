<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $guarded = [];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
