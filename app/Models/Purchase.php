<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'supplier_id',
        'total',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function purchase_item(){
        return $this->hasMany(PurchasedItem::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
