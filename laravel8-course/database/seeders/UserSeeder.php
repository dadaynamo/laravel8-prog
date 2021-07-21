<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 30; $i++) {

            $name=Str::random(10);
            $sql = 'insert into users (name,email,password,created_at,email_verified_at) values (?,?,?,?,?)';
            DB::table('users')->insert([
                'name' => $name,
                'email' => $name.'@gmail.com',
                'password' => \Hash::make('mattia'),
                'created_at' => \Carbon\Carbon::now(),
                'email_verified_at' => \Carbon\Carbon::now()
            ]);
            /*
            DB::insert($sql ,
                [
                    $name=Str::random(10),
                    $name.'@gmail.com',
                    \Hash::make('mattia'),
                    \Carbon\Carbon::now(),
                    \Carbon\Carbon::now()
                ]
            );*/

        }

        }

}
