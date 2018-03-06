<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);

        factory(App\User::class, 50)->create();
        factory(App\Muldev\Cms\Task::class, 30)->create();
        factory(App\Muldev\Cms\Post::class, 40)->create();
    }
}
