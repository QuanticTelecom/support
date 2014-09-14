# Quantic Telecom Support

This package manages Quantic Telecom's support regardless models.

## Installation

You can install Quantic Telecom Support through composer:

```js
"require": {
    "quantic-telecom/support": "~1.0"
}
```

Next, update `app/config/app.php` to include a reference to this package's service provider in the providers array.

```php
'providers' => [
    'QuanticTelecom\Support\SupportServiceProvider'
]
```

## Usage

### Controllers

Quantic Telecom support provides two controllers: `QuanticTelecom\Support\Controllers\TicketsController` and `QuanticTelecom\Support\Controllers\CommentsController` with some CRUD's methods.

* TicketsController
  * create: show create form
  * store: open a ticket


* CommentsController
  * store: write a new comment

### Routes

You may want to add your own routes for example in `app/routes.php` or in a service provider.

### Contracts

Quantic Telecom support provides some contracts to implement.

#### Models

* Ticket & Comment: meaningless doc blocs contracts;


#### Factories

Factories contracts provides a clean way to create models. Concrete implementations need to know how to create a new model instance and how to attach (for comments) a model to another.

* OpenTicket: act like a Ticket factory;
* WriteComment: same as OpenTicket for comments.

#### Repositories

Quantic Telecom support needs repositories to manage database connection:
* TicketRepository: get and save tickets;
* CommentRepository: save a comment.

### Commands

Laravel Commander provides an easy way to leverage commands and domain events. This package has two commands (and two handlers):
* OpenTicketCommand & OpenTicketCommandHandler: use OpenTicket factory to create a new ticket and TicketRepository to save this ticket;
* WriteCommentCommand & WriteCommentCommandHandler: use WriteComment factory to create and attach a new comment to a ticket and then CommentRepository to save / persist it.
