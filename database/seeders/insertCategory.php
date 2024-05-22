<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class insertCategory extends Seeder
{
    public function run(): void
    {
        DB::table('category')->insert([
            ['name'=>'Apple', 'thuTu'=>'1'],
            ['name'=>'Sam Sung', 'thuTu'=>'2'],
            ['name'=>'Huawei', 'thuTu'=>'3'],
            ['name'=>'Xiaomi', 'thuTu'=>'4'],
            ['name'=>'Oppo', 'thuTu'=>'5'],
            ['name'=>'Vivo', 'thuTu'=>'6'],
            ['name'=>'Motorola', 'thuTu'=>'7']
        ]);
    }
}
