<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
	
	public function run() {
		User::create([
			'name' => 'Pete Houston',
			'email' => 'test@gmail.com',
			'password' => Hash::make('test')
		]);

		User::create([
			'name' => 'Richard Marlx',
			'email' => 'test1@gmail.com',
			'password' => Hash::make('test')
		]);
	}
}