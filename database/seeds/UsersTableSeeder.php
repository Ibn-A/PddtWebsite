<?php

use App\User;
use Carbon\Carbon;
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
        User::create([ 'name' => 'max',
                'email' => 'max@gmx.com',
                'password' => bcrypt('a'),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(10),
            ]);
    }
}
