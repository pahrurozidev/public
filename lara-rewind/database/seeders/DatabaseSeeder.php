<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // user
        // User::factory(5)->create();
        User::create([
            // id = 1
            "name" => "Pahrurozi",
            'username' => "pahrurozi",
            "email" => "pahrurozi17@gmail.com",
            "password" => bcrypt('12345')
        ]);

        User::create([
            // id = 2
            "name" => "Muhammad Zakaria",
            'username' => "muhammad-zakaria",
            "email" => "zakaria@gmail.com",
            "password" => bcrypt('12345')
        ]);

        User::create([
            // id = 3
            "name" => "Titin Yustika",
            'username' => "titin-yustika",
            "email" => "titin@gmail.com",
            "password" => bcrypt('12345')
        ]);


        // category
        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design",
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        // Posts
        // Post::factory(20)->create();
        Post::create([
            "title" => "Lorem ipsum dolor sit amet consectetur.",
            "category_id" => 1,
            "user_id" => 1,
            "slug" => "post-satu",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "eos. Voluptate nihil dolore nobis voluptates harum enim",
            "category_id" => 1,
            "user_id" => 2,
            "slug" => "post-dua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "commodi recusandae impedit est provident",
            "category_id" => 3,
            "user_id" => 2,
            "slug" => "post-tiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " ipsum dolor sit amet consectetur adipisicing elit",
            "category_id" => 1,
            "user_id" => 3,
            "slug" => "post-empat",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " ipsum met consectetur adipisicing elit",
            "category_id" => 3,
            "user_id" => 3,
            "slug" => "post-duapuluh",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "  sit amet consectetur adipisicing elit",
            "category_id" => 3,
            "user_id" => 3,
            "slug" => "post-duasatu",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " ipsum doloconsectetur adipisicing elit",
            "category_id" => 3,
            "user_id" => 3,
            "slug" => "post-duadua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " ipsum  adipisicing elit",
            "category_id" => 3,
            "user_id" => 3,
            "slug" => "post-duatiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "Voluptate nihil dolore nobis voluptates harum enim",
            "category_id" => 3,
            "user_id" => 2,
            "slug" => "post-lima",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "sit amet consectetur pahrurozi-title adipisicing elit. ",
            "category_id" => 3,
            "user_id" => 3,
            "slug" => "post-enam",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit  pahrurozi-body amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);

        Post::create([
            "title" => "dolor sit amet consectetur ",
            "category_id" => 2,
            "user_id" => 1,
            "slug" => "post-tujuh",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " blanditiis, maxime fugit itaque a commodi",
            "category_id" => 2,
            "user_id" => 1,
            "slug" => "post-delapan",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "category_id" => 3,
            "user_id" => 1,
            "slug" => "post-sembilan",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "maxime fugit itaque a commodi recusandae impedit est provident laudantium veritat",
            "category_id" => 3,
            "user_id" => 2,
            "slug" => "post-sepuluh",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!",
            "category_id" => 1,
            "user_id" => 3,
            "slug" => "post-sebelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "m dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis",
            "category_id" => 3,
            "user_id" => 1,
            "slug" => "post-duabelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);

        Post::create([
            "title" => "dolor sit amet consectetur quasi eos. Voluptate nihil",
            "category_id" => 3,
            "user_id" => 2,
            "slug" => "post-tigabelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "i eos. Voluptate nihil dolore blanditiis, maxime fugit itaque a commodi",
            "category_id" => 2,
            "user_id" => 2,
            "slug" => "post-empatbelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => " dolor sit amet consectetur adipisicing elit. Officiis illo",
            "category_id" => 3,
            "user_id" => 2,
            "slug" => "post-limabelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "maxime fugit itaque a commodi recust laudantium veritat",
            "category_id" => 2,
            "user_id" => 2,
            "slug" => "post-enambelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "nt laudantium veritatis nostrum illum minus!",
            "category_id" => 1,
            "user_id" => 1,
            "slug" => "post-tujuhbelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
        Post::create([
            "title" => "sit amet consectetur adipisicinnam quasi eos. Voluptate nihil dolore nobis",
            "category_id" => 2,
            "user_id" => 2,
            "slug" => "post-delapanbelas",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
        modi qui magni quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illo odit, veritatis, eum blanditiis
            modi qui magni
            quae saepe magnam quasi eos. Voluptate nihil dolore nobis voluptates harum enim illo perferendis laborum sit
            blanditiis,
            maxime fugit itaque a commodi recusandae impedit est provident laudantium veritatis nostrum illum minus!
            Accusantium.</p>
        <p>
            molestias optio saepe excepturi iusto exercitationem asperiores praesentium a aliquid? Rerum dolores in commodi
            maxime
            obcaecati id non architecto, ea doloremque, quibusdam error quos placeat eaque cum? Eos adipisci perspiciatis
            voluptates
            at voluptatum odit voluptatem soluta reprehenderit omnis aspernatur! Maiores excepturi nam sint laboriosam ipsa
            adipisci
            nisi ab! Hic, cum ipsum!</p>"
        ]);
    }
}
