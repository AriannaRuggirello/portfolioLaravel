<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            [
                'name' => 'Front-End',

            ],
            [
                'name' => 'Back-End',

            ],
            [
                'name' => 'Full-Stack',

            ],


        ]);
    }
}
