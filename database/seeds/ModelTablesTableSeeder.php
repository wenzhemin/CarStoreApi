<?php

use Illuminate\Database\Seeder;

class ModelTablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ModelTable::class, 6);
    }
}
