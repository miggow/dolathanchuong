<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->delete();

        DB::table('payment_methods')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => 'COD',
            ),
            1 =>
            array(
                'id' => '2',
                'name' => 'VNPay',
            ),
            2 =>
            array(
                'id' => '3',
                'name' => 'OnePay',
            ),
            3 =>
            array(
                'id' => '4',
                'name' => 'Google Pay',
            ),
            4 =>
            array(
                'id' => '5',
                'name' => 'Momo',
            ),
        ));
    }
}
