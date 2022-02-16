<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=User::create([
        	'name' => 'Super Admin',
        	'email' =>'admin@gmail.com',
        	'password' =>Hash::make('123456789'),
        ]);
        $admin->assignRole('super admin');

        $manager=User::create([
            'name' => 'Manager',
            'email' =>'manager@gmail.com',
            'password' =>Hash::make('123456789'),
        ]);
        $manager->assignRole('manager');

        $hninei=User::create([
            'name' => 'HninEi',
            'email' =>'hninei@gmail.com',
            'password' =>Hash::make('123456789'),
        ]);
        $hninei->assignRole('reservation');
    }
}
