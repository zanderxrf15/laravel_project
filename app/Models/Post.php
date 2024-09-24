<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
   public static function all()   
   {
    return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Franshel Tranetha',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Sit sed vitae deleniti maiores dolores, temporibus quidem voluptates, illum magnam eius sequi totam possimus! 
                Corporis, laudantium voluptates facere repellendus voluptatibus voluptatem!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Franshel Tranetha',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Minima quia velit error accusamus tempore, tempora voluptates consequatur, doloremque in deserunt nostrum eum natus recusandae fugiat inventore? 
                Voluptatibus tempore deleniti nostrum.'
        ]
        ];
   } 

  public static function find($slug): array
  {
    //return Arr::first(static::all(), function ($post) use ($slug){
    //    return $post['slug'] == $slug;
    //});

    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if(! $post){
        abort(404);
    }
    
    return $post;
}
}