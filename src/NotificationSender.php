<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * NotificationSender — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Notification\Contracts\NotificationSenderInterface
 */
final class NotificationSender implements Contracts\NotificationSenderInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function send(/* ... */): mixed
    {
        // TODO: پیاده‌سازی send مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function sendNow(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sendNow مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function route(/* ... */): mixed
    {
        // TODO: پیاده‌سازی route مطابق مستندات (سند §3 API).
        return null;
    }
}