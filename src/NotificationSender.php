<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification;

final class NotificationSender
{
    public function send(/* ... */): mixed
    {
        if (!headers_sent()) { http_response_code($this->status); foreach ($this->headers->all() as $name => $value) { $h = str_replace(" ", "-", ucwords(str_replace("-", " ", $name))); header("{$h}: {$value}"); } } echo $this->getContent();
    }
    public function sendNow(/* ... */): mixed
    {
        return null;
    }
    public function route(/* ... */): mixed
    {
        return null;
    }
}
