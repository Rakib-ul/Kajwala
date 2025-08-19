<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Worker;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workers = [
            [
                'name' => 'Ahmed Khan',
                'email' => 'ahmed.electrician@email.com',
                'phone' => '+880 1712345678',
                'skill' => 'Electrician',
                'address' => 'Mirpur, Dhaka',
                'experience_years' => 8,
                'hourly_rate' => 500,
                'is_verified' => true,
            ],
            [
                'name' => 'Rahim Ali',
                'email' => 'rahim.plumber@email.com',
                'phone' => '+880 1812345678',
                'skill' => 'Plumber',
                'address' => 'Gulshan, Dhaka',
                'experience_years' => 12,
                'hourly_rate' => 600,
                'is_verified' => true,
            ],
            [
                'name' => 'Fatima Begum',
                'email' => 'fatima.cleaner@email.com',
                'phone' => '+880 1912345678',
                'skill' => 'Cleaner',
                'address' => 'Dhanmondi, Dhaka',
                'experience_years' => 5,
                'hourly_rate' => 300,
                'is_verified' => true,
            ],
            [
                'name' => 'Karim Hossain',
                'email' => 'karim.painter@email.com',
                'phone' => '+880 1612345678',
                'skill' => 'Painter',
                'address' => 'Banani, Dhaka',
                'experience_years' => 10,
                'hourly_rate' => 450,
                'is_verified' => true,
            ],
            [
                'name' => 'Nasreen Akter',
                'email' => 'nasreen.ac@email.com',
                'phone' => '+880 1512345678',
                'skill' => 'AC Technician',
                'address' => 'Uttara, Dhaka',
                'experience_years' => 7,
                'hourly_rate' => 700,
                'is_verified' => true,
            ],
            [
                'name' => 'Momin Uddin',
                'email' => 'momin.cook@email.com',
                'phone' => '+880 1412345678',
                'skill' => 'Cook',
                'address' => 'Lalmatia, Dhaka',
                'experience_years' => 15,
                'hourly_rate' => 400,
                'is_verified' => true,
            ],
            [
                'name' => 'Salma Khatun',
                'email' => 'salma.housemaid@email.com',
                'phone' => '+880 1312345678',
                'skill' => 'Housemaid',
                'address' => 'Mohammadpur, Dhaka',
                'experience_years' => 6,
                'hourly_rate' => 350,
                'is_verified' => true,
            ],
            [
                'name' => 'Jabbar Mia',
                'email' => 'jabbar.security@email.com',
                'phone' => '+880 1212345678',
                'skill' => 'Security Guard',
                'address' => 'Baridhara, Dhaka',
                'experience_years' => 9,
                'hourly_rate' => 250,
                'is_verified' => true,
            ],
        ];

        foreach ($workers as $workerData) {
            Worker::create($workerData);
        }
    }
}
