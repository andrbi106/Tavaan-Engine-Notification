# Tavaan Engine — Notification

> **آگاه‌سازی** — موتور Notification در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.notification` |
| نام | `Notification` |
| عنوان فارسی | آگاه‌سازی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Notifications` |
| نوع | `engine` |
| Facade | `Notification` (accessor: `notification`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Notifications\Contracts\Notifiable`

## خطاها (Exceptions)

- `Tavaan\Engine\Notifications\Exceptions\NotificationException`

## Facadeها

- `Tavaan\Engine\Notifications\Facades\Notification`

## کلاس‌های اصلی

- `src/AnonymousNotifiable.php`
- `src/ArrayNotification.php`
- `src/Channels/BroadcastChannel.php`
- `src/Channels/Channels.php`
- `src/Channels/PushChannel.php`
- `src/Channels/TelegramChannel.php`
- `src/Channels/WebhookChannel.php`
- `src/Events/NotificationFailed.php`
- `src/Events/NotificationSending.php`
- `src/Events/NotificationSent.php`
- `src/Jobs/SendQueuedNotification.php`
- `src/Messages/MailMessage.php`
- `src/Messages/SmsMessage.php`
- `src/Messages/TelegramMessage.php`
- `src/Messages/WebhookMessage.php`
- `src/Notification.php`
- `src/NotificationManager.php`
- `src/NotificationSender.php`
- `src/NotificationServiceProvider.php`
- `src/RoutesNotifications.php`
- ... و 10 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Notifications\NotificationServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`

## پیکربندی

- فایل پیکربندی: `config/notification.php`
- کلید: `notification`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Notification.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Notification`** (این مخزن) | موتور Notification |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
