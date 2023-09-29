<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id', 'total'
    ];
    
    /**
     * Hubungkan Profit Ke Transaction
     *
     * @return void
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
