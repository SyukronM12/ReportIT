<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;

class ReportSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $categories = Category::all();
        $locations = Location::all();

        $reports = [
            [
                'title' => 'Broken Lamp in Meeting Room',
                'description' => 'The ceiling lamp flickers and sometimes turns off completely.',
                'category_id' => $categories->where('name', 'Lighting Failure')->first()?->id,
                'location_id' => $locations->where('name', 'Meeting Room 1')->first()?->id,
                'status' => 'pending',
                'reported_by' => $user->id,
            ],
            [
                'title' => 'Leaking Pipe in Restroom',
                'description' => 'Water dripping continuously near the sink.',
                'category_id' => $categories->where('name', 'Plumbing Problems')->first()?->id,
                'location_id' => $locations->where('name', 'Restroom - 2nd Floor')->first()?->id,
                'status' => 'in_progress',
                'reported_by' => $user->id,
            ],
            [
                'title' => 'Air Conditioner Not Cooling',
                'description' => 'AC unit in the lobby only blows warm air.',
                'category_id' => $categories->where('name', 'Air Conditioning / Ventilation')->first()?->id,
                'location_id' => $locations->where('name', 'Main Office - Lobby')->first()?->id,
                'status' => 'resolved',
                'reported_by' => $user->id,
            ],
        ];

        foreach ($reports as $report) {
            Report::create($report);
        }
    }
}
