<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ["name" => "Productivity"],
            ["name" => "Developer Tools"],
            ["name" => "Tech"],
            ["name" => "Artificial Intelligence"],
            ["name" => "Marketing"],
            ["name" => "User Experience"],
            ["name" => "Design Tools"]
        ]);
    }
}
