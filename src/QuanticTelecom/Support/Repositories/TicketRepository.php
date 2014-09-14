<?php namespace QuanticTelecom\Support\Repositories; 

use QuanticTelecom\Support\Contracts\Ticket;

interface TicketRepository {

    /**
     * @param Ticket $ticket
     * @return bool
     */
    public function save(Ticket $ticket);
} 