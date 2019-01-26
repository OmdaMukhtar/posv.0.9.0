<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name'=>'{"ar":"admin"}',
                'email'=>'admin@admin.com',
                'password' => '$2y$10$hWhJmthPjwUq9riUg7Q9Ju8ODUFcg5AHf9eTNAYNT64emfr.yhvpK',
                'email_verified_at'=> '2018-07-13 02:23:10',
                'created_at' => '2018-07-12 02:23:10',
                'updated_at' => '2018-07-12 02:23:10',
            ),
            1 =>
            array(
                'id' => 2,
                'name'=>'{"ar":"omda"}',
                'email'=>'omda@gmail.com',
                'password' => '$2y$10$hWhJmthPjwUq9riUg7Q9Ju8ODUFcg5AHf9eTNAYNT64emfr.yhvpK',
                'email_verified_at'=> '2018-07-13 02:23:10',
                'created_at' => '2018-07-12 02:23:10',
                'updated_at' => '2018-07-12 02:23:10',
            ),
            2 =>
            array(
                'id' => 3,
                'name'=>'{"ar":"testing"}',
                'email'=>'test@gmail.com',
                'password' => '$2y$10$hWhJmthPjwUq9riUg7Q9Ju8ODUFcg5AHf9eTNAYNT64emfr.yhvpK',
                'email_verified_at'=> '2018-07-13 02:23:10',
                'created_at' => '2018-07-12 02:23:10',
                'updated_at' => '2018-07-12 02:23:10',
            ),
        ));

    }
}
