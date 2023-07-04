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
            'email' => 'admin@email.com',
            'password' => bcrypt('123456')
        ));

        \App\Models\Ticket::create(array(
            'unique_id' => strtoupper(substr(md5(microtime()), 0, 8)),
            'id_card_number' => '9982100160346',
            'name' => 'King Khalid',
            'address' => 'Saudi Arabia',
            'status' => 0
        ));

        // \App\Models\Portfolio::create(array(
        //     'user_id' => 11,
        //     'title' => 'Yossrizal Ramadhan',
        //     'description' => 'saya adlaah awkdakdkslfm al mlkfma lklf',
        //     'status' => 'Open Work'
        // ));
    }
}
