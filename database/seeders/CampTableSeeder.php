<?php

namespace Database\Seeders;

use App\Models\Camps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' =>   'gila-belajar',
                'price' =>  280,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Baru Mulai Belajar',
                'slug' =>   'baru-mulai-belajar',
                'price' =>  120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];

            // Cara 1
            // foreach ($camps as $key => $camp) {
            //     Camps::create($camp);
            // }

            //Cara 2(cara ini harus memasukkan semua field ke dalam array $camps klaw tidak akan null)
            Camps::insert($camps);
    }
}
