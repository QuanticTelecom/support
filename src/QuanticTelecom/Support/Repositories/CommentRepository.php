<?php namespace QuanticTelecom\Support\Repositories; 

use QuanticTelecom\Support\Contracts\Comment;
use QuanticTelecom\Support\Contracts\Ticket;

interface CommentRepository {

    /**
     * @param $ticketId
     * @param Comment $comment
     * @return bool
     */
    public function addComment($ticketId, Comment $comment);
} 