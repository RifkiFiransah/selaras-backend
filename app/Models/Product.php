<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = ['id'];

    public function setNameAttribute($val) {
        $this->attributes['name'] = $val;
        $this->attributes['slug'] = Str::slug($val);
    }

    public function catalog(): BelongsTo {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }

    public function mitra(): BelongsTo {
        return $this->belongsTo(Mitra::class, 'mitra_id');
    }
}
