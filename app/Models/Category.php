<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'name', 'description'
    ];
    
    /**
     * Kategori Punya Banyak Produk
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    /**
     * Acessor Rubah Data Ketika Eloquent Diakses
     * 
     * Contohnya Data foto.jpg jadi /storage/foto.jpg
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => !empty($value) ? asset('/storage/categories/' . $value) : NULL,
        );
    }
}
