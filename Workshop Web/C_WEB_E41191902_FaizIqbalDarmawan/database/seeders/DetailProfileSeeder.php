<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Data ke tabel
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '082xxxxxxxxx',
            'ttl' => '2001-07-08',
            'foto' => 'image.png'
            ]);
    }
}
