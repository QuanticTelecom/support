<?php namespace QuanticTelecom\Support\Commands;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use QuanticTelecom\Support\Contracts\OpenTicket;
use QuanticTelecom\Support\Repositories\TicketRepository;

class OpenTicketCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var OpenTicket
     */
    private $openTicket;
    /**
     * @var TicketRepository
     */
    private $ticketRepository;

    /**
     * @param OpenTicket $openTicket
     * @param TicketRepository $ticketRepository
     */
    function __construct(OpenTicket $openTicket, TicketRepository $ticketRepository)
    {
        $this->openTicket = $openTicket;
        $this->ticketRepository = $ticketRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $ticket = $this->openTicket->by($command->userId)->withText($command->body)->get();
        $this->ticketRepository->save($ticket);

        $this->dispatchEventsFor($this->openTicket);

        return $ticket;
    }
}