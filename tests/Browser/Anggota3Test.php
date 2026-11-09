<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota3Test extends DuskTestCase
{
    public function test_anggota_3(): void
    {
        // P9: Checkout teh
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset') 
                    ->press('Tambah Teh')
                    ->press('Checkout Sekarang')
                    ->assertSee('Pesanan berhasil dibuat');
        });
    }
}
