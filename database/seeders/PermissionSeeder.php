<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permission')->insert([
            'route' => 'users',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'categories',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'review',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'response',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'tarif',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'workexamples',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'roles',
            'get' => 1,
            'post' => 1,
            'delete' => 1,
        ]);
       
    }
}
