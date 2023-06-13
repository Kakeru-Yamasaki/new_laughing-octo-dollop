<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Datebase\Factories\PostFactory;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 複数のデータを一括挿入するとき
         * モデル名::factory()->count(作成するデータの数)->create();
         * Modelのuse宣言も忘れずに
         */
        
        Post::factory()->count(10)->create();
        
        
        /**
         *個別にデータベースに追加する場合
         * DB::table('posts')->insert([
         *     'title' => '命名の心得',
         *     'body' => '命名はデータを基準に考える',
         *     'created_at' => new DateTime(),
         *     'updated_at' => new DateTime(),
         * ]);
         */
        
    }
}
