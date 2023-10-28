<?php

use Illuminate\Support\Facades\Route;
Route::fallback(function () {
    return redirect('/')->with('error', "Bạn đã nhập sai đường dẫn");
});
Route::group(['prefix' => '/'], function () {
        Route::controller(HomeController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('home');
            Route::get('/chi-tiet-bai-dang/{id}','content_new')->name('content_new');
            Route::get('/danh-sach-tin-tuc','list_new')->name('list_new');
            Route::get('/danh-sach-du-an','list_project')->name('list_project');
            Route::get('/danh-sach-san-pham','list_product')->name('list_product');

            Route::get('/lien-he','contact')->name('contact');
            Route::get('/gioi-thieu','introduce')->name('introduce');
            Route::post('/lien-he-post','contactPost')->name('contactPost');

            Route::get('/chi-tiet-san-pham/{id}','product_detail')->name('product_detail');
            Route::get('/tim-kiem','search')->name('search');
        });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

// Route::group(['prefix' => 'admin', 'middleware'=>['CheckAdmin', 'CheckLoginUser']], function () {
Route::group(['prefix' => 'admin', 'middleware'=>['CheckLoginUser']], function () {

    // Route::controller(AdminController::class)->group(function () {
    //     Route::get('/','index')->name('admin');
    // });
    Route::group(['prefix' => 'category', 'as' =>'category.'], function () {


        Route::controller(CategotyController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
        Route::group(['prefix' => 'category_item', 'as' =>'category_item.'], function () {
        Route::controller(CategotyItemController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
        Route::group(['prefix' => 'product', 'as' =>'product.'], function () {
        Route::controller(ProductController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');

            Route::get('/addImage/{id}', 'addImage2')->name('addImage');
            Route::post('/addImagePost/{id}', 'addImagePost2')->name('addImagePost');

            // xóa ảnh
            Route::get('/delete-image/{id}', 'destroyImage')->name('deleteImage');


            Route::get('/adddetail/{id}', 'adddetail')->name('adddetail');
            Route::post('/adddetailP', 'adddetailPost')->name('adddetailPost');
        });
    });
    Route::group(['prefix' => 'blog', 'as' =>'blog.'], function () {
        Route::controller(BlogController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'contact', 'as' =>'contact.'], function () {
        Route::controller(ContactController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('change_status/{id}/{status}','changeStatus')->name('changeStatus');
        });
    });
    Route::group(['prefix' => 'user', 'as' =>'user.'], function () {
        Route::controller(UserController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('list');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
});
