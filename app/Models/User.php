<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject {
    use HasFactory, Notifiable, SoftDeletes, HasApiTokens;


    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array {
        return [
            'id'                   => 'integer',
            'email_verified_at'    => 'datetime',
            'otp_verified_at'      => 'datetime',
            'password'             => 'hashed',
            'name'                 => 'string',
            'email'                => 'string',
            'avatar'               => 'string',
            'cover_photo'          => 'string',
            'token'                => 'string',
            'provider'             => 'string',
            'provider_id'          => 'string',
            'role'                 => 'string',
            'status'               => 'string',
            'created_at'           => 'datetime',
            'updated_at'           => 'datetime',
            'deleted_at'           => 'datetime',
        ];
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array {
        return [];
    }
}
