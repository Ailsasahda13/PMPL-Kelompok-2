<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota4Test extends DuskTestCase
{
    public function test_anggota_4(): void
    {
        $this->browse(function (Browser $browser) {
        $browser->visit('/qa/reset')
                ->type('#qty_kopi', '0')
                ->press('Tambah Kopi')
                ->assertSee('Jumlah minimal 1')
                ->assertSee('Subtotal: Rp 0');
        });
    }
}
