<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tbl_mahasiswa')->insert([
                'nama_mhs' => $faker->name,
                'nim' => $faker->numberBetween($min = 1000, $max = 9000),
                'alamat' => $faker->address
            ]);
        }
    }
}
