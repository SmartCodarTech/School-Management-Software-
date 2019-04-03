<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'eliknana45@gmail.com',
            'password' => bcrypt('policeman2019'),
            'role' => 'master',
            'active' => 1,
            'verified' => 1,
        ]);
        factory(App\User::class, 200)->create();
    }
}
