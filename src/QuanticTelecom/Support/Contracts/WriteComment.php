<?php namespace QuanticTelecom\Support\Contracts; 

interface WriteComment {

    /**
     * @param $userId
     * @return WriteComment
     */
    public function by($userId);

    /**
     * @param $body
     * @return WriteComment
     */
    public function withText($body);

    /**
     * @param $ticketId
     * @return WriteComment
     */
    public function about($ticketId);

    /**
     * @return Comment
     */
    public function get();
} 