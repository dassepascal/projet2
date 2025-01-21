<?php

namespace Database\Seeders;

use App\Models\Particular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Particular::factory(10)->create();
    }
}
