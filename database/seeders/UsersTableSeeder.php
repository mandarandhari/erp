<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'employee_id'   => 'E0001',
            'first_name'    => 'Mandar',
            'middle_name'   => 'Shashikant',
            'last_name'     => 'Andhari',
            'phone'         => '9234248839',
            'email'         => 'mandar.andhari@gmail.com',
            'role'          => 'superadmin',
            'password'      => Hash::make('admin@123'),
            'designation'   => 'Director',
            'date_of_birth' => Carbon::parse('31-03-1996'),
            'joining_date'  => Carbon::parse('02-11-2020')
        ]);
    }
}
