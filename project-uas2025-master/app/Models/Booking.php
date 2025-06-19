<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama', 'email', 'category_id', 'tanggal_booking', 'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
