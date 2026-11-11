<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Support\ShopRules;

class Anggota1WhiteBoxTest extends TestCase
{
    public function test_anggota_1_white_box(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        ShopRules::discount(-1, false);
    }
}