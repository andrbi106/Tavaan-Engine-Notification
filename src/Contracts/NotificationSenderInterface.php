<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification\Contracts;

/**
 * قرارداد NotificationSender.
 *
 * @see \Tavaan\Engine\Notification\NotificationSender
 * @api 1.0
 */
interface NotificationSenderInterface
{
    /**
     * متد send.
     *
     * @return mixed
     */
    public function send(/* ... */): mixed;

    /**
     * متد sendNow.
     *
     * @return mixed
     */
    public function sendNow(/* ... */): mixed;

    /**
     * متد route.
     *
     * @return mixed
     */
    public function route(/* ... */): mixed;
}