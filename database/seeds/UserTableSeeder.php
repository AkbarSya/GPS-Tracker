<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new User;
        // $user->name = 'akbar';
        // $user->email = 'akbar.syabani@gmail.com';
        // $user->password = bcrypt('akbar155');

        \DB::table('users')->insert([
        	'name'	=> 'admin',
        	'email'	=> 'akbar.syabani@gmail.com',
        	'password' => bcrypt('akbar155')
        ]);

         \DB::table('users')->insert([
            'name'  => 'Driver',
            'email' => 'driver.sutasa@gmail.com',
            'password' => bcrypt('driver')
        ]);
    }
}
