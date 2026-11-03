<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Notification Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور notification — همهٔ کلیدهای مستندشده در `docs/03-engines/notification.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/notification.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('NOTIFICATION_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('NOTIFICATION_PREFIX', 'notification:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('NOTIFICATION_LOG_CHANNEL', 'notification'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Notification',
        'accessor' => 'notification',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];