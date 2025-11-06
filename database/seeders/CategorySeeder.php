<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electrical Issues', 'description' => 'Power outage, broken switches, or damaged cables'],
            ['name' => 'Plumbing Problems', 'description' => 'Leaking pipes, clogged drains, or broken toilets'],
            ['name' => 'Building Structure', 'description' => 'Cracks, wall damage, or broken doors/windows'],
            ['name' => 'Air Conditioning / Ventilation', 'description' => 'AC not cooling or ventilation issues'],
            ['name' => 'IT & Network Equipment', 'description' => 'Computer, printer, or internet problems'],
            ['name' => 'Furniture Damage', 'description' => 'Broken chairs, tables, or cabinets'],
            ['name' => 'Lighting Failure', 'description' => 'Burned out bulbs or faulty switches'],
            ['name' => 'Safety & Security', 'description' => 'Broken CCTV, alarms, or locks'],
            ['name' => 'Cleanliness & Sanitation', 'description' => 'Dirty area, bad odor, or overflowing trash'],
            ['name' => 'Outdoor Facilities', 'description' => 'Damaged road, unmaintained garden, or broken signage'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
