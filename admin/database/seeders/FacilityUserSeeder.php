<?php

namespace Database\Seeders;

use App\Models\FacilityUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FacilityUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacilityUser::create([
            'facility_id' => '1',
            'name' => 'Facility 1',
            'email' => 'facility001@gmail.com ',
            'password' => Hash::make('beesweet'),
            'phone' => '123-456-7890',
        ]);
    }
}
