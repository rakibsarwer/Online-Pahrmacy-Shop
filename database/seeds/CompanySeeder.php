<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            [
                'name'=>'Baximco Ltd',
                'details'=>'Good Company'
            ],
            [
                'name'=>'ACI Ltd',
                'details'=>'Good Company'
            ],
            [
                'name'=>'Square Ltd',
                'details'=>'Good Company'
            ],
            
        ]);
    }
}
