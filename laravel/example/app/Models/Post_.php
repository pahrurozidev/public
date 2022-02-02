<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class Post extends Model
{  
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Pahrurozi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quo quis exercitationem rem soluta libero, eligendi ad fuga vel cupiditate quia nihil expedita velit omnis ut numquam nobis excepturi unde ipsum! Eligendi ducimus magni dolorum sapiente dicta dolore, aliquid veritatis illo nam architecto impedit neque nisi optio nesciunt omnis adipisci assumenda reiciendis qui amet ratione natus iusto accusamus earum! Harum dolor illum facilis fuga saepe dignissimos eveniet ab officiis? Voluptates minima tenetur esse quas nemo? Ratione consectetur at sapiente nesciunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Zakaria",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio id iusto iste nulla ad maxime fuga alias repudiandae, corrupti eveniet? Explicabo architecto ut, est aliquam incidunt quo natus dolorum ducimus magnam ratione numquam quam, dolore nostrum laboriosam impedit odio asperiores vero libero tempora minima dicta neque unde aliquid! Ratione nobis nam vitae excepturi perferendis repudiandae quas praesentium enim corrupti nulla. Doloremque beatae aliquid fugiat nostrum quo vitae, odio recusandae et aut quia sunt soluta impedit magnam quod, culpa facere similique magni porro quaerat iste, minima harum obcaecati nobis natus! Velit perferendis assumenda iste ipsum id sapiente corporis, quis molestiae! Velit."
        ]
    ];

    public static function showAll() {
        return collect(static::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::showAll();
        return $posts->firstWhere('slug', $slug);
    }
}
