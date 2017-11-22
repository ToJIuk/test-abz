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
        //factory(App\Employee::class)->create(); //1st level
        //factory(App\Employee::class, 10)->create(); // 2nd level
        //factory(App\Employee::class, 150)->create(); // 3rd level
        //factory(App\Employee::class, 2250)->create(); // 4th level
        factory(App\Employee::class, 49500)->create(); // 5th level

    }
}
