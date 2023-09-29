<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'cashier_id', 'product_id', 'qty', 'price'
    ];

    /**
     * Hubungkan Cart Ke Product
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
