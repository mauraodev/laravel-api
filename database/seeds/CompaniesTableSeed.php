<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Company::create([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'website' => 'http://www.google.com.br/',
            'logo' => 'teste'
        ]);
    }
}
