<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Ken Vilar',
            'email' => 'kenvilar@gmail.com',
        ]);
    
        factory(User::class)->create([
            'name' => 'Ken Vilar 2',
            'email' => 'kenvilar@example.com',
        ]);
    }
}
