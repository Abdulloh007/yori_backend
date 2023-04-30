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
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);

        DB::table('permission')->insert([
            'route' => 'categories',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);
        
        DB::table('permission')->insert([
            'route' => 'review',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'response',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);
        
        DB::table('permission')->insert([
            'route' => 'tarif',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);

        DB::table('permission')->insert([
            'route' => 'workexamples',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);

        DB::table('permission')->insert([
            'route' => 'roles',
            'get' => '1,5',
            'post' => '1,5',
            'delete' => '1,5',
        ]);


        // ADMIN 


        DB::table('permission')->insert([
            'route' => 'admin',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'index',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        
        DB::table('permission')->insert([
            'route' => 'categories-create',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'categories-store',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'categories-update',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'categories-edit',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'categories-delete',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);


        DB::table('permission')->insert([
            'route' => 'subcategories-create',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories-store',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories-update',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories-edit',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'subcategories-delete',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);


        DB::table('permission')->insert([
            'route' => 'tarif-create',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'tarif-store',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'tarif-update',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'tarif-edit',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'tarif-delete',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);


        DB::table('permission')->insert([
            'route' => 'roles-create',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'roles-store',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'roles-update',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'roles-edit',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'roles-delete',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);


        DB::table('permission')->insert([
            'route' => 'users-create',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'users-store',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'users-update',
            'get' => '',
            'post' => '4,5',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'users-edit',
            'get' => '4,5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'users-delete',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
       
        DB::table('permission')->insert([
            'route' => 'users-show',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'chat',
            'get' => '1',
            'post' => '1',
            'delete' => '1',
        ]);

        DB::table('permission')->insert([
            'route' => 'message',
            'get' => '1',
            'post' => '1',
            'delete' => '1',
        ]);

        DB::table('permission')->insert([
            'route' => 'permission',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1
        ]);

        DB::table('permission')->insert([
            'route' => 'permission-edit',
            'get' => '5',
            'post' => '',
            'delete' => '',
            'status' => 1
        ]);

        
        DB::table('permission')->insert([
            'route' => 'permission-update',
            'get' => '',
            'post' => '5',
            'delete' => '',
            'status' => 1
        ]);

        DB::table('permission')->insert([
            'route' => 'permission-update-admin',
            'get' => '',
            'post' => '5',
            'delete' => '',
            'status' => 1
        ]);

        DB::table('permission')->insert([
            'route' => 'city',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
        ]);

        DB::table('permission')->insert([
            'route' => 'city-create',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'city-store',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'city-update',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'city-edit',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'city-delete',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'task-create',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task-store',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'task-update',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task-edit',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task-delete',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'response-create',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'response-store',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);

        DB::table('permission')->insert([
            'route' => 'response-update',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'response-edit',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'response-delete',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);
        
        DB::table('permission')->insert([
            'route' => 'task-show',
            'get' => '3,4,5',
            'post' => '5',
            'delete' => '5',
            'status' => 1,
        ]);


    }
}
