<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'inventory_type_id',
        'description',
        'unit',
        'price',
        'quantity',
        'total',
        'image',
        'date_purchase',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function inventoryType()
    {
        return $this->belongsTo(InventoryType::class);
    }
}