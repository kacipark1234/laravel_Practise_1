<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### Laravel 練習

用Voyager套件結合Laravel來作部落格開發

命令提示字元輸入以下指令:創建Laravel專案
```ls
laravel new webs
```
下載 Voyager 套件
```ls
composer require tcg/voyager
php artisan voyager:install
```
生成管理員帳號並設定
```ls
php artisan voyager:admin admin@admin.com --create
```
## 前台套版導入
使用免費的前端版型Moderna練習
進到Moderna官網 Free Download來把版型下載到電腦裡頭
https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/

把assets資料夾放進public資料夾  
兩個檔案複製到resources/view資料夾內   
blog.html更名為 blog.blade.php  
blog-single.html更名為 post.blade.php 

## 設定Laravel 檔案Controller/Route
新增一個名稱為SiteController控制器
```ls
php artisan make:controller SiteController
```

```php
//app\Http\Controllers\SiteController.php
public function renderBlogPage(){
    return view('blog');
}
public function renderPostPage(){
    return view('post');
}
```

```php
//routes\web.php
Route::get('/blog','SiteController@renderBlogPage');
Route::get('/blog/{post}','SiteController@renderPostPage');
```

## Laravel的Migration示範
建立Migration檔案
```ls
php artisan make:migration create_categories_table
php artisan make:migration create_posts_table
php artisan migrate
```
## artisan指令 
```ls
php artisan make:model Category //假資料建立示範//
php artisan make:seeder CategorySeeder
php artisan make:factory CategoryFactory
```
```ls
php artisan db:seed //生成假資料//
php artisan make:model Post //生成Post表格的模型//
php artisan make:seeder PostSeeder //生成PostSeeder檔案//
php artisan make:factory PostFactory //生成postFactory的工廠//
php artisan make:migration create_tags_table //建立標籤的Migration檔案create_tags_table//
php artisan make:model Tag //建立標籤的模型Tag//
php artisan make:migration create_post_tag_table //建立pivot表格的Migration檔案//
php artisan vendor:publish --tag=laravel-pagination //處理分頁//
```




























