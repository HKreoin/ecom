<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Dell',
                'slug' => 'dell',],
            [
                'name' => 'Asus',
                'slug' => 'asus',
            ],
            [
                'name' => 'HP',
                'slug' => 'hp',
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
            ]
        ]);

    }
}
