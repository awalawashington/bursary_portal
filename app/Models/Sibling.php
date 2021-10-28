<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'institution',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
