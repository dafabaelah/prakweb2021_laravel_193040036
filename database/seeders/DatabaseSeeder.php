<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Daffa Akhdan Fadhillah',
        //     'email' => '193040036.daffa@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'David Dalil S',
        //     'email' => '19304002.david@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam earum voluptate odio tempore quaerat, quam id illo omnis dolor! Vitae animi, repudiandae necessitatibus nostrum dolor autem suscipit non. Eius quasi quae praesentium dolores inventore quia, maiores ducimus ratione optio, debitis aperiam quaerat aliquam velit cumque cupiditate minus dolor enim alias incidunt. Ducimus nihil quae nesciunt beatae quam laborum suscipit adipisci qui tempore, enim, fugiat minus. A autem, eius repudiandae doloribus ex dolorem, minus cumque sequi maxime officia corporis recusandae. Consequuntur, quos autem soluta reiciendis optio eius recusandae veniam dignissimos sunt. Eligendi iusto qui optio dolores sequi laudantium, non inventore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam earum voluptate odio tempore quaerat, quam id illo omnis dolor! Vitae animi, repudiandae necessitatibus nostrum dolor autem suscipit non. Eius quasi quae praesentium dolores inventore quia, maiores ducimus ratione optio, debitis aperiam quaerat aliquam velit cumque cupiditate minus dolor enim alias incidunt. Ducimus nihil quae nesciunt beatae quam laborum suscipit adipisci qui tempore, enim, fugiat minus. A autem, eius repudiandae doloribus ex dolorem, minus cumque sequi maxime officia corporis recusandae. Consequuntur, quos autem soluta reiciendis optio eius recusandae veniam dignissimos sunt. Eligendi iusto qui optio dolores sequi laudantium, non inventore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam earum voluptate odio tempore quaerat, quam id illo omnis dolor! Vitae animi, repudiandae necessitatibus nostrum dolor autem suscipit non. Eius quasi quae praesentium dolores inventore quia, maiores ducimus ratione optio, debitis aperiam quaerat aliquam velit cumque cupiditate minus dolor enim alias incidunt. Ducimus nihil quae nesciunt beatae quam laborum suscipit adipisci qui tempore, enim, fugiat minus. A autem, eius repudiandae doloribus ex dolorem, minus cumque sequi maxime officia corporis recusandae. Consequuntur, quos autem soluta reiciendis optio eius recusandae veniam dignissimos sunt. Eligendi iusto qui optio dolores sequi laudantium, non inventore?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore totam earum voluptate odio tempore quaerat, quam id illo omnis dolor! Vitae animi, repudiandae necessitatibus nostrum dolor autem suscipit non. Eius quasi quae praesentium dolores inventore quia, maiores ducimus ratione optio, debitis aperiam quaerat aliquam velit cumque cupiditate minus dolor enim alias incidunt. Ducimus nihil quae nesciunt beatae quam laborum suscipit adipisci qui tempore, enim, fugiat minus. A autem, eius repudiandae doloribus ex dolorem, minus cumque sequi maxime officia corporis recusandae. Consequuntur, quos autem soluta reiciendis optio eius recusandae veniam dignissimos sunt. Eligendi iusto qui optio dolores sequi laudantium, non inventore?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
