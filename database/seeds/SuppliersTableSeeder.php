<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('suppliers')->delete();
        \DB::table('suppliers')->insert(array(
            0=>
            array(
                'id' => 1,
                'code' => 'SUP00000001',
                'name' =>'{"ar":"علي آدم"}',
                'address' =>'{"ar":"امدرمان"}',
                'country' =>'{"ar":"السودان"}',
                'city' =>'{"ar":"الخرطوم"}',
                'fax' =>'121254154',
                'phone' =>'09154458888',
                'email' =>'customer@gmail.com',
                'facebook' =>'customer.facebook',
                'note' =>'لا يوجد',
                'created_at' => '2018-07-13 02:23:10',
                'updated_at' => '2018-07-13 02:23:10',
            ),
            1=>
            array(
                'id' => 2,
                'code' => 'SUP00000002',
                'name' =>'{"ar":"كمال صالح"}',
                'address' =>'{"ar":"امدرمان السوق الشعبي"}',
                'country' =>'{"ar":"السودان"}',
                'city' =>'{"ar":"الخرطوم"}',
                'fax' =>'121254154',
                'phone' =>'09154458888',
                'email' =>'client@gmail.com',
                'facebook' =>'client.facebook',
                'note' =>'لا يوجد',
                'created_at' => '2018-07-13 02:23:10',
                'updated_at' => '2018-07-13 02:23:10',
            ),
        ));

    }
}
