<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'type',
        'password',
        'country',
        'referral',
        'rating',
        'balance',
        'description',
        'subscribe_cost',
        'birthday_at',
        'visited_at',
        'photo',
        'photo_passport',
        'photo_passport_selfie',
        'email_verified_at',
        'password_verified_at',
        'password_selfie_verified_at',

    ];

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
        'birthday_at' => 'datetime',
        'visited_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password_verified_at' => 'datetime',
        'password_selfie_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function asUser(): HasMany
    {
        return $this->hasMany(Subscription::class, 'user_id');
    }

    public function asSeller(): HasMany
    {
        return $this->hasMany(Subscription::class, 'seller_id');
    }

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class, 'user_id');
    }

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class, 'user_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    public function firstChats(): HasMany
    {
        return $this->hasMany(Chat::class, 'first_user_id');
    }

    public function secondChats(): HasMany
    {
        return $this->hasMany(Chat::class, 'second_user_id');
    }

    public function chats(): Collection
    {
        return $this->firstChats->merge($this->secondChats);
    }
}
