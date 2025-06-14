<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    public function run()
    {
        $majors = [
            ['name' => 'Teknik Informatika'],
            ['name' => 'Sistem Informasi'],
            ['name' => 'Teknik Komputer'],
            ['name' => 'Manajemen Informatika'],
        ];
        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}
