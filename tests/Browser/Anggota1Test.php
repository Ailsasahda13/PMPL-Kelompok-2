<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Anggota1Test extends DuskTestCase
{
    public function test_anggota_1(): void
    {
        // P9: Halaman produk
        $this->markTestIncomplete('Lengkapi aksi dan assertion TC09-01, lalu hapus baris ini.');
        $this->browse(function (Browser $browser) {
            $browser->visit('/qa/reset');
            // TODO: Setelah visit('/qa/reset'), pastikan kedua produk terlihat.
            // Di sini: $browser->... ; (beri titik koma pada akhir rantai)
        });
    }
}
