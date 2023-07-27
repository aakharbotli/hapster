<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create(['name'=>'x','company_id'=>1]);
        Site::create(['name'=>'y','company_id'=>1]);
        Site::create(['name'=>'z','company_id'=>1]);
        Site::create(['name'=>'q','company_id'=>1]);
    }
}
