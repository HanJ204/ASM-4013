<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;
use Arr;
class insertProducts extends Seeder
{
    public function run(): void
    {
        // $A1 = ['11', '12', '13', '14', '15'];
        $AN = ['Pro', 'Pro Max', 'Plus', 'Mini', ''];
        $SN = ['A14 5G', 'A23 5G', 'A33 5G', 'A34 5G', 'A53 5G', 'A54 5G', 'A73 5G', 'S22', 'S22+', 'S22 Ultra', 'S23', 'S23+', 'S23 Ultra'];
        $HN1 = ['Mate', 'Enjoy', 'Nova', ''];
        $HN2 = ['10', '30', '40', 'P40', '50', 'P60'];
        $HN3 = ['Pro', ''];
        for ($i=0; $i<10; $i++) {
            $HN = Arr::random($HN1). ' ' .Arr::random($HN2). ' ' .Arr::random($HN3);
            
            DB::table('Products')->upsert([[
                'name' => 'Apple'.' '.mt_rand(11, 15).' '.Arr::random($AN),
                'image' => 'Apple'.mt_rand(1, 5).'.png',
                'price' => mt_rand(25000000, 40000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 1
            ],[
                'name' => 'Samsung Galaxy'.' '.Arr::random($SN),
                'image' => 'samsung'.mt_rand(1, 5).'.png',
                'price' => mt_rand(25000000, 40000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 1
            ],[
                'name' => 'Huawei'.' '.$HN,
                'image' => 'samsung'.mt_rand(1, 5).'.png',
                'price' => mt_rand(25000000, 40000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 1
            ],[
                'name' => 'Xiaomi'.' '.Arr::random($SN),
                'image' => 'samsung'.mt_rand(1, 5).'.png',
                'price' => mt_rand(25000000, 40000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 1
            ]
        ], ['name'], ['image', 'price', 'quantity', 'view', 'dateSubmitted', 'idCategory']);
        }
    }
}
