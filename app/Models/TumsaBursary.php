<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TumsaBursary extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'user_id',
        'ammount_requested',
        'ammount_awarded',
        'fee_balance',
        'fee_statement',
        'admin_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
