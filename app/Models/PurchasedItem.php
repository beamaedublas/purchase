<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchandise_id',
        'purchase_id',
        'whole_sake_qty',
        'purchase_price'
    ];

    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }


    public function merchandise(){
        return $this->belongsTo(Merchandise::class);
    }
}
