<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the restaurant that owns the Location
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
