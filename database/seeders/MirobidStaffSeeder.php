<?php

namespace Database\Seeders;

use App\Models\MirobidStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MirobidStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MirobidStaff::create([
            'staff_name'=>'Lila Chandler',
            'staff_surname'=>'Stein',
            'staff_profission'=>'Doloremque ut perfer',
            'staff_img'=>'avatars/IDcTydPgmqPKMdxYrs9U2kCY4IMkKMROrG9d2m1K.jpg',
            'staff_bio'=>'Doloremque quia cons'
        ]);
        MirobidStaff::create([
            'staff_name'=>'Abel Patel',
            'staff_surname'=>'Stein',
            'staff_profission'=>'Doloremque ut perfer',
            'staff_img'=>'avatars/ZHWaqibD46JuNqqDCFC7FviLSGoFy9kd3KbxmWRx.jpg',
            'staff_bio'=>'Doloremque quia cons'
        ]);
        MirobidStaff::create([
            'staff_name'=>'Simone Blevins',
            'staff_surname'=>'Stein',
            'staff_profission'=>'Doloremque ut perfer',
            'staff_img'=>'avatars/0GUMMxNRhxttQShldBhMb3AEMtu637pYfU8xPWFr.jpg',
            'staff_bio'=>'Doloremque quia cons'
        ]);
    }
}
