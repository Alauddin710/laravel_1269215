<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\phone;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = 'Naymur Rahman';
        $user->email = 'naymur@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();

        $user = new User();
        $user->name = 'Kamrul Hasan';
        $user->email = 'kamrul@example.com';
        $user->password = Hash::make('abcd1234');
        $user->remember_token = Str::random(10);
        $user->save();


        $phone = new Phone();
        $phone->user_id = 1;
        $phone->phone = rand(412412313, 4124123131);
        $phone->save();

        $phone = new Phone();
        $phone->user_id = 2;
        $phone->phone = rand(412412313, 4124123131);
        $phone->save();
    }
}
