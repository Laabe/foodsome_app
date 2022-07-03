<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the items for the OrderedItem
     */
    public function items()
    {
        return $this->hasManyThrough(Restaurant::class, Item::class);
    }

    /**
     * Get the order that owns the OrderedItem
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
