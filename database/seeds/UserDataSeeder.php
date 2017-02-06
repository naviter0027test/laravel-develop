<?php

use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i < 50;++$i)
            DB::table('user')->insert([
                'user' => "'". str_random(10). "'",
                'name' => "'". str_random(30). "'",
                'pass' => "'". bcrypt('secret'). "'",
                'score' => rand(0, 100),
            ]);
    }
}
