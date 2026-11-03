<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification;

final class NotificationSender
{
    public function send()
    {
        if (!headers_sent()) { http_response_code($this->status); foreach ($this->headers->all() as $name => $value) { header(str_replace(" ", "-", ucwords(str_replace("-", " ", $name))) . ": " . $value); } } echo $this->getContent();
    }: {$value}"); } } echo $this->getContent();
    }
    public function sendNow()
    {
        return null;
    }
    public function route()
    {
        return null;
    }
}
