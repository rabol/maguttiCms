<?php

use Illuminate\Database\Seeder;

class ArticleTranslationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('article_translations')->delete();
        
        \DB::table('article_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'article_id' => 1,
                'locale' => 'it',
                'slug' => 'home',
                'menu_title' => 'Home',
                'title' => 'Home',
                'subtitle' => 'MaguttiCms',
                'intro' => NULL,
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat maximus purus, sit amet congue nulla maximus quis. Nam sit amet massa sed ante rhoncus vehicula. Nam nec metus eu lorem porttitor suscipit. In at mi sit amet felis tincidunt lobortis ac quis nulla. Morbi condimentum eros vel felis iaculis facilisis. Nam at elit a odio elementum fringilla a vel magna. Vestibulum varius bibendum lectus, sed cursus leo consectetur a. Duis venenatis hendrerit enim, vitae tincidunt quam. Phasellus sollicitudin lobortis turpis, quis mollis purus porttitor sit amet.</p>',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '0',
                'created_at' => '2016-07-04 07:53:04',
                'updated_at' => '2017-08-01 15:12:25',
            ),
            1 => 
            array (
                'id' => 2,
                'article_id' => 1,
                'locale' => 'en',
                'slug' => 'home',
                'menu_title' => 'Home',
                'title' => 'Home',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:53:04',
                'updated_at' => '2017-08-01 15:52:32',
            ),
            2 => 
            array (
                'id' => 3,
                'article_id' => 2,
                'locale' => 'it',
                'slug' => 'azienda',
                'menu_title' => 'Azienda',
                'title' => 'Azienda',
                'subtitle' => NULL,
                'intro' => '',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas aliquam mollis. Donec luctus luctus dui, vitae dapibus ipsum fermentum a. Quisque fermentum sodales iaculis. Nunc blandit ante luctus urna laoreet sollicitudin. Praesent a libero vitae elit pretium cursus. Ut maximus felis pretium augue ullamcorper venenatis. Aenean mattis hendrerit dui id aliquet. Nunc rhoncus ipsum ut orci posuere semper vel quis diam. Duis pulvinar molestie nisi, sed sollicitudin metus fermentum sit amet. Phasellus semper, nibh sed laoreet blandit, ligula neque egestas tortor, ac porttitor massa justo ut diam.</p>
<p>Donec id sem sem. Pellentesque augue quam, euismod nec neque non, sollicitudin tincidunt purus. Sed viverra libero eget ante sollicitudin iaculis. Donec erat tellus, aliquet aliquam nisi vel, faucibus interdum est. In aliquet pharetra eros vel lacinia. Nam sit amet ex tristique, pretium quam quis, ullamcorper dolor. Vestibulum gravida eros accumsan gravida iaculis. Suspendisse eu elit metus. Pellentesque iaculis rutrum augue quis blandit. Fusce at lacus vestibulum, placerat justo vitae, lacinia nisl. Phasellus accumsan enim vitae ex condimentum rhoncus.</p>
<p>Duis feugiat semper eros, vitae consectetur mauris volutpat viverra. Aenean at augue dui. Sed varius tincidunt hendrerit. Cras sed condimentum nunc. Vestibulum consequat eget ipsum a ultrices. Proin auctor commodo facilisis. Praesent quis neque tellus. Fusce venenatis, odio nec facilisis molestie, orci lacus lobortis orci, nec commodo tortor tortor et eros. Sed lacinia nisi et eleifend pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sodales diam quis diam volutpat, et egestas purus scelerisque. Phasellus bibendum diam venenatis tortor pretium iaculis. Aliquam a faucibus mauris. Aenean sed urna velit. Nam malesuada dui eget scelerisque fermentum.</p>',
                'abstract' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas aliquam mollis. Donec luctus luctus dui, vitae dapibus ipsum fermentum a. Quisque fermentum sodales iaculis. Nunc blandit ante luctus urna laoreet sollicitudin. Praesent a libero vitae elit pretium cursus. Ut maximus felis pretium augue ullamcorper venenatis. Aenean mattis hendrerit dui id aliquet. Nunc rhoncus ipsum ut orci posuere semper vel quis diam. Duis pulvinar molestie nisi, sed sollicitudin metus fermentum sit amet. Phasellus semper, nibh sed laoreet blandit, ligula neque egestas tortor, ac porttitor massa justo ut diam.</p>
<p>Donec id sem sem. Pellentesque augue quam, euismod nec neque non, sollicitudin tincidunt purus. Sed viverra libero eget ante sollicitudin iaculis. Donec erat tellus, aliquet aliquam nisi vel, faucibus interdum est. In aliquet pharetra eros vel lacinia. Nam sit amet ex tristique, pretium quam quis, ullamcorper dolor. Vestibulum gravida eros accumsan gravida iaculis. Suspendisse eu elit metus. Pellentesque iaculis rutrum augue quis blandit. Fusce at lacus vestibulum, placerat justo vitae, lacinia nisl. Phasellus accumsan enim vitae ex condimentum rhoncus.</p>
<p>Duis feugiat semper eros, vitae consectetur mauris volutpat viverra. Aenean at augue dui. Sed varius tincidunt hendrerit. Cras sed condimentum nunc. Vestibulum consequat eget ipsum a ultrices. Proin auctor commodo facilisis. Praesent quis neque tellus. Fusce venenatis, odio nec facilisis molestie, orci lacus lobortis orci, nec commodo tortor tortor et eros. Sed lacinia nisi et eleifend pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sodales diam quis diam volutpat, et egestas purus scelerisque. Phasellus bibendum diam venenatis tortor pretium iaculis. Aliquam a faucibus mauris. Aenean sed urna velit. Nam malesuada dui eget scelerisque fermentum.</p>',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2016-07-04 07:53:13',
                'updated_at' => '2019-05-04 12:58:21',
            ),
            3 => 
            array (
                'id' => 4,
                'article_id' => 2,
                'locale' => 'en',
                'slug' => 'company',
                'menu_title' => 'Company',
                'title' => 'Company',
                'subtitle' => NULL,
                'intro' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas aliquam mollis. Donec luctus luctus dui, vitae dapibus ipsum fermentum a. Quisque fermentum sodales iaculis. Nunc blandit ante luctus urna laoreet sollicitudin. Praesent a liber',
                'description' => NULL,
                'abstract' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2016-07-04 07:53:13',
                'updated_at' => '2019-05-04 12:58:21',
            ),
            4 => 
            array (
                'id' => 5,
                'article_id' => 3,
                'locale' => 'it',
                'slug' => 'privacy',
                'menu_title' => 'Privacy',
                'title' => 'Privacy',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:53:28',
                'updated_at' => '2017-08-01 14:33:01',
            ),
            5 => 
            array (
                'id' => 6,
                'article_id' => 3,
                'locale' => 'en',
                'slug' => 'privacy',
                'menu_title' => 'Privacy',
                'title' => 'Privacy',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:53:28',
                'updated_at' => '2017-08-01 14:33:01',
            ),
            6 => 
            array (
                'id' => 7,
                'article_id' => 5,
                'locale' => 'it',
                'slug' => 'prodotti',
                'menu_title' => '',
                'title' => 'Categorie',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:53:38',
                'updated_at' => '2018-01-25 11:03:49',
            ),
            7 => 
            array (
                'id' => 8,
                'article_id' => 5,
                'locale' => 'en',
                'slug' => 'products',
                'menu_title' => '',
                'title' => 'Categories',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:53:38',
                'updated_at' => '2018-01-25 11:03:49',
            ),
            8 => 
            array (
                'id' => 9,
                'article_id' => 4,
                'locale' => 'it',
                'slug' => 'contatti',
                'menu_title' => 'Contatti',
                'title' => 'Contatti',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:54:32',
                'updated_at' => '2017-08-01 14:32:40',
            ),
            9 => 
            array (
                'id' => 10,
                'article_id' => 4,
                'locale' => 'en',
                'slug' => 'contacts',
                'menu_title' => 'Contacts',
                'title' => 'Contacts',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-07-04 07:54:32',
                'updated_at' => '2017-08-01 14:32:40',
            ),
            10 => 
            array (
                'id' => 13,
                'article_id' => 6,
                'locale' => 'it',
                'slug' => 'news',
                'menu_title' => 'News',
                'title' => 'News',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-04 11:24:58',
                'updated_at' => '2017-08-01 14:33:11',
            ),
            11 => 
            array (
                'id' => 14,
                'article_id' => 6,
                'locale' => 'en',
                'slug' => 'news',
                'menu_title' => 'News',
                'title' => 'News',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-04 11:24:58',
                'updated_at' => '2017-08-01 14:33:11',
            ),
            12 => 
            array (
                'id' => 15,
                'article_id' => 7,
                'locale' => 'it',
                'slug' => 'login',
                'menu_title' => 'Login',
                'title' => 'Login',
                'subtitle' => 'login',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => 'Login',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-09 13:12:14',
                'updated_at' => '2017-08-01 14:33:20',
            ),
            13 => 
            array (
                'id' => 16,
                'article_id' => 7,
                'locale' => 'en',
                'slug' => 'login',
                'menu_title' => 'Login',
                'title' => 'Login',
                'subtitle' => 'Login',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => 'Login',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-09 13:12:14',
                'updated_at' => '2017-08-01 14:33:20',
            ),
            14 => 
            array (
                'id' => 17,
                'article_id' => 8,
                'locale' => 'it',
                'slug' => 'dashboard',
                'menu_title' => 'Dashboard',
                'title' => 'Dashboard',
                'subtitle' => 'Dashboard',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-09 13:24:04',
                'updated_at' => '2017-08-01 14:33:30',
            ),
            15 => 
            array (
                'id' => 18,
                'article_id' => 8,
                'locale' => 'en',
                'slug' => 'dashboard',
                'menu_title' => 'Dashboard',
                'title' => 'Dashboard',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-09 13:24:04',
                'updated_at' => '2017-08-01 14:33:30',
            ),
            16 => 
            array (
                'id' => 19,
                'article_id' => 9,
                'locale' => 'it',
                'slug' => 'users',
                'menu_title' => '',
                'title' => 'Users',
                'subtitle' => 'Users',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-10 07:16:26',
                'updated_at' => '2017-08-01 15:56:45',
            ),
            17 => 
            array (
                'id' => 20,
                'article_id' => 9,
                'locale' => 'en',
                'slug' => 'users',
                'menu_title' => 'Users',
                'title' => 'Users',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-10 07:16:26',
                'updated_at' => '2017-08-01 15:56:21',
            ),
            18 => 
            array (
                'id' => 21,
                'article_id' => 10,
                'locale' => 'it',
                'slug' => 'profile',
                'menu_title' => 'Profile',
                'title' => 'Profile',
                'subtitle' => 'Profile',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-10 07:17:38',
                'updated_at' => '2017-08-01 14:33:37',
            ),
            19 => 
            array (
                'id' => 22,
                'article_id' => 10,
                'locale' => 'en',
                'slug' => 'user-profile',
                'menu_title' => 'User profile',
                'title' => 'User profile',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2016-08-10 07:17:38',
                'updated_at' => '2017-08-01 14:33:37',
            ),
            20 => 
            array (
                'id' => 23,
                'article_id' => 11,
                'locale' => 'it',
                'slug' => 'register',
                'menu_title' => '',
                'title' => 'Registrazione',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2017-08-01 16:13:57',
                'updated_at' => '2017-08-01 16:13:57',
            ),
            21 => 
            array (
                'id' => 24,
                'article_id' => 11,
                'locale' => 'en',
                'slug' => 'register',
                'menu_title' => '',
                'title' => 'Register',
                'subtitle' => '',
                'intro' => NULL,
                'description' => '',
                'abstract' => '',
                'seo_title' => '',
                'seo_description' => '',
                'seo_no_index' => '',
                'created_at' => '2017-08-01 16:13:57',
                'updated_at' => '2017-08-01 16:13:57',
            ),
            22 => 
            array (
                'id' => 25,
                'article_id' => 2,
                'locale' => 'es',
                'slug' => '',
                'menu_title' => NULL,
                'title' => NULL,
                'subtitle' => NULL,
                'intro' => NULL,
                'description' => NULL,
                'abstract' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2019-05-04 12:58:21',
                'updated_at' => '2019-05-04 12:58:21',
            ),
            23 => 
            array (
                'id' => 26,
                'article_id' => 2,
                'locale' => 'fr',
                'slug' => '',
                'menu_title' => NULL,
                'title' => NULL,
                'subtitle' => NULL,
                'intro' => NULL,
                'description' => NULL,
                'abstract' => NULL,
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_no_index' => NULL,
                'created_at' => '2019-05-04 12:58:21',
                'updated_at' => '2019-05-04 12:58:21',
            ),
        ));
    }
}