<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota2Test extends DuskTestCase
{
    public function test_anggota_2(): void
    {
        // P9: Subtotal dua kopi
        $this->markTestIncomplete('Lengkapi aksi dan assertion TC09-02, lalu hapus baris ini.');
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset');
            // TODO: Isi #qty_kopi dengan 2, klik Tambah Kopi, pastikan subtotal Rp 50.000.
            // Di sini: $browser->... ; (beri titik koma pada akhir rantai)
        });
    }
}
