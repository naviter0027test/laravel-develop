<?php

use Illuminate\Database\Seeder;

class RmbDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i < 50; ++$i)
            DB::table('rmbs')->insert([
                'money' => rand(0, 5000),
                'no' => "'". str_random(10). "'",
            ]);
    }
}
