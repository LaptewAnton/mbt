<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Дорога',
        ]);
        DB::table('categories')->insert([
            'name' => 'Дом',
        ]);
        DB::table('categories')->insert([
            'name' => 'Парк, сад, бульвар, сквер',
        ]);
        DB::table('categories')->insert([
            'name' => 'Улица',
        ]);
        DB::table('categories')->insert([
            'name' => 'Общественный транспорт',
        ]);
        DB::table('categories')->insert([
            'name' => 'Строительная площадка',
        ]);
        DB::table('categories')->insert([
            'name' => 'Кладбище',
        ]);
        DB::table('categories')->insert([
            'name' => 'Двор',
        ]);
        DB::table('categories')->insert([
            'name' => 'Рекламные или информационные конструкции',
        ]);
    }
}
