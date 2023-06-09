<?php

namespace App\Http\Controllers;
//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use Illuminate\Http\Request;
use App\Models\Post;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
class PostController extends Controller
{
    Public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5)]);
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入
    }
}
