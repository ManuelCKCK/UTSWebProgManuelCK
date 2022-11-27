<?php

namespace Database\Seeders;

use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Historical'

        ]);
        DB::table('categories')->insert([
            'name' => 'Fantasy'
        ]);
        DB::table('categories')->insert([
            'name' => 'Family Saga'
        ]);
    }
}
