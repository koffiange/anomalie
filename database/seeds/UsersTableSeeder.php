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
        DB::table('users')->insert([
            'nom' => 'koffi',
            'prenoms' => 'ange',
            'direction' => 'DTI',
            'ministere' => 'MEF',
            'email' => 'anomalie@gmail.com',
            'password' => bcrypt('anomalie'),
        ]);
    }
}
