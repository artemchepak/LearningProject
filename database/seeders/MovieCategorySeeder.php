<?php

namespace Database\Seeders;

use App\Models\MovieCategory;
use Illuminate\Database\Seeder;

class MovieCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Drama'],
            ['name' => 'Crime'],
            ['name' => 'Action'],
            ['name' => 'Fantasy'],
            ['name' => 'Sci-Fi'],
            ['name' => 'Comedy'],
            ['name' => 'Adventures']
        ];

        MovieCategory::insert($categories);
    }
}
