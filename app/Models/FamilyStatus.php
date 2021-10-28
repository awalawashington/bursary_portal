<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'mother_occupation',
        'father_occupation',
        'mother_income',
        'father_income',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
