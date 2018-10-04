<?php



Route::get('/', function () {
    return view('user.blog');
});

Route::get('/post', function () {
    return view('user.post');
})->name('post');

Route::get('/admin/dashboard', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/admin/post', function () {
    return view('admin.post.post');
})->name('admin.post');

Route::get('/admin/tag', function () {
    return view('admin.tag.tag');
})->name('admin.tag');

Route::get('/admin/category', function () {
    return view('admin.category.category');
})->name('admin.category');


