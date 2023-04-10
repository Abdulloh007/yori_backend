<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('roles')->insert([
            'title' => 'customer',
            'descr' => ' ',//user
        ]);

        DB::table('roles')->insert([
            'title' => 'perfomer',
            'descr' => ' ',//performer
        ]);

        DB::table('roles')->insert([
            'title' => 'moderator',
            'descr' => ' ',//moderator
        ]);

        DB::table('roles')->insert([
            'title' => 'admin',
            'descr' => ' ',//admin
        ]);

        DB::table('roles')->insert([
            'title' => 'superadmin',
            'descr' => ' ', //superadmin
        ]);
    }
}
