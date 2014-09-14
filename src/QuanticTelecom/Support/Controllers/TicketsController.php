<?php namespace QuanticTelecom\Support\Controllers;

use BaseController, View, Config, Redirect;
use Laracasts\Commander\CommanderTrait;

class TicketsController extends BaseController {

    use CommanderTrait;

    public function create()
    {
        return View::make(Config::get('support::views.tickets.create'));
    }

    public function store()
    {
        $this->execute('QuanticTelecom\Support\Commands\OpenTicketCommand');

        return Redirect::route(Config::get('support::routes.tickets.store.redirect'));
    }
} 