<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile->id = 1;
        $profile->user_id = 1;
        $profile->title = 'Desarrollador';
        $profile->biography = 'Soy el desarrollador santiago';
        $profile->web_site = 'www.soyUnCspon.com.uy';
        $profile->save();
    }
}
