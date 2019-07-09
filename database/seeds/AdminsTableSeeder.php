<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role_type' => 2,
            'ins_id' => 1,
        ]);
    }
}
