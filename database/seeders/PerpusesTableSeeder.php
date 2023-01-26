<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerpusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Perpus = new Perpus;
        $Perpus->name = "title";
        $Perpus->name = "writer";
        $Perpus->name = "publisher";
        $Perpus->name = "no_isbn";
        $Perpus->name = "category_book";
        $Perpus->name = "synopsis";
        $Perpus->name = "cover_book";
        $Perpus->save();
    }
}
