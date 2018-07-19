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
        /*
        DB::table('users')->delete();

        User::create([
            'name' => 'yanagi',
            'email' => 'yanagi@soarcloud.com',
            'password' => bcrypt('password')
        ]);*/
        DB::table('users')->truncate();
  
        DB::table('users')->insert([
            [
            'name' => 'yanagi',
            'email' => 'yanagi@soarcloud.com',
            'password' => Hash::make('yanagi'),
            ],
        ]);
    }
}