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
                    'profilepicture' => "random.png",
                    'profileextension' => "png"
        ]);
        factory(App\User::class, 100)->create();
    }
}
