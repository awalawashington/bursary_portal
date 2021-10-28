<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'sir_name',
        'other_names',
        'email',
        'phone_number',
        'admission_number',
        'gender',
        'dob',
        'residence',
        'home_address',
        'school_id',
        'national_id',
        'profile_photo',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'datetime',
    ];

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function tumsa_bursary()
    {
        return $this->hasOne(TumsaBursary::class);
    }


    public function parent_status()
    {
        return $this->hasOne(ParentStatus::class);
    }

    public function other_info()
    {
        return $this->hasOne(OtherInfo::class);
    }

    public function family_status()
    {
        return $this->hasOne(FamilyStatus::class);
    }

    public function bursary()
    {
        return $this->hasOne(Bursary::class);
    }
}
