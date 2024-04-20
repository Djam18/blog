<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function createPost(array $data)
    {
        return $this->postRepository->create($data);
    }

    public function getPostById($id)
    {
        return $this->postRepository->findById($id);
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }
}
