<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthPersonalAccessClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_personal_access_clients')->truncate();
        DB::table('oauth_personal_access_clients')->insert([
            'id' => 1,
            'client_id' => 1,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
