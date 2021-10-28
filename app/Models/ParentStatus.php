<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentStatus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'mother',
        'father',
        'mother_dc',
        'father_dc',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
