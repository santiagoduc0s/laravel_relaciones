<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = new Address();
        $address->user_id = 1;
        $address->street = 'La Chin chin china';
        $address->port_number = 1234;
        $address->save();
    }
}
