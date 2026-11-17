<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota2WhiteBoxTest extends TestCase
{
    /**
     * Test TC10-02: Subtotal di bawah ambang (99.999), nonmember.
     */
    public function test_anggota_2_white_box(): void
    {
        $hasil = ShopRules::discount(99999, false);
        $this->assertSame(0, $hasil);
    }
}