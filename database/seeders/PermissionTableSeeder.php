<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            'dashbord',
            'product_listing',
            'product_create',
            'product_edit',
            'product_delete',

        ];
        foreach($data as $d)
        {
            Permission::create(['name'=>$d]);
        }
    }
}
