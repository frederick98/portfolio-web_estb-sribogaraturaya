<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('courses')->insert([
            [
                'name'      => 'Admin Web SRR',
                'email'     => 'admin@sriboga.com',
                'password'  => '$2y$10$qgjtHUb5aOIoDXI7sTcZje94uMy3LoWpJVdkKUzqHby2Wla8v5tA2',
                // 'created_at'=> Carbon::now(),
            ],
        ]);
    }
}
