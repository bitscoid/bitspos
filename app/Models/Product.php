<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'barcode', 'title', 'description', 'buy_price', 'sell_price', 'category_id', 'stock'];
    
    /**
     * Hubungkan Produk Ke Kategori
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
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
            get: fn ($value) => !empty($value) ? asset('/storage/products/' . $value) : NULL,
        );
    }
}
