<?php
/**
 * Tests for SketchWhirl
 */

use PHPUnit\Framework\TestCase;
use Sketchwhirl\Sketchwhirl;

class SketchwhirlTest extends TestCase {
    private Sketchwhirl $instance;

    protected function setUp(): void {
        $this->instance = new Sketchwhirl(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchwhirl::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
