<?php

use App\User;
use App\Vote;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Vote::truncate();

        // flushEventListeners evita el lanzamiento de eventos a la hora de ejecutar los Sedders
        User::flushEventListeners();
        Vote::flushEventListeners();

        factory(User::class, 50)->create()->each(function ($user){
            factory(Vote::class, 1)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
