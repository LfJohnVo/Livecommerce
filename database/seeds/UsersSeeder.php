<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('Administrador1'),
        ]);
    }
}
