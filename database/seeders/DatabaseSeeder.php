<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;
use Arr;
use Nette\Utils\Random;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi'];
        $lot = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim', ''];
        $ten = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Hảo', 'Thanh', 'Tú', 'Hậu', 'Phương'];
        for ($i=0; $i<50; $i++) {
            $ht = Arr::Random($ho). ' ' .Arr::random($lot). ' ' .Arr::random($ten);
            DB::table('users')->insert([
                'name'=>$ht,
                'email'=>Str::random(5).'@gmail.com',
                'password'=>bcrypt('hehe'),
                'phone'=> '03'.mt_rand(00000000, 99999999)
            ]);
        }
    }
}
