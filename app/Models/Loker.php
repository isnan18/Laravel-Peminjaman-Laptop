<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_loker',
        'kapasitas'
    ];

    public function laptops()
    {
        return $this->hasMany(Laptop::class);
    }
}
