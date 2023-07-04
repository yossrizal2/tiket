<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create(array(
            'name' => 'Yossrizal Admin',
            'email' => 'yossrizalr@gmail.com',
            'password' => bcrypt('123456')
        ));

        // \App\Models\Portfolio::create(array(
        //     'user_id' => 11,
        //     'title' => 'Yossrizal Ramadhan',
        //     'description' => 'saya adlaah awkdakdkslfm al mlkfma lklf',
        //     'status' => 'Open Work'
        // ));
    }
}
