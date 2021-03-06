<?php

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
        $this->call(UsersSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(TagsSeeder::class);
    }
}
