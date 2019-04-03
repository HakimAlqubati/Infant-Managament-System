<?php

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
     $this->call(App\User::class,50);
     $this->call(App\Center::class,5);

     $this->call(App\Children::class,50);

    }
}
