<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notification\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Notification\NotificationSender;
use Tavaan\Engine\Notification\NotificationSenderServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور NotificationSender.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class NotificationSenderTest extends TestCase
{
    private NotificationSender $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new NotificationSender($config);
    }

    /**
     * T-01: send به چند کانال
     */
    public function test_t01_send___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `via()` انتخاب کانال
     */
    public function test_t02_via__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: database channel + unread
     */
    public function test_t03_database_channel__unread(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Queue notification
     */
    public function test_t04_queue_notification(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: SMS gateway با Mock
     */
    public function test_t05_sms_gateway__mock(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Rate limit
     */
    public function test_t06_rate_limit(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: `Notification::fake()` + assertSentTo
     */
    public function test_t07_notificationfake__assert_sent_to(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}