<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notifications;

/**
 * Notifiable — کلاس‌هایی که notification دریافت می‌کنند.
 *
 * @see docs/03-engines/notification.md
 */
interface Notifiable
{
    /**
     * @return array<string, mixed>
     */
    public function routeNotificationFor(string $channel): mixed;
}

/**
 * Notification — کلاس پایه برای اعلان‌ها.
 */
abstract class Notification
{
    /**
     * @return list<string>
     */
    abstract public function via(Notifiable $notifiable): array;

    /**
     * @param string $channel
     * @return mixed
     */
    public function to(string $channel, Notifiable $n): mixed
    {
        $method = 'to' . \ucfirst($channel);
        if (\method_exists($this, $method)) {
            return $this->{$method}($n);
        }
        return null;
    }
}

/**
 * SimpleNotifiable — implement ساده Notifiable با routes.
 */
final class SimpleNotifiable implements Notifiable
{
    /**
     * @param array<string, mixed> $routes
     */
    public function __construct(
        public readonly array $routes = [],
    ) {
    }

    public function routeNotificationFor(string $channel): mixed
    {
        return $this->routes[$channel] ?? null;
    }
}
