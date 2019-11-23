<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'shakthisachintha@gmail.com',
                'name' => 'shakthi sachintha',
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'contactnumber' => '774345234',
                'user_type' => 'admin'
            ],

            [
                'email' => 'ssakunchamikara@gmail.com',
                'name' => "sakun chamikara",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'contactnumber' => '767035067',
                'user_type' => 'doctor'
            ],

            [
                'email' => 'sachinthaindu95@gmail.com',
                'name' => "sachin de silva",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'contactnumber' => '714193432',
                'user_type' => 'pharmacist'
            ],

            [
                'email' => 'sanduniiresha1029@gmail.com',
                'name' => "sanduni iresha",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'contactnumber' => '713843043',
                'user_type' => 'general'
            ],

            [
                'email' => 'hasikadilshani@gmail.com',
                'name' => "hasika dilshani",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'contactnumber' => '703169302',
                'user_type' => 'general'
            ]
        ]);
    }
}
