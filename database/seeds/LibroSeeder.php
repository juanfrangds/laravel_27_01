<?php

use Illuminate\Database\Seeder;
// use DB;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->truncate();
        factory(\App\Libro::class, 10)->create();
    }
}
