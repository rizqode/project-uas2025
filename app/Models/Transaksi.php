<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_klien',
        'email',
        'tanggal',
        'catatan',
        'status',
        'paket_id',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
