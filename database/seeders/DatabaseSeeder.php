<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Epigra\TrGeoZones\Database\Seeders\TrGeoZonesDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TrGeoZonesDatabaseSeeder::class);
        User::create([
            'name' => 'Guney Dirim',
            'email' => 'guneydirim@gmail.com',
            'type' => 'admin',
            'password' => Hash::make('75787578')
        ]);
    }
}
