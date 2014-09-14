<?php namespace QuanticTelecom\Support\Commands;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use QuanticTelecom\Support\Contracts\WriteComment;
use QuanticTelecom\Support\Repositories\CommentRepository;

class WriteCommentCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var WriteComment
     */
    private $writeComment;
    /**
     * @var CommentRepository
     */
    private $commentRepository;

    /**
     * @param WriteComment $writeComment
     * @param CommentRepository $commentRepository
     */
    function __construct(WriteComment $writeComment, CommentRepository $commentRepository)
    {
        $this->writeComment = $writeComment;
        $this->commentRepository = $commentRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $comment = $this->writeComment->by($command->userId)->withText($command->body)->about($command->ticketId)->get();

        $this->dispatchEventsFor($this->writeComment);

        return $comment;
    }
}