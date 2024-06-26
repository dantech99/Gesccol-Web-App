<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call(UserSeeder::class);
        // $this->call(OrderSeeder::class);
        // $this->call(ContractSeeder::class);
        // $this->call(GlosarySeeder::class);
        // Category::factory(4)->create();
        // $this->call(PostSeeder::class);
        // $this->call(ServiceSeeder::class);
        // $this->call(ReportSeeder::class);
        $this->call(NotificationSeeder::class);

    }
}
