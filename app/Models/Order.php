<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the orderedItems for the Order
     */
    public function orderedItems()
    {
        return $this->hasMany(OrderedItem::class);
    }

    /**
     * Get the restaurant that owns the Order
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * Get the user that owns the Order
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
