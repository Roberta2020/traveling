<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PaperformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paperforms')->insert([
            'title' => 'Pirma Bandomoji forma',
            'url' => 'bandomoji-forma',
            'paperform_code' => 'bandomoji-forma145',
            'page' => '{99dj0}',
            'name' => '{34i2c}',
            'phone' => '{n7uk}',
            'email' => '{fj42e}',
            'request' => '{2svnb}, {q71f}, {ellfc}',
        ]);
    }
}
