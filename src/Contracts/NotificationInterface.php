<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification\Contracts;

/**
 * قرارداد Notification.
 *
 * @see \Tavaan\Engine\Notification\Notification
 * @api 1.0
 */
interface NotificationInterface
{
    /**
     * متد via.
     *
     * @return mixed
     */
    public function via(/* ... */): mixed;

    /**
     * متد toMail.
     *
     * @return mixed
     */
    public function toMail(/* ... */): mixed;

    /**
     * متد toSms.
     *
     * @return mixed
     */
    public function toSms(/* ... */): mixed;

    /**
     * متد toDatabase.
     *
     * @return mixed
     */
    public function toDatabase(/* ... */): mixed;

    /**
     * متد toTelegram.
     *
     * @return mixed
     */
    public function toTelegram(/* ... */): mixed;
}