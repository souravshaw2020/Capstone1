<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'admin',
            'password'=>Hash::make('admin123'),
            'remember_token'=>Str::random(10),
        ]);
    }
}
