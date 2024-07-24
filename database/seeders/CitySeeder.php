<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city')->insert([
            'name' => 'Душанбе'
        ]);

        DB::table('city')->insert([
            'name' => 'Худжанд'
        ]);

        DB::table('city')->insert([
            'name' => 'Айни'
        ]);

        DB::table('city')->insert([
            'name' => 'Мастчох'
        ]);

        DB::table('city')->insert([
            'name' => 'Истаравшан'
        ]);

        DB::table('city')->insert([
            'name' => 'Кулоб'
        ]);
    }
}
