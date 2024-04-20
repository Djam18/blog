<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Collection;

class CommentRepository
{
    public function createForPost($postId, array $data): Comment
    {
        $post = Post::findOrFail($postId);
        return $post->comments()->create($data);
    }

    public function findByPostId($postId): Collection
    {
        return Comment::where('post_id', $postId)->first();
    }

    public function update(Comment $comment, array $data): Comment
    {
        $comment->update($data);
        return $comment;
    }

    public function delete(Comment $comment): bool
    {
        return $comment->delete();
    }
}
