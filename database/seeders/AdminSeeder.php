<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();

        // Admin::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // or

        $admins = new Admin;
        $admins->name = 'Admin';
        $admins->email = 'admin@gmail.com';
        $admins->password = bcrypt('password');
        $admins->save();
    }
}
