<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        $Customers = array (
            array('name' => 'محمد حسين','mobile' => '877464537','address'=>'بيت حانون','amount'=>300),
            array('name' => 'محمد المصري','mobile' => '323423423','address'=>'بيت حانون','amount'=>233),
            array('name' => 'علي حمد','mobile' => '356356','address'=>'بيت حانون','amount'=>55),
            array('name' => 'حسين الشمباري','mobile' => '363563','address'=>'بيت حانون','amount'=>122),
            array('name' => 'محمود المصري','mobile' => '346356','address'=>'بيت حانون','amount'=>4454),
            array('name' => 'شريف نعيم','mobile' => '346356','address'=>'بيت حانون','amount'=>3434),
            array('name' => 'شادي شبات','mobile' => '6786878','address'=>'بيت حانون','amount'=>5634),
            array('name' => 'حسن نعيم','mobile' => '6785745','address'=>'بيت حانون','amount'=>55),
            array('name' => 'محمود عاشور','mobile' => '4856756','address'=>'بيت حانون','amount'=>66),
            array('name' => 'احمد المصري','mobile' => '468565646','address'=>'بيت حانون','amount'=>77),
        );
        DB::table('customers')->insert($Customers);

    }
}
