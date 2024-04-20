<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Collection;

class PostRepository
{
    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function findById($id): ?Post
    {
        return Post::find($id);
    }

    public function getAll(): Collection
    {
        return Post::all();
    }

    public function update(Post $post, array $data): Post
    {
        $post->update($data);
        return $post;
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }
}
