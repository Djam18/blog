<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'intro', 'user_id',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function sections(): HasMany {
        return $this->hasMany(PostSection::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function subcomments(): HasMany {
        return $this->hasMany(Subcomment::class);
    }
}
