<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Notifications\Notifiable;
use \Illuminate\Notifications\RoutesNotifications;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use \Illuminate\Notifications\Notifiable;
    use \Illuminate\Notifications\RoutesNotifications;
 
    use HasFactory, Notifiable, hasApiTokens;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',        
        'password',
        'is_business',
        'daily_transaction_limit',
        'email_verified_at',
        'reserved_account_number',
        'kyc_submitted', 
        
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
