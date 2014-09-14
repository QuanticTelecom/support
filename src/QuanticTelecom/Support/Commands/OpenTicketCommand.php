<?php namespace QuanticTelecom\Support\Commands;

class OpenTicketCommand {

    public $userId;

    public $body;

    function __construct($userId = null, $body = null)
    {
        $this->userId = $userId;
        $this->body = $body;
    }
} 