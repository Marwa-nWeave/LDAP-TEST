<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use LdapRecord\Models\Model;

 use Illuminate\Contracts\Auth\Authenticatable;


use LdapRecord\Models\Concerns\CanAuthenticate;

class User extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,CanAuthenticate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public static $objectClasses = [
        // 'top',
        // 'person',
        // 'organizationalperson',
        // 'user',
    ];
    protected $guidKey = 'uuid';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
