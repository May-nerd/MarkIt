<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
                   'fname' => "Maynard",
                   'lname' => "Vargas",
                   'town' => "Kalibo",
                   'province' => "Aklan",
                   'email' => "vargasmaynard@gmail.com",
                   'username' => "maynerd",
                   'password' => bcrypt("secret"),
                   'bio' => "Programmer by the day.",
                   'profilepicture' => "fd01343d8cc267c73907fc55b6198dab.jpeg",
                   'profileextension' => "jpeg"
        ]);
        factory(App\User::class, 100)->create();
        factory(App\Auction::class, 50)->create();
        factory(App\Mark::class, 500)->create();
    }
}
