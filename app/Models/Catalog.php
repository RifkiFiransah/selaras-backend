<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Catalog extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'deskripsi'
    ];

    public function setNameAttribute($val) {
        $this->attributes['name'] = $val;
        $this->attributes['slug'] = Str::slug($val);
    }
    
    public function products() : HasMany {
        return $this->hasMany(Product::class);
    }
}
