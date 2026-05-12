<?php
/**
 * Tests for PillowAI
 */

use PHPUnit\Framework\TestCase;
use Pillowai\Pillowai;

class PillowaiTest extends TestCase {
    private Pillowai $instance;

    protected function setUp(): void {
        $this->instance = new Pillowai(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pillowai::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
