<?php

use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wtc\Vacancy::class, 5)->create();
    }
}
