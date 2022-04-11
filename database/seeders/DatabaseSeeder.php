<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Riska Apriandewa',
            'username' => 'apriandewa',
            'email' => 'apriandewa88@gmail.com',
            'password' => bcrypt('Dewa2022')
        ]);

        User::create([
            'name' => 'Denanda Fattah',
            'username' => 'nadath12',
            'email' => 'nadath12@gmail.com',
            'password' => bcrypt('Nadath2022')
        ]);

        Category::create([
            'name' => 'Bakohumas Inhu',
            'slug' => 'bakohumas-inhu',

        ]);

        Category::create([
            'name' => 'PPID Inhu',
            'slug' => 'ppid-inhu',

        ]);

        Category::create([
            'name' => 'Radio Swai',
            'slug' => 'radio-swai',

        ]);

        Category::create([
            'name' => 'Persandian',
            'slug' => 'persandian',

        ]);

        Blog::create([
            'title' => 'Bakohumas Inhu Judul Pertama',
            'slug' => 'bakohumas-inhu-judul-pertama',
            'excerpt' => 'Jadi Ceritanya Bakohumas itu akan melakukan kegitan pertemuan forum bakohumas',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo maiores unde laudantium quidem nobis inventore commodi rerum iste, maxime, iusto asperiores porro, dolor exercitationem delectus autem. Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse. Quia, vel?</p><p>Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse.</p>',
            'category_id' => 1,
            'user_id' => 1

        ]);


        Blog::create([
            'title' => 'PPID Inhu Selalu Juara',
            'slug' => 'ppid-inhu-selalu-juara',
            'excerpt' => 'Jadi Ceritanya PPID Inhu itu selalu juara',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo maiores unde laudantium quidem nobis inventore commodi rerum iste, maxime, iusto asperiores porro, dolor exercitationem delectus autem. Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse. Quia, vel?</p><p>Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse.</p>',
            'category_id' => 2,
            'user_id' => 1

        ]);

        Blog::create([
            'title' => 'Bakohumas Inhu Judul Kedua',
            'slug' => 'bakohumas-inhu-judul-kedua',
            'excerpt' => 'Jadi Ceritanya Bakohumas itu akan melakukan kegitan pertemuan forum bakohumas',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo maiores unde laudantium quidem nobis inventore commodi rerum iste, maxime, iusto asperiores porro, dolor exercitationem delectus autem. Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse. Quia, vel?</p><p>Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse.</p>',
            'category_id' => 1,
            'user_id' => 2

        ]);

        Blog::create([
            'title' => 'Talkshow di Radio Swai FM',
            'slug' => 'talkshow-di-radio-swai-fm',
            'excerpt' => 'Jadi Ceritanya kita itu pengen talkshow di radio',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo maiores unde laudantium quidem nobis inventore commodi rerum iste, maxime, iusto asperiores porro, dolor exercitationem delectus autem. Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse. Quia, vel?</p><p>Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse.</p>',
            'category_id' => 3,
            'user_id' => 1

        ]);

        Blog::create([
            'title' => 'PPID Inhu Kembali Raih Juara',
            'slug' => 'ppid-inhu-kembali-raih-juara',
            'excerpt' => 'Jadi Ceritanya PPID Inhu itu selalu juara',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo maiores unde laudantium quidem nobis inventore commodi rerum iste, maxime, iusto asperiores porro, dolor exercitationem delectus autem. Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse. Quia, vel?</p><p>Ex, expedita fugit! Ipsum similique quia hic. Reiciendis vero rerum recusandae quis mollitia ea earum, beatae ut ratione quas nulla corrupti quos magni animi! Mollitia, maiores excepturi temporibus ipsum doloribus dolor quod explicabo, cumque corporis odit consectetur at aut recusandae iste labore quo commodi? Veniam, voluptatum! Saepe temporibus in officia quisquam sequi eaque inventore laudantium hic et dolor molestias impedit fugit debitis mollitia, recusandae soluta? Vel, dolore exercitationem recusandae corrupti vitae explicabo ex molestias neque aliquid qui optio quae praesentium, atque odio non aperiam quia voluptatem quidem illum ducimus quibusdam mollitia esse.</p>',
            'category_id' => 2,
            'user_id' => 2

        ]);
    }
}
