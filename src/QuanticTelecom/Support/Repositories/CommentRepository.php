<?php namespace QuanticTelecom\Support\Repositories; 

use QuanticTelecom\Support\Contracts\Comment;
use QuanticTelecom\Support\Contracts\Ticket;

interface CommentRepository {

    /**
     * @param Comment $comment
     * @return bool
     */
    public function save(Comment $comment);
} 