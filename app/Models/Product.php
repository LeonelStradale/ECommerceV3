<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'description',
        'image_path',
        'price',
        'stock',
        'subcategory_id',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    // Relación Muchos a Muchos
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn() => Storage::url($this->image_path),
        );
    }
}
