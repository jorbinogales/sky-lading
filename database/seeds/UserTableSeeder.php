<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();
        
        factory(App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@tconecta.com'
        ]);
    }
}
