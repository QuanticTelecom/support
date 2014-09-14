<?php namespace QuanticTelecom\Support\Controllers;

use BaseController, Config, Redirect;
use Laracasts\Commander\CommanderTrait;

class CommentsController extends BaseController {

    use CommanderTrait;

    public function store()
    {
        $this->execute('QuanticTelecom\Support\Commands\WriteCommentCommand');

        return Redirect::route(Config::get('support::routes.tickets.store.redirect'));
    }
} 