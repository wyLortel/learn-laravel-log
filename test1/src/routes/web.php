<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/hello', function () {
    return 'Hello, World!!';
});

// routes/web.php
Route::get('/about', function () {
    return '<h1>会社概要</h1><p>私たちは素晴らしい会社です。</p>';
});

// routes/web.php

Route::get('/company', function () {
    return view('company');
});

Route::get('/user/{id}', function ($id) {
    return 'ユーザーID: ' . $id;
});

// routes/web.php

Route::get('/post/{category}/{id}', function ($category, $id) {
    return "カテゴリ: {$category}, 記事ID: {$id}";
});

// Route::get('/greeting/{name?}', function ($name = 'ゲスト') {
//     return "こんにちは、{$name}さん";
// });

Route::get('/profile/user', function () {
    return 'プロフィールページ';
})->name('profile');

// グループを使う場合（推奨）
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return '管理画面ダッシュボード';
//     });
//     Route::get('/users', function () {
//         return 'ユーザー管理';
//     });
//     Route::get('/posts', function () {
//         return '記事管理';
//     });
// });

// routes/web.php

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return '管理画面ダッシュボード';
    })->name('dashboard');  // ルート名: admin.dashboard

    Route::get('/users', function () {
        return 'ユーザー管理';
    })->name('users');      // ルート名: admin.users
});

Route::get('/hello', function () {
    return view('hello');
});

// Route::get('/greeting', function () {
//     return view('greeting', ['name' => '아라이']);
// });

// Route::get('/greeting', function () {
//     return view('greeting')->with('name', '太郎');
// });

Route::get('/greeting', function () {
    $name = '太郎';
    $age = 25;

    return view('greeting', compact('name', 'age'));
});

// routes/web.php に追加

Route::get('/xss-demo', function () {
    // 攻撃者が入力したコメント（本来はフォームから受け取る）
    $comment = 'こんにちは<script>alert("XSS攻撃成功！")</script>';

    return view('xss-demo', compact('comment'));
});
