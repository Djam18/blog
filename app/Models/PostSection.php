<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id', 'content',
    ];

    protected $casted =  [
        'content' => 'array'
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
