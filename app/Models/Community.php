<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'theme_id',
        'is_public',
        'description',
        'user_id',
    ];

    protected $with = [
        'user',
        'posts',
    ];

    /** 
     * Автор сообщества
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Подписчики
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
