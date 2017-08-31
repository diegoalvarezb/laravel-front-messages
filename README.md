# laravel-front-messages

This tool handle front messages in [Laravel](https://laravel.com/).

As Laravel allows by default to add flash (session) messages that will be shown in the next page, this package allows to join those messages with the ones you want to add in the current view.

So using this package you could manage messages regardless of whether you are rendering a view or redirecting to another route.

### Requirements

- PHP >= 5.6
- Laravel >= 5.0

### Installation and configuration

Package installation with composer:
```
composer require diegoalvarezb/laravel-front-messages
```

And add the service provider in your `config/app.php` file:
```php
Diegoalvarezb\FrontMessages\FrontMessagesServiceProvider::class
```

### Add message

To add a message in a controller you have to add the `Diegoalvarezb\FrontMessages\FrontMessagesTrait`. With this trait you could use the `addHtmlMessage` method:

```php
$this->addHtmlMessage($type, $message);
```

You can add as many messages as you like in every moment.

### Customize messages view

To show the current version you have to execute the following command:
```sh
php artisan vendor:publish --tag=front-messages
```

This command will copy the default view into the resources/views/vendor folder. After that, you could edit this file, and use it in any blade template:

```html
@include('vendor.front-messages.messages')
```

### Examples

There are four types of messages:
- danger
- info
- success
- warning

```php
$this->addHtmlMessage('danger', 'This is an example of danger message');
$this->addHtmlMessage('info', 'This is an example of info message');
$this->addHtmlMessage('success', 'This is an example of success message');
$this->addHtmlMessage('warning', 'This is an example of warning message');
```

### License

MIT
