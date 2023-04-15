<?php

namespace Database\Seeders;

use App\Models\Contact;
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
        // \App\Models\User::factory(10)->create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $i . ' name',
                'email' => $i . ' email'
            ];
        }
        Contact::insert($data);
    }
}