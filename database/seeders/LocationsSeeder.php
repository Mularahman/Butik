<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach ($daftarProvinsi as $provinceRow) {
            Provinsi::create([
                'provinsi_id' => $provinceRow['province_id'],
                'provinsi'        => $provinceRow['province'],
            ]);
            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
            foreach ($daftarKota as $cityRow) {
                Kota::create([
                    'provinsi_id'   => $provinceRow['province_id'],
                    'kota_id'       => $cityRow['city_id'],
                    'kota'          => $cityRow['city_name'],
                ]);
            }
        }
    }
}
