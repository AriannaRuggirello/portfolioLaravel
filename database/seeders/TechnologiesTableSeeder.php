<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::insert([
            [
                'name' => 'Html',

            ],
            [
                'name' => 'Css',
            ],
            [
                'name' => 'Javascript',
            ],
            [
                'name' => 'Vue',
            ],
            [
                'name' => 'Php',
            ],
            [
                'name' => 'MySQL',
            ],
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'SASS',
            ],
        ]);
    }
}
