<?php

namespace App\Models;

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
}
