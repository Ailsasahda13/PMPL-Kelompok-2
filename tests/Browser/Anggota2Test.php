<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota2Test extends DuskTestCase
{
    /**
     * Test TC09-02: Subtotal 2 kopi
     */
    public function test_anggota_2(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:9000/')
                    ->waitFor('#qty_kopi', 5)
                    ->clear('#qty_kopi')
                    ->type('#qty_kopi', '2')
                    ->press('Tambah Kopi')
                    ->assertSee('Subtotal: Rp 50.000');
        });
    }
}