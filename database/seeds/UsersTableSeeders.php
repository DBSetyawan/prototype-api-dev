<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'daniel',
                'email' => 'daniel@gmail.com',
                'password' => Hash::make('daniels'),
            ],
            [
                'name' => 'Budi',
                'email' => 'Budi@gmail.com',
                'password' => Hash::make('budis'),
            ],
            [
                'name' => 'Setyawan',
                'email' => 'Setyawan@gmail.com',
                'password' => Hash::make('setyawans'),
            ],
        ]);
    }
}
