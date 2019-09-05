<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Napa Extra',
                'price'=>'300',
                'quantity'=>'10',
                'stock'=>1,
                'details'=>'For Fever',
                'image'=>'615897451.jpeg',
                'company_id'=>1,
                'category_id'=>1
            ],
            [
                'name'=>'Omidon',
                'price'=>'200',
                'quantity'=>'10',
                'stock'=>0,
                'details'=>'For Bhowmik',
                'image'=>'355329314.jpeg',
                'company_id'=>2,
                'category_id'=>2
            ]
        ]);
    }
}
