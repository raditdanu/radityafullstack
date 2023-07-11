<?php

use Illuminate\Database\Seeder;
use App\Penduduk;
use App\Kota;
use App\Propinsi;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propinsi::create([
            'id' => '12',
            'name' => 'Bali'
        ]);

        Propinsi::create([
            'id' => '13',
            'name' => 'Bandung'
        ]);

        Propinsi::create([
            'id' => '10',
            'name' => 'Surabaya'
        ]);

        Propinsi::create([
            'id' => '1',
            'name' => 'Jakarta'
        ]);

        Kota::create([
            'id' => '1',
            'province_id' => '12',
            'name' => 'Jakarta Pusat'
        ]);

        Penduduk::create([
            'nik' => '123456789',
            'nama' => 'John Doe',
            'jenis_kelamin' => 'Male',
            'tgl_lahir' => '1990-01-01',
            'umur_bulan' => '2',
            'propinsi_id' => '13',
            'kota_id' => '1',
            'alamat_pasien' => 'Jalan Tandur'
        ]);

        Penduduk::create([
            'nik' => '1234567',
            'nama' => 'Jane Doe',
            'jenis_kelamin' => 'Male',
            'tgl_lahir' => '1995-04-01',
            'umur_bulan' => '2',
            'propinsi_id' => '12',
            'kota_id' => '3',
            'alamat_pasien' => 'Jalan Tandur'
        ]);
    }
}
