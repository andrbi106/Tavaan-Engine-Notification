<?php

declare(strict_types=1);

namespace Tavaan\Engine\Notifications\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Notifications\SimpleNotifiable;

/**
 * T-NN scenario tests for the notification engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class NotificationScenarioTest extends TestCase
{'    public function t01_route_returns_channel_value(): void\n    {\n        // Scenario T-01\n$n = new SimpleNotifiable(["mail" => "user@example.com", "sms" => "+989123456789"]);\n        $this->assertSame("user@example.com", $n->routeNotificationFor("mail"));\n        $this->assertSame("+989123456789", $n->routeNotificationFor("sms"));\n    }\n    public function t02_route_unknown_returns_null(): void\n    {\n        // Scenario T-02\n$n = new SimpleNotifiable(["mail" => "user@example.com"]);\n        $this->assertNull($n->routeNotificationFor("telegram"));\n    }\n    public function t03_toMail_returns_envelope_when_route_exists(): void\n    {\n        // Scenario T-03\n$n = new SimpleNotifiable(["mail" => "u@e.com"]);\n        $env = $n->toMail($n);\n        $this->assertNotNull($env);\n        $this->assertSame("mail", $env["channel"]);\n        $this->assertSame("u@e.com", $env["to"]);\n    }'}
