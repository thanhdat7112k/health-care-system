<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->truncate();
        DB::table('oauth_clients')->insert([
            'id' => 1,
            'name' => 'Laravel Personal Access Client',
            'secret' => 'sIjFi97vWpt0BVTryd87IpzKRn5VdEdIdYsf5XLg',
            'redirect' => 'http://localhost',
            'personal_access_client' => 1,
            'password_client' => 0,
            'revoked' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
        DB::table('oauth_clients')->insert([
            'id' => 2,
            'name' => 'Laravel Password Grant Client',
            'secret' => 'cQv7lxnUM2NoHLI4rTkGERkKKDdmCqvdH6J0VntV',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
