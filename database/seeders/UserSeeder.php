<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '鈴木たろう',
                'email' => 's.tarou@example.com',
                'password' => 'password123',
                'savings' => 10000000
            ],
            [
                'name' => '山田たろう',
                'email' => 'y.tarou@example.com',
                'password' => 'password456',
                'savings' => 68000000
            ],
            [
                'name' => '佐藤じろう',
                'email' => 's.jirou@example.com',
                'password' => 'password789',
                'savings' => 55000000
            ],
            [
                'name' => '田中さくら',
                'email' => 't.sakura@example.com',
                'password' => 'password101',
                'savings' => 23000000
            ],
            [
                'name' => '木村ひろし',
                'email' => 'k.hiroshi@example.com',
                'password' => 'password202',
                'savings' => 12000000
            ],
            [
                'name' => '高橋まい',
                'email' => 't.mai@example.com',
                'password' => 'password303',
                'savings' => 87000000
            ],
            [
                'name' => '伊藤ゆう',
                'email' => 'i.yuu@example.com',
                'password' => 'password404',
                'savings' => 45000000
            ],
            [
                'name' => '中村ひとし',
                'email' => 'n.hitoshi@example.com',
                'password' => 'password505',
                'savings' => 67000000
            ],
            [
                'name' => '渡辺みほ',
                'email' => 'w.miho@example.com',
                'password' => 'password606',
                'savings' => 33000000
            ],
            [
                'name' => '橋本ゆうき',
                'email' => 'h.yuuki@example.com',
                'password' => 'password707',
                'savings' => 29000000
            ],
            [
                'name' => '小林あきら',
                'email' => 'k.akira@example.com',
                'password' => 'password808',
                'savings' => 41000000
            ],
            [
                'name' => '森田けんじ',
                'email' => 'm.kenji@example.com',
                'password' => 'password909',
                'savings' => 56000000
            ],
            [
                'name' => '岩崎まこと',
                'email' => 'i.makoto@example.com',
                'password' => 'password1010',
                'savings' => 70000000
            ],
            [
                'name' => '宮崎さとし',
                'email' => 'm.satoshi@example.com',
                'password' => 'password1111',
                'savings' => 38000000
            ],
            [
                'name' => '竹田ゆり',
                'email' => 't.yuri@example.com',
                'password' => 'password1212',
                'savings' => 29000000
            ],
            [
                'name' => '福田あや',
                'email' => 'f.aya@example.com',
                'password' => 'password1313',
                'savings' => 34000000
            ],
            [
                'name' => '長谷川ひろし',
                'email' => 'h.hiroshi@example.com',
                'password' => 'password1414',
                'savings' => 45000000
            ],
            [
                'name' => '村上ひかり',
                'email' => 'm.hikari@example.com',
                'password' => 'password1515',
                'savings' => 22000000
            ],
            [
                'name' => '岡田しんいち',
                'email' => 'o.shinichi@example.com',
                'password' => 'password1616',
                'savings' => 49000000
            ],
            [
                'name' => '田村けいこ',
                'email' => 't.keiko@example.com',
                'password' => 'password1717',
                'savings' => 62000000
            ],
            [
                'name' => '西村こうた',
                'email' => 'n.kouta@example.com',
                'password' => 'password1818',
                'savings' => 27000000
            ],
            [
                'name' => '中西まゆ',
                'email' => 'n.mayu@example.com',
                'password' => 'password1919',
                'savings' => 36000000
            ],
            [
                'name' => '近藤ゆうじ',
                'email' => 'k.yuuji@example.com',
                'password' => 'password2020',
                'savings' => 54000000
            ],
        ]);
    }
}
