<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota5Test extends DuskTestCase
{
    public function test_anggota_5(): void
    {
        // P9: Checkout kosong
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset')
                    ->press('Checkout Sekarang')
                    ->assertSee('Keranjang kosong');
        });
    }
}
