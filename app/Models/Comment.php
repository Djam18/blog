<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    protected $casted = [
        'content' => 'array'
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }

    public function subcomments(): HasMany {
        return $this->hasMany(Subcomment::class);
    }
}
