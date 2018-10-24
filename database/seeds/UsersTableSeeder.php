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
        DB::table('users')->insert ([
        	'name'=> 'admin',
        	'email'=> 'admin@gmail.com',
        	'password'=> Hash::make('123123'),
        	'telefone'=> '(75) 92134-1234',
        	'cpf'=> '92828376182',
        	'rg'=> '1239402386'
        ]);
    }
}
