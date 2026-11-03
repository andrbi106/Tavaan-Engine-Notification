<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Notification — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Notification\Contracts\NotificationInterface
 */
final class Notification implements Contracts\NotificationInterface
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
    public function via(/* ... */): mixed
    {
        // TODO: پیاده‌سازی via مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toMail(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toMail مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toSms(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toSms مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toDatabase(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toDatabase مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toTelegram(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toTelegram مطابق مستندات (سند §3 API).
        return null;
    }
}