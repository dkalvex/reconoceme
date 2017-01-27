<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

	public function run()
	{
		$users = [
		['name' => 'Geovanny Alonso', 'email' => 'geovannyalonso@gmail.com', 'password' => \Hash::make('Ludum2015'), 'active' => 1,'boss'=> null,'team'=> null,'role'=>null,'portal'=>null],
		['first_name' => 'Eydi Ramírez', 'email' => 'eydiramirez@gmail.com', 'password' => \Hash::make('Ludum2015'), 'active' => 1,'boss'=> null,'team'=> null,'role'=>null,'portal'=>null],
		['first_name' => 'Daniel Galvez', 'email' => 'dkalvex@gmail.com', 'password' => \Hash::make('Ludum2015'), 'active' => 1,'boss'=> null,'team'=> null,'role'=>null,'portal'=>null]
		];

		\DB::table('users')->insert($users);
	}
}
