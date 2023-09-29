<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['cashier_id', 'customer_id', 'invoice', 'cash', 'change', 'discount', 'grand_total'];

    /**
     * Transaksi Punya Banyak Detail
     *
     * @return void
     */
    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * Transaksi Punya Banyak Profit
     *
     * @return void
     */
    public function profits()
    {
        return $this->hasMany(Profit::class);
    }

    /**
     * Hubungkan Transaksi Ke Customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Hubungkan Transaksi Ke User
     *
     * @return void
     */
    public function cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }
}
