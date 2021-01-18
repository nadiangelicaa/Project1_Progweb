<?php

use Illuminate\Database\Seeder;
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
        for($i=1; $i<=100; $i++){
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-Laki','Perempuan')),
                'kota' => $faker->randomElement($array = array('Yogyakarta','Jakarta','Surabaya','Bandung'))
            ]);
        }
    }
}
