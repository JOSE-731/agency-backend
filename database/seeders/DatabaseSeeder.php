<?php

namespace Database\Seeders;
use App\Models\Contact;
use App\Models\About;

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
        About::factory(20)->create();
        Contact::factory(20)->create();
    }
}
