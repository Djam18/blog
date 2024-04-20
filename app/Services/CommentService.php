<?php

namespace App\Services;

use App\Repositories\CommentRepository;

class CommentService
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function addComment($postId, array $data)
    {
        return $this->commentRepository->createForPost($postId, $data);
    }

    public function getCommentsByPostId($postId)
    {
        return $this->commentRepository->findByPostId($postId);
    }
}
