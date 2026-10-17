<?php
/**
 * Tests for RoughTaiga
 */

use PHPUnit\Framework\TestCase;
use Roughtaiga\Roughtaiga;

class RoughtaigaTest extends TestCase {
    private Roughtaiga $instance;

    protected function setUp(): void {
        $this->instance = new Roughtaiga(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughtaiga::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
