<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '082112345678',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'phone' => '081384263065',
            'role' => 'user',
            'password' => bcrypt('user'),
        ]);
    }
}
