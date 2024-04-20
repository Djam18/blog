<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcomment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'post_id', 'comment_id', 'content',
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }

    public function comment(): BelongsTo {
        return $this->belongsTo(Comment::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
