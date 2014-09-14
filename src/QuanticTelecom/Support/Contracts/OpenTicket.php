<?php namespace QuanticTelecom\Support\Contracts; 

interface OpenTicket {

    /**
     * @param $userId
     * @return OpenTicket
     */
    public function by($userId);

    /**
     * @param $body
     * @return OpenTicket
     */
    public function withText($body);

    /**
     * @return Ticket
     */
    public function get();
}