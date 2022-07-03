<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the menus for the Restaurant
     */
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    /**
     * Get all of the items for the Restaurant
     */
    public function items()
    {
        return $this->hasManyThrough(Item::class, Menu::class);
    }

    /**
     * Get all of the locations for the Restaurant
     */
    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    /**
     * Get all of the orders for the Restaurant
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
