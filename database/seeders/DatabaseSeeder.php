<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\LocationsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(LocationsSeeder::class);
        DB::table('kategoris')->insert([
            'kategori' => 'pakaian',
            'slug' => 'pakaian',

        ]);

        DB::table('subkategoris')->insert([
            'kategori_id' => 1,
            'subkategori' => 'kemeja',


        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'nama_toko' =>'',
            'kategori_id' =>0,
            'status_toko' =>0,
            'provinsi_id' =>13,
            'kota_id' =>5,
            'kecamatan_id' =>179,
        ]);

        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'nama_toko' =>'Sneker',
            'kategori_id' =>1,
            'status_toko' =>1,
            'provinsi_id' =>13,
            'kota_id' =>5,
            'kecamatan_id' =>179,
        ]);
        DB::table('users')->insert([
            'name' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pelanggan',
            'nama_toko' =>'',
            'kategori_id' =>0,
            'status_toko' =>0,
            'provinsi_id' =>1,
            'kota_id' =>1,
            'kecamatan_id' =>4,
            'negara' =>'Indonesia',
            'alamat1' =>'Jl. Amandit',
            'alamat2' =>'Rt.01 No.121 Desa Baroqah',
        ]);


        DB::table('kurirs')->insert([
            'kurir' => 'tiki',

        ]);
        DB::table('kurirs')->insert([
            'kurir' => 'jne',

        ]);
        DB::table('kurirs')->insert([
            'kurir' => 'pos',

        ]);

        DB::table('kupons')->insert([
            'code' => 'FIRST2023',
            'description' => 'Diskon Spesial Transaksi Pertama',
            'type' => 'percentage',
            'amount' => 15, // 15% diskon
            'start_date' => '2023-06-01',
            'end_date' => '2023-08-31',
            'is_active' => true,
        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 1,
            'kota_id' => 4,
            'kecamatan' => 'Denpasar Timur',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 1,
            'kota_id' => 4,
            'kecamatan' => 'Denpasar Barat',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 1,
            'kota_id' => 4,
            'kecamatan' => 'Denpasar Selatan',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 1,
            'kota_id' => 4,
            'kecamatan' => 'Denpasar Utara',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 13,
            'kota_id' => 179,
            'kecamatan' => 'Banjarbaru Utara',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 13,
            'kota_id' => 179,
            'kecamatan' => 'Banjarbaru Barat',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 13,
            'kota_id' => 179,
            'kecamatan' => 'Banjarbaru Timur',

        ]);

    }
}
