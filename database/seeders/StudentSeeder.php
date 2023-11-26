<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'no_registration' => '121345676',
            'name' => 'Lily M.',
            'gender' => 'Female',
            'email' => 'lily@gmail.com',
            'phone' => '089876776545',
            'city' => 'Jambi',
        ]);
    }
}
