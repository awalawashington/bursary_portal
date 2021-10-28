<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bursary extends Model
{
    use HasFactory;

    protected $fillable = [
        'helb',
        'cdf',
        'other_sponsors',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
