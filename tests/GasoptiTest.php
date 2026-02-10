<?php
/**
 * Tests for GasOpti
 */

use PHPUnit\Framework\TestCase;
use Gasopti\Gasopti;

class GasoptiTest extends TestCase {
    private Gasopti $instance;

    protected function setUp(): void {
        $this->instance = new Gasopti(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gasopti::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
