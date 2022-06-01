<?php

use Illuminate\Database\Seeder;

use App\Models\Comic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComicsSeeder::class);
    }
}
