<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_laptop',
        'merk',
        'loker_id',
        'status'
    ];

    public function loker()
    {
        return $this->belongsTo(Loker::class);
    }
}
