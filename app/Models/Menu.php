<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the restaurant that owns the Menu
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * Get all of the items for the Menu
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
