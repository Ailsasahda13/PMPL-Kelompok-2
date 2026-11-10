<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota1WhiteBoxTest extends TestCase
{
    public function test_anggota_1_white_box(): void
    {
        // Kasus: subtotal negatif harus exception; Input: -1, false
        $this->expectException(\InvalidArgumentException::class);
        
        ShopRules::discount(-1, false);
    }
}