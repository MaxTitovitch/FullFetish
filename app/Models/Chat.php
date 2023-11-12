<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_user_id',
        'second_user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];


    public function firstUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'first_user_id');
    }

    public function secondUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'second_user_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'chat_id');
    }
}
