<?php
/**
 * Tests for DeFiBridgeMax
 */

use PHPUnit\Framework\TestCase;
use Defibridgemax\Defibridgemax;

class DefibridgemaxTest extends TestCase {
    private Defibridgemax $instance;

    protected function setUp(): void {
        $this->instance = new Defibridgemax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defibridgemax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
