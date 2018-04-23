<?php

Route::group(['middleware' => 'web'], function () {


    Route::auth();
Route::get('/{slug}', function($slug) {

  // $disabled=["dersler","auth"];
    $slugs = \App\Models\Slug::whereSlug($slug)->first();  
    if($slugs):
    switch ($slugs->type) {
        case 'video':
               $controller = new \App\Http\Controllers\VideoController;
               return $controller->show($slugs->content_id);
            break;
        case 'page':
               $controller = new \App\Http\Controllers\PageController;
               return $controller->show($slugs->content_id);
            break;
         case 'post':
               $controller = new \App\Http\Controllers\PostController;
               return $controller->show($slugs->content_id);
            break;
         case 'unit':
               $controller = new \App\Http\Controllers\LessonController;
               return $controller->show($slugs->content_id);
            break;
         case 'lesson':
               $controller = new \App\Http\Controllers\LessonController;
               return $controller->index($slugs->content_id);
            break;
        case 'lessons':
               $controller = new \App\Http\Controllers\LessonController;
               return $controller->index();
            break;
         case 'blog':
               $controller = new \App\Http\Controllers\PostController;
               return $controller->index();
            break;
        case 'portfolio':
               $controller = new \App\Http\Controllers\ProjectController;
               return $controller->index();
            break;
        
          
        default:
            # code...
            break;
    }
    endif;
    if($slug =='contact'):
    $controller = new \App\Http\Controllers\ContactController;
               return $controller->create();
               endif;

});  

    // Pages
    Route::get('/', ['as' => 'home', 'uses' => 'HomePageController@index']);


    Route::get('/page/{slug}', ['as' => 'page.show', 'uses' => 'PageController@show']);


    // Categories
    Route::resource('category', 'CategoryController');


    // Articles
    Route::get('search', ['as' => 'post.search', 'uses' => 'SearchController@searchPosts']);

    Route::get('/category/{category}', ['as' => 'post.category', 'uses' => 'PostController@getPostsByCategory']);
    Route::resource('post', 'PostController');

    // Tags
    Route::get('tag/{slug}', ['as' => 'tag.show', 'uses' => 'TagController@show']);

    // Users
    Route::resource('user', 'UserController');

    Route::group(['prefix' => 'portfolio'], function () {
        Route::get('/', ['as' => 'portfolio', 'uses' => 'ProjectController@index']);
        Route::resource('project', 'ProjectController');
    });

    //Contact Route
    Route::get('contact', ['as' => 'contact.index', 'uses' => 'ContactController@create']);
    Route::post('contact',   ['as' => 'contact_store', 'uses' => 'ContactController@store']);

    // RSS Feed
    Route::get('feed', ['as' => 'rss', 'uses' => 'FeedController@getRss']);

    // Admin area
    Route::post('admin/useradmin/store', 'Admin\UserController@storeAdminUser');
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/dashboard', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

        Route::get('post/{id}/delete', ['as' => 'admin.post.delete', 'uses' => 'Admin\PostController@delete']);
        Route::resource('post', 'Admin\PostController');

        Route::get('page/{id}/delete', ['as' => 'admin.page.delete', 'uses' => 'Admin\PageController@delete']);
        Route::resource('page', 'Admin\PageController');

        Route::get('video/{id}/delete', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@delete']);
        route::get('video/categories','Admin\VideoController@categories');
        Route::resource('video', 'Admin\VideoController');

        Route::get('lesson/{id}/delete', ['as' => 'admin.lesson.delete', 'uses' => 'Admin\LessonController@delete']);
        Route::get('lesson/{id}/create', ['as' => 'admin.lesson.create', 'uses' => 'Admin\LessonController@create']);
        route::get('lesson/categories','Admin\LessonController@categories');
        Route::resource('lesson', 'Admin\LessonController');

        Route::get('category/{id}/delete', ['as' => 'admin.category.delete', 'uses' => 'Admin\CategoryController@delete']);
        Route::resource('category', 'Admin\CategoryController');

        Route::get('project/{id}/publish', ['as' => 'admin.project.publish', 'uses' => 'Admin\ProjectController@setPublished']);
        Route::get('project/{id}/unpublish', ['as' => 'admin.project.unpublish', 'uses' => 'Admin\ProjectController@setUnpublished']);
        Route::get('project/{id}/delete', ['as' => 'admin.project.delete', 'uses' => 'Admin\ProjectController@delete']);
        Route::resource('project', 'Admin\ProjectController');

        Route::get('project_category/{id}/delete', ['as' => 'admin.project_category.delete', 'uses' => 'Admin\ProjectCategoryController@delete']);
        Route::resource('project_category', 'Admin\ProjectCategoryController');

        Route::get('task/{id}/toggleComplete', ['as' => 'admin.task.toggle', 'uses' => 'Admin\TaskController@toggleComplete']);
        Route::get('task/{id}/delete', ['as' => 'admin.task.delete', 'uses' => 'Admin\TaskController@delete']);
        Route::resource('task', 'Admin\TaskController');

        Route::get('social/{id}/delete', ['as' => 'admin.social.delete', 'uses' => 'Admin\SocialLinkController@delete']);
        Route::resource('social', 'Admin\SocialLinkController');

        Route::controller('message','Admin\MessageController');

        Route::resource('settings', 'Admin\SettingController');
        Route::post('image/upload', 'Admin\SettingController@upload');

        Route::resource('menu', 'Admin\MenuController');
    });

    //API routes
    Route::group(['prefix'     => 'api/v1'], function () {
        Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
            Route::resource('task', 'API\TaskController');
            Route::resource('menu', 'API\MenuController');
            Route::post('menu/destroy', 'API\MenuController@destroy');
            Route::post('menu/order', 'API\MenuController@updateOrder');
            Route::resource('page', 'API\PageController');

        });
    });
});
