<?php namespace QuanticTelecom\Support\Commands;

class WriteCommentCommand {

    public $userId;

    public $body;

    function __construct($ticketId, $userId = null, $body = null)
    {
        $this->ticketId = $ticketId;
        $this->userId = $userId;
        $this->body = $body;
    }
}