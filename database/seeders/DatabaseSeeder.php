<?php

namespace Database\Seeders;
use App\Models\About;
use App\Models\Contact;
use App\Models\Portafolio;
use App\Models\Services;
use App\Models\Team;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        About::factory(30)->create();
        Contact::factory(40)->create();
        Portafolio::factory(30)->create();
        Services::factory(10)->create();
        Team::factory(20)->create();
    }
}
