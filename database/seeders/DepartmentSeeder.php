<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'parent_id'=>null,'name'=>'Research',
            'description'=>'Research Department',
            'site_id'=>2
        ]);
        Department::create([
            'parent_id'=>null,'name'=>'technology',
            'description'=>'technology Department',
            'site_id'=>2
        ]);
        Department::create([
            'parent_id'=>1,
            'name'=>'X1','description'=>'X1 Department',
            'site_id'=>2
        ]);
        Department::create([
            'parent_id'=>2,
            'name'=>'Y1','description'=>'Y1 Department',
            'site_id'=>1
        ]);
    }
}
