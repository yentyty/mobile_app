<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['role_id' => 1, 'name' => 'Admin'],
            ['role_id' => 2, 'name' => 'Sale'],
            ['role_id'=> 3, 'name' => 'customer'],
            ['role_id'=> 4, 'name' => 'writer '],
        ]);
    }
}
