<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        // Admin::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // or

        $admins = new User();
        $admins->name = 'Super Admin';
        $admins->email = 'admin@gmail.com';
        $admins->password = bcrypt('password');
        $admins->save();
    }
}
