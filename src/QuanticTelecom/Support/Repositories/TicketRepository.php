<?php namespace QuanticTelecom\Support\Repositories; 

use QuanticTelecom\Support\Contracts\Ticket;

interface TicketRepository {

    /**
     * @param $ticketId
     * @return Ticket
     */
    public function findById($ticketId);

    /**
     * @param Ticket $ticket
     * @return bool
     */
    public function save(Ticket $ticket);
}