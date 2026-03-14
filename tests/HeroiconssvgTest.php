<?php
/**
 * Tests for HeroiconsSvg
 */

use PHPUnit\Framework\TestCase;
use Heroiconssvg\Heroiconssvg;

class HeroiconssvgTest extends TestCase {
    private Heroiconssvg $instance;

    protected function setUp(): void {
        $this->instance = new Heroiconssvg(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Heroiconssvg::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
