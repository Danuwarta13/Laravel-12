<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,);
    }


    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas(
                'category',
                fn(Builder $query) =>
                $query->where('slug', $category)
            );
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas(
                'author',
                fn(Builder $query) =>
                $query->where('username', $author)
            );
        });
    }



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