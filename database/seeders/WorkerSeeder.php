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
        // Electrician Workers (15)
        $electricians = [
            ['name' => 'Ahmed Khan', 'email' => 'ahmed.electrician@email.com', 'phone' => '+880 1712345678', 'skill' => 'Electrician', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Rashid Ahmed', 'email' => 'rashid.electric@email.com', 'phone' => '+880 1712345679', 'skill' => 'Electrician', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 600, 'is_verified' => true],
            ['name' => 'Karim Hossain', 'email' => 'karim.electric@email.com', 'phone' => '+880 1712345680', 'skill' => 'Electrician', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 6, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Momin Ali', 'email' => 'momin.electric@email.com', 'phone' => '+880 1712345681', 'skill' => 'Electrician', 'address' => 'Banani, Dhaka', 'experience_years' => 10, 'hourly_rate' => 550, 'is_verified' => true],
            ['name' => 'Jabbar Mia', 'email' => 'jabbar.electric@email.com', 'phone' => '+880 1712345682', 'skill' => 'Electrician', 'address' => 'Uttara, Dhaka', 'experience_years' => 15, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Salam Khan', 'email' => 'salam.electric@email.com', 'phone' => '+880 1712345683', 'skill' => 'Electrician', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 7, 'hourly_rate' => 480, 'is_verified' => true],
            ['name' => 'Rahim Uddin', 'email' => 'rahim.electric@email.com', 'phone' => '+880 1712345684', 'skill' => 'Electrician', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 520, 'is_verified' => true],
            ['name' => 'Nasir Ahmed', 'email' => 'nasir.electric@email.com', 'phone' => '+880 1712345685', 'skill' => 'Electrician', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 580, 'is_verified' => true],
            ['name' => 'Farid Hossain', 'email' => 'farid.electric@email.com', 'phone' => '+880 1712345686', 'skill' => 'Electrician', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Aziz Rahman', 'email' => 'aziz.electric@email.com', 'phone' => '+880 1712345687', 'skill' => 'Electrician', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 650, 'is_verified' => true],
            ['name' => 'Tofazzal Hossain', 'email' => 'tofazzal.electric@email.com', 'phone' => '+880 1712345688', 'skill' => 'Electrician', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Shafiqul Islam', 'email' => 'shafiqul.electric@email.com', 'phone' => '+880 1712345689', 'skill' => 'Electrician', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 680, 'is_verified' => true],
            ['name' => 'Mizanur Rahman', 'email' => 'mizanur.electric@email.com', 'phone' => '+880 1712345690', 'skill' => 'Electrician', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Anisur Rahman', 'email' => 'anisur.electric@email.com', 'phone' => '+880 1712345691', 'skill' => 'Electrician', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 550, 'is_verified' => true],
            ['name' => 'Delwar Hossain', 'email' => 'delwar.electric@email.com', 'phone' => '+880 1712345692', 'skill' => 'Electrician', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 520, 'is_verified' => true],
        ];

        // Plumber Workers (15)
        $plumbers = [
            ['name' => 'Rahim Ali', 'email' => 'rahim.plumber@email.com', 'phone' => '+880 1812345678', 'skill' => 'Plumber', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 600, 'is_verified' => true],
            ['name' => 'Salam Mia', 'email' => 'salam.plumber@email.com', 'phone' => '+880 1812345679', 'skill' => 'Plumber', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Karim Uddin', 'email' => 'karim.plumber@email.com', 'phone' => '+880 1812345680', 'skill' => 'Plumber', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 15, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Momin Hossain', 'email' => 'momin.plumber@email.com', 'phone' => '+880 1812345681', 'skill' => 'Plumber', 'address' => 'Banani, Dhaka', 'experience_years' => 6, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Jabbar Khan', 'email' => 'jabbar.plumber@email.com', 'phone' => '+880 1812345682', 'skill' => 'Plumber', 'address' => 'Uttara, Dhaka', 'experience_years' => 10, 'hourly_rate' => 550, 'is_verified' => true],
            ['name' => 'Rashid Ali', 'email' => 'rashid.plumber@email.com', 'phone' => '+880 1812345683', 'skill' => 'Plumber', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 7, 'hourly_rate' => 480, 'is_verified' => true],
            ['name' => 'Nasir Mia', 'email' => 'nasir.plumber@email.com', 'phone' => '+880 1812345684', 'skill' => 'Plumber', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 520, 'is_verified' => true],
            ['name' => 'Farid Ali', 'email' => 'farid.plumber@email.com', 'phone' => '+880 1812345685', 'skill' => 'Plumber', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 580, 'is_verified' => true],
            ['name' => 'Aziz Mia', 'email' => 'aziz.plumber@email.com', 'phone' => '+880 1812345686', 'skill' => 'Plumber', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Tofazzal Ali', 'email' => 'tofazzal.plumber@email.com', 'phone' => '+880 1812345687', 'skill' => 'Plumber', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 650, 'is_verified' => true],
            ['name' => 'Shafiqul Mia', 'email' => 'shafiqul.plumber@email.com', 'phone' => '+880 1812345688', 'skill' => 'Plumber', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Mizanur Ali', 'email' => 'mizanur.plumber@email.com', 'phone' => '+880 1812345689', 'skill' => 'Plumber', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 680, 'is_verified' => true],
            ['name' => 'Anisur Mia', 'email' => 'anisur.plumber@email.com', 'phone' => '+880 1812345690', 'skill' => 'Plumber', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Delwar Ali', 'email' => 'delwar.plumber@email.com', 'phone' => '+880 1812345691', 'skill' => 'Plumber', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 550, 'is_verified' => true],
            ['name' => 'Rafiq Mia', 'email' => 'rafiq.plumber@email.com', 'phone' => '+880 1812345692', 'skill' => 'Plumber', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 520, 'is_verified' => true],
        ];

        // Cleaner Workers (15)
        $cleaners = [
            ['name' => 'Fatima Begum', 'email' => 'fatima.cleaner@email.com', 'phone' => '+880 1912345678', 'skill' => 'Cleaner', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 5, 'hourly_rate' => 300, 'is_verified' => true],
            ['name' => 'Ayesha Khatun', 'email' => 'ayesha.cleaner@email.com', 'phone' => '+880 1912345679', 'skill' => 'Cleaner', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Rahima Begum', 'email' => 'rahima.cleaner@email.com', 'phone' => '+880 1912345680', 'skill' => 'Cleaner', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Nasreen Akter', 'email' => 'nasreen.cleaner@email.com', 'phone' => '+880 1912345681', 'skill' => 'Cleaner', 'address' => 'Banani, Dhaka', 'experience_years' => 6, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Salma Khatun', 'email' => 'salma.cleaner@email.com', 'phone' => '+880 1912345682', 'skill' => 'Cleaner', 'address' => 'Uttara, Dhaka', 'experience_years' => 10, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Farida Begum', 'email' => 'farida.cleaner@email.com', 'phone' => '+880 1912345683', 'skill' => 'Cleaner', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 7, 'hourly_rate' => 330, 'is_verified' => true],
            ['name' => 'Rashida Khatun', 'email' => 'rashida.cleaner@email.com', 'phone' => '+880 1912345684', 'skill' => 'Cleaner', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 360, 'is_verified' => true],
            ['name' => 'Zohra Begum', 'email' => 'zohra.cleaner@email.com', 'phone' => '+880 1912345685', 'skill' => 'Cleaner', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 390, 'is_verified' => true],
            ['name' => 'Shahana Akter', 'email' => 'shahana.cleaner@email.com', 'phone' => '+880 1912345686', 'skill' => 'Cleaner', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 300, 'is_verified' => true],
            ['name' => 'Nazma Begum', 'email' => 'nazma.cleaner@email.com', 'phone' => '+880 1912345687', 'skill' => 'Cleaner', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Rahima Khatun', 'email' => 'rahima2.cleaner@email.com', 'phone' => '+880 1912345688', 'skill' => 'Cleaner', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Firoza Begum', 'email' => 'firoza.cleaner@email.com', 'phone' => '+880 1912345689', 'skill' => 'Cleaner', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 430, 'is_verified' => true],
            ['name' => 'Shahida Khatun', 'email' => 'shahida.cleaner@email.com', 'phone' => '+880 1912345690', 'skill' => 'Cleaner', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Nazia Begum', 'email' => 'nazia.cleaner@email.com', 'phone' => '+880 1912345691', 'skill' => 'Cleaner', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Rashida Begum', 'email' => 'rashida2.cleaner@email.com', 'phone' => '+880 1912345692', 'skill' => 'Cleaner', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 360, 'is_verified' => true],
        ];

        // Painter Workers (15)
        $painters = [
            ['name' => 'Karim Hossain', 'email' => 'karim.painter@email.com', 'phone' => '+880 1612345678', 'skill' => 'Painter', 'address' => 'Banani, Dhaka', 'experience_years' => 10, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Rahim Mia', 'email' => 'rahim.painter@email.com', 'phone' => '+880 1612345679', 'skill' => 'Painter', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Salam Khan', 'email' => 'salam.painter@email.com', 'phone' => '+880 1612345680', 'skill' => 'Painter', 'address' => 'Gulshan, Dhaka', 'experience_years' => 15, 'hourly_rate' => 550, 'is_verified' => true],
            ['name' => 'Momin Ali', 'email' => 'momin.painter@email.com', 'phone' => '+880 1612345681', 'skill' => 'Painter', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 6, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Jabbar Uddin', 'email' => 'jabbar.painter@email.com', 'phone' => '+880 1612345682', 'skill' => 'Painter', 'address' => 'Uttara, Dhaka', 'experience_years' => 12, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Rashid Hossain', 'email' => 'rashid.painter@email.com', 'phone' => '+880 1612345683', 'skill' => 'Painter', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 7, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Nasir Mia', 'email' => 'nasir.painter@email.com', 'phone' => '+880 1612345684', 'skill' => 'Painter', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Farid Khan', 'email' => 'farid.painter@email.com', 'phone' => '+880 1612345685', 'skill' => 'Painter', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 480, 'is_verified' => true],
            ['name' => 'Aziz Ali', 'email' => 'aziz.painter@email.com', 'phone' => '+880 1612345686', 'skill' => 'Painter', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Tofazzal Mia', 'email' => 'tofazzal.painter@email.com', 'phone' => '+880 1612345687', 'skill' => 'Painter', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 520, 'is_verified' => true],
            ['name' => 'Shafiqul Khan', 'email' => 'shafiqul.painter@email.com', 'phone' => '+880 1612345688', 'skill' => 'Painter', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Mizanur Ali', 'email' => 'mizanur.painter@email.com', 'phone' => '+880 1612345689', 'skill' => 'Painter', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 530, 'is_verified' => true],
            ['name' => 'Anisur Mia', 'email' => 'anisur.painter@email.com', 'phone' => '+880 1612345690', 'skill' => 'Painter', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Delwar Khan', 'email' => 'delwar.painter@email.com', 'phone' => '+880 1612345691', 'skill' => 'Painter', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Rafiq Ali', 'email' => 'rafiq.painter@email.com', 'phone' => '+880 1612345692', 'skill' => 'Painter', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 420, 'is_verified' => true],
        ];

        // AC Technician Workers (15)
        $acTechnicians = [
            ['name' => 'Nasreen Akter', 'email' => 'nasreen.ac@email.com', 'phone' => '+880 1512345678', 'skill' => 'AC Technician', 'address' => 'Uttara, Dhaka', 'experience_years' => 7, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Rahim Mia', 'email' => 'rahim.ac@email.com', 'phone' => '+880 1512345679', 'skill' => 'AC Technician', 'address' => 'Mirpur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 750, 'is_verified' => true],
            ['name' => 'Karim Khan', 'email' => 'karim.ac@email.com', 'phone' => '+880 1512345680', 'skill' => 'AC Technician', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 800, 'is_verified' => true],
            ['name' => 'Salam Ali', 'email' => 'salam.ac@email.com', 'phone' => '+880 1512345681', 'skill' => 'AC Technician', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 5, 'hourly_rate' => 650, 'is_verified' => true],
            ['name' => 'Momin Hossain', 'email' => 'momin.ac@email.com', 'phone' => '+880 1512345682', 'skill' => 'AC Technician', 'address' => 'Banani, Dhaka', 'experience_years' => 10, 'hourly_rate' => 750, 'is_verified' => true],
            ['name' => 'Jabbar Mia', 'email' => 'jabbar.ac@email.com', 'phone' => '+880 1512345683', 'skill' => 'AC Technician', 'address' => 'Uttara, Dhaka', 'experience_years' => 8, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Rashid Khan', 'email' => 'rashid.ac@email.com', 'phone' => '+880 1512345684', 'skill' => 'AC Technician', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 6, 'hourly_rate' => 680, 'is_verified' => true],
            ['name' => 'Nasir Ali', 'email' => 'nasir.ac@email.com', 'phone' => '+880 1512345685', 'skill' => 'AC Technician', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 11, 'hourly_rate' => 780, 'is_verified' => true],
            ['name' => 'Farid Mia', 'email' => 'farid.ac@email.com', 'phone' => '+880 1512345686', 'skill' => 'AC Technician', 'address' => 'Baridhara, Dhaka', 'experience_years' => 7, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Aziz Khan', 'email' => 'aziz.ac@email.com', 'phone' => '+880 1512345687', 'skill' => 'AC Technician', 'address' => 'Badda, Dhaka', 'experience_years' => 13, 'hourly_rate' => 820, 'is_verified' => true],
            ['name' => 'Tofazzal Ali', 'email' => 'tofazzal.ac@email.com', 'phone' => '+880 1512345688', 'skill' => 'AC Technician', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 8, 'hourly_rate' => 700, 'is_verified' => true],
            ['name' => 'Shafiqul Mia', 'email' => 'shafiqul.ac@email.com', 'phone' => '+880 1512345689', 'skill' => 'AC Technician', 'address' => 'Ramna, Dhaka', 'experience_years' => 14, 'hourly_rate' => 850, 'is_verified' => true],
            ['name' => 'Mizanur Khan', 'email' => 'mizanur.ac@email.com', 'phone' => '+880 1512345690', 'skill' => 'AC Technician', 'address' => 'Paltan, Dhaka', 'experience_years' => 6, 'hourly_rate' => 680, 'is_verified' => true],
            ['name' => 'Anisur Ali', 'email' => 'anisur.ac@email.com', 'phone' => '+880 1512345691', 'skill' => 'AC Technician', 'address' => 'Motijheel, Dhaka', 'experience_years' => 10, 'hourly_rate' => 750, 'is_verified' => true],
            ['name' => 'Delwar Mia', 'email' => 'delwar.ac@email.com', 'phone' => '+880 1512345692', 'skill' => 'AC Technician', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 750, 'is_verified' => true],
        ];

        // Cook Workers (15)
        $cooks = [
            ['name' => 'Momin Uddin', 'email' => 'momin.cook@email.com', 'phone' => '+880 1412345678', 'skill' => 'Cook', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 15, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Rashid Mia', 'email' => 'rashid.cook@email.com', 'phone' => '+880 1412345679', 'skill' => 'Cook', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Karim Ali', 'email' => 'karim.cook@email.com', 'phone' => '+880 1412345680', 'skill' => 'Cook', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Salam Khan', 'email' => 'salam.cook@email.com', 'phone' => '+880 1412345681', 'skill' => 'Cook', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 6, 'hourly_rate' => 300, 'is_verified' => true],
            ['name' => 'Momin Hossain', 'email' => 'momin2.cook@email.com', 'phone' => '+880 1412345682', 'skill' => 'Cook', 'address' => 'Banani, Dhaka', 'experience_years' => 10, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Jabbar Mia', 'email' => 'jabbar.cook@email.com', 'phone' => '+880 1412345683', 'skill' => 'Cook', 'address' => 'Uttara, Dhaka', 'experience_years' => 7, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Nasir Ali', 'email' => 'nasir.cook@email.com', 'phone' => '+880 1412345684', 'skill' => 'Cook', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 9, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Farid Khan', 'email' => 'farid.cook@email.com', 'phone' => '+880 1412345685', 'skill' => 'Cook', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Aziz Mia', 'email' => 'aziz.cook@email.com', 'phone' => '+880 1412345686', 'skill' => 'Cook', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 280, 'is_verified' => true],
            ['name' => 'Tofazzal Ali', 'email' => 'tofazzal.cook@email.com', 'phone' => '+880 1412345687', 'skill' => 'Cook', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 480, 'is_verified' => true],
            ['name' => 'Shafiqul Mia', 'email' => 'shafiqul.cook@email.com', 'phone' => '+880 1412345688', 'skill' => 'Cook', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Mizanur Khan', 'email' => 'mizanur.cook@email.com', 'phone' => '+880 1412345689', 'skill' => 'Cook', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Anisur Ali', 'email' => 'anisur.cook@email.com', 'phone' => '+880 1412345690', 'skill' => 'Cook', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 300, 'is_verified' => true],
            ['name' => 'Delwar Mia', 'email' => 'delwar.cook@email.com', 'phone' => '+880 1412345691', 'skill' => 'Cook', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Rafiq Khan', 'email' => 'rafiq.cook@email.com', 'phone' => '+880 1412345692', 'skill' => 'Cook', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 380, 'is_verified' => true],
        ];

        // Housemaid Workers (15)
        $housemaids = [
            ['name' => 'Salma Khatun', 'email' => 'salma.housemaid@email.com', 'phone' => '+880 1312345678', 'skill' => 'Housemaid', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 6, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Fatima Begum', 'email' => 'fatima.housemaid@email.com', 'phone' => '+880 1312345679', 'skill' => 'Housemaid', 'address' => 'Mirpur, Dhaka', 'experience_years' => 8, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Ayesha Khatun', 'email' => 'ayesha.housemaid@email.com', 'phone' => '+880 1312345680', 'skill' => 'Housemaid', 'address' => 'Gulshan, Dhaka', 'experience_years' => 12, 'hourly_rate' => 450, 'is_verified' => true],
            ['name' => 'Rahima Begum', 'email' => 'rahima.housemaid@email.com', 'phone' => '+880 1312345681', 'skill' => 'Housemaid', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 5, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Nasreen Akter', 'email' => 'nasreen.housemaid@email.com', 'phone' => '+880 1312345682', 'skill' => 'Housemaid', 'address' => 'Banani, Dhaka', 'experience_years' => 10, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Farida Begum', 'email' => 'farida.housemaid@email.com', 'phone' => '+880 1312345683', 'skill' => 'Housemaid', 'address' => 'Uttara, Dhaka', 'experience_years' => 7, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Rashida Khatun', 'email' => 'rashida.housemaid@email.com', 'phone' => '+880 1312345684', 'skill' => 'Housemaid', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 9, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Zohra Begum', 'email' => 'zohra.housemaid@email.com', 'phone' => '+880 1312345685', 'skill' => 'Housemaid', 'address' => 'Baridhara, Dhaka', 'experience_years' => 11, 'hourly_rate' => 420, 'is_verified' => true],
            ['name' => 'Shahana Akter', 'email' => 'shahana.housemaid@email.com', 'phone' => '+880 1312345686', 'skill' => 'Housemaid', 'address' => 'Badda, Dhaka', 'experience_years' => 5, 'hourly_rate' => 320, 'is_verified' => true],
            ['name' => 'Nazma Begum', 'email' => 'nazma.housemaid@email.com', 'phone' => '+880 1312345687', 'skill' => 'Housemaid', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 13, 'hourly_rate' => 480, 'is_verified' => true],
            ['name' => 'Rahima Khatun', 'email' => 'rahima2.housemaid@email.com', 'phone' => '+880 1312345688', 'skill' => 'Housemaid', 'address' => 'Ramna, Dhaka', 'experience_years' => 8, 'hourly_rate' => 380, 'is_verified' => true],
            ['name' => 'Firoza Begum', 'email' => 'firoza.housemaid@email.com', 'phone' => '+880 1312345689', 'skill' => 'Housemaid', 'address' => 'Paltan, Dhaka', 'experience_years' => 14, 'hourly_rate' => 500, 'is_verified' => true],
            ['name' => 'Shahida Khatun', 'email' => 'shahida.housemaid@email.com', 'phone' => '+880 1312345690', 'skill' => 'Housemaid', 'address' => 'Motijheel, Dhaka', 'experience_years' => 6, 'hourly_rate' => 350, 'is_verified' => true],
            ['name' => 'Nazia Begum', 'email' => 'nazia.housemaid@email.com', 'phone' => '+880 1312345691', 'skill' => 'Housemaid', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 10, 'hourly_rate' => 400, 'is_verified' => true],
            ['name' => 'Rashida Begum', 'email' => 'rashida2.housemaid@email.com', 'phone' => '+880 1312345692', 'skill' => 'Housemaid', 'address' => 'Wari, Dhaka', 'experience_years' => 9, 'hourly_rate' => 380, 'is_verified' => true],
        ];

        // Security Guard Workers (15)
        $securityGuards = [
            ['name' => 'Jabbar Mia', 'email' => 'jabbar.security@email.com', 'phone' => '+880 1212345678', 'skill' => 'Security Guard', 'address' => 'Baridhara, Dhaka', 'experience_years' => 9, 'hourly_rate' => 250, 'is_verified' => true],
            ['name' => 'Rashid Khan', 'email' => 'rashid.security@email.com', 'phone' => '+880 1212345679', 'skill' => 'Security Guard', 'address' => 'Mirpur, Dhaka', 'experience_years' => 7, 'hourly_rate' => 220, 'is_verified' => true],
            ['name' => 'Karim Ali', 'email' => 'karim.security@email.com', 'phone' => '+880 1212345680', 'skill' => 'Security Guard', 'address' => 'Gulshan, Dhaka', 'experience_years' => 11, 'hourly_rate' => 280, 'is_verified' => true],
            ['name' => 'Salam Mia', 'email' => 'salam.security@email.com', 'phone' => '+880 1212345681', 'skill' => 'Security Guard', 'address' => 'Dhanmondi, Dhaka', 'experience_years' => 5, 'hourly_rate' => 200, 'is_verified' => true],
            ['name' => 'Momin Khan', 'email' => 'momin.security@email.com', 'phone' => '+880 1212345682', 'skill' => 'Security Guard', 'address' => 'Banani, Dhaka', 'experience_years' => 8, 'hourly_rate' => 240, 'is_verified' => true],
            ['name' => 'Nasir Ali', 'email' => 'nasir.security@email.com', 'phone' => '+880 1212345683', 'skill' => 'Security Guard', 'address' => 'Uttara, Dhaka', 'experience_years' => 6, 'hourly_rate' => 210, 'is_verified' => true],
            ['name' => 'Farid Mia', 'email' => 'farid.security@email.com', 'phone' => '+880 1212345684', 'skill' => 'Security Guard', 'address' => 'Lalmatia, Dhaka', 'experience_years' => 10, 'hourly_rate' => 260, 'is_verified' => true],
            ['name' => 'Aziz Khan', 'email' => 'aziz.security@email.com', 'phone' => '+880 1212345685', 'skill' => 'Security Guard', 'address' => 'Mohammadpur, Dhaka', 'experience_years' => 12, 'hourly_rate' => 290, 'is_verified' => true],
            ['name' => 'Tofazzal Ali', 'email' => 'tofazzal.security@email.com', 'phone' => '+880 1212345686', 'skill' => 'Security Guard', 'address' => 'Baridhara, Dhaka', 'experience_years' => 7, 'hourly_rate' => 220, 'is_verified' => true],
            ['name' => 'Shafiqul Mia', 'email' => 'shafiqul.security@email.com', 'phone' => '+880 1212345687', 'skill' => 'Security Guard', 'address' => 'Badda, Dhaka', 'experience_years' => 13, 'hourly_rate' => 300, 'is_verified' => true],
            ['name' => 'Mizanur Khan', 'email' => 'mizanur.security@email.com', 'phone' => '+880 1212345688', 'skill' => 'Security Guard', 'address' => 'Shahbagh, Dhaka', 'experience_years' => 8, 'hourly_rate' => 240, 'is_verified' => true],
            ['name' => 'Anisur Ali', 'email' => 'anisur.security@email.com', 'phone' => '+880 1212345689', 'skill' => 'Security Guard', 'address' => 'Ramna, Dhaka', 'experience_years' => 14, 'hourly_rate' => 310, 'is_verified' => true],
            ['name' => 'Delwar Mia', 'email' => 'delwar.security@email.com', 'phone' => '+880 1212345690', 'skill' => 'Security Guard', 'address' => 'Paltan, Dhaka', 'experience_years' => 6, 'hourly_rate' => 210, 'is_verified' => true],
            ['name' => 'Rafiq Khan', 'email' => 'rafiq.security@email.com', 'phone' => '+880 1212345691', 'skill' => 'Security Guard', 'address' => 'Motijheel, Dhaka', 'experience_years' => 10, 'hourly_rate' => 260, 'is_verified' => true],
            ['name' => 'Salam Ali', 'email' => 'salam2.security@email.com', 'phone' => '+880 1212345692', 'skill' => 'Security Guard', 'address' => 'Sutrapur, Dhaka', 'experience_years' => 9, 'hourly_rate' => 250, 'is_verified' => true],
        ];

        // Combine all workers
        $allWorkers = array_merge($electricians, $plumbers, $cleaners, $painters, $acTechnicians, $cooks, $housemaids, $securityGuards);

        // Create workers
        foreach ($allWorkers as $workerData) {
            Worker::create($workerData);
        }
    }
}
