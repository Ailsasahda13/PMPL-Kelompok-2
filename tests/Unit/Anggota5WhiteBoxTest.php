<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota5WhiteBoxTest extends TestCase
{
    public function test_anggota_5_white_box(): void
    {
        // Kasus: subtotal keranjang; Input: 2 kopi + 1 teh
        $actual = \App\Support\ShopRules::subtotal(['kopi' => 2, 'teh' => 1]);
        $this->assertSame(65000, $actual);
        // TODO: Tulis 2-4 baris kode di bawah sesuai petunjuk Jobsheet 10.
    }
}
