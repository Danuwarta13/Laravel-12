<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // protected $table = 'blog_posts';


    // public static function all()
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'judul-artikel-1',
    //             'judul' => 'Judul Artikel 1',
    //             'penulis' => 'Danu Wartas',
    //             'artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi porro minima, saepe, voluptatem reprehenderit enim assumenda dignissimos earum voluptate, exercitationem deleniti. Aspernatur ipsam iusto quod rerum recusandae eligendi, facere veniam!'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'judul-artikel-2',
    //             'judul' => 'Judul Artikel 2',
    //             'penulis' => 'Danu Wartas',
    //             'artikel' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum delectus voluptas, ratione optio accusamus recusandae. Tenetur illo velit porro, quas fuga, ipsam repudiandae, placeat quae quaerat voluptates eveniet. Atque, libero?'
    //         ],
    //     ];
    // }

    // public static function find($slug)
    // {
    //     // return Arr::first(static::all(), function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });

    //     return Arr::first(static::all(), fn($test) => $test['slug'] ==  $slug) ?? abort(404);
    // }
}