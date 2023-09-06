<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            [
                'title' => '課題',
                'body' => 'task管理アプリです',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '盛岡',
                'body' => "9/5~7まで盛岡で研修です",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
