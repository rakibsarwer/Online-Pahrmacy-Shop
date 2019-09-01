<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    //
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function stockOption(){
        return [
            0 => 'Stock Out',
            1 => 'In Stock',
        ];
    }
}
