<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function username()
    {
        return 'email';
    }

    public function getAuthPassword()
    {
        return $this->passwd;
    }
}
