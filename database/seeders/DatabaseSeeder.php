<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@kaajwala.com',
            'role' => 'admin',
            'phone' => '+8801518996430',
        ]);

        // Create regular user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'user',
            'phone' => '+8801518996431',
        ]);

        // Create basic services
        $services = [
            ['name' => 'Electrician', 'category' => 'Electrical', 'price' => 500, 'min_price' => 300, 'max_price' => 800],
            ['name' => 'Plumber', 'category' => 'Plumbing', 'price' => 400, 'min_price' => 250, 'max_price' => 600],
            ['name' => 'Cleaner', 'category' => 'Cleaning', 'price' => 300, 'min_price' => 200, 'max_price' => 500],
            ['name' => 'Painter', 'category' => 'Painting', 'price' => 600, 'min_price' => 400, 'max_price' => 1000],
            ['name' => 'Carpenter', 'category' => 'Carpentry', 'price' => 700, 'min_price' => 500, 'max_price' => 1200],
            ['name' => 'AC Technician', 'category' => 'HVAC', 'price' => 800, 'min_price' => 600, 'max_price' => 1500],
            ['name' => 'Mechanic', 'category' => 'Mechanical', 'price' => 450, 'min_price' => 300, 'max_price' => 700],
            ['name' => 'Cook', 'category' => 'Culinary', 'price' => 400, 'min_price' => 300, 'max_price' => 600],
            ['name' => 'Housemaid', 'category' => 'Domestic', 'price' => 350, 'min_price' => 250, 'max_price' => 500],
            ['name' => 'Security Guard', 'category' => 'Security', 'price' => 600, 'min_price' => 450, 'max_price' => 800],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }

        $this->call([
            WorkerSeeder::class,
        ]);
    }
}
