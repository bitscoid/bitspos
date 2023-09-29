<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id', 'product_id', 'qty', 'price'
    ];

    /**
     * Hubungkan Detail Ke Transaksi
     *
     * @return void
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Hubungkan Detail Ke Produk
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
