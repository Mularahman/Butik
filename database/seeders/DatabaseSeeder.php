<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        ]);

        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member',
            'nama_toko' =>'Sneker',
            'kategori_id' =>1,
            'status_toko' =>1,
        ]);
        DB::table('users')->insert([
            'name' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pelanggan',
            'nama_toko' =>'',
            'kategori_id' =>0,
            'status_toko' =>0,
        ]);

        DB::table('provinsis')->insert([
            'provinsi' => 'Kalimantan Selatan',

        ]);
        DB::table('kotas')->insert([
            'provinsi_id' => 1,
            'kota' => 'Banjarmasin',

        ]);
        DB::table('kecamatans')->insert([
            'provinsi_id' => 1,
            'kota_id' => 1,
            'kecamatan' => 'Banjarmasin Utara',

        ]);
        DB::table('kurirs')->insert([
            'kurir' => 'J&T',

        ]);
        DB::table('kurirs')->insert([
            'kurir' => 'JNE',

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

    }
}
