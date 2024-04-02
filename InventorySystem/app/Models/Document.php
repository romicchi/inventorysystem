<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'product_id',
        'additional_notes',
        'date_submitted',
        'file',
    ];

    /**
     * Get the product that owns the document.
     */
    public function product()
    {
        return $this->belongsTo(Inventory::class, 'product_id');
    }
}