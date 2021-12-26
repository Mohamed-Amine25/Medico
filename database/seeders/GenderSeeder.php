<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Gender::insert([
            [
                'name' => 'Male',

            ], [
                'name' => 'Female',

            ]
        ]);
    }
}
