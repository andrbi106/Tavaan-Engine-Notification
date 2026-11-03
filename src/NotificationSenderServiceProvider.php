<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Notification\Contracts\NotificationSenderInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * NotificationSenderServiceProvider — ثبت سرویس‌های موتور NotificationSender.
 */
final class NotificationSenderServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(NotificationSenderInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new NotificationSender($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('notification', $this->app->get(NotificationSenderInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            NotificationSenderInterface::class,
            'notification',
        ];
    }
}