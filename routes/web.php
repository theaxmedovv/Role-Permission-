<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check() ? redirect()->route('posts.index') : redirect()->route('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');
    if (auth()->attempt($credentials)) {
        return redirect()->intended('/posts');
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
})->name('login.post');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::resource('posts', PostController::class)->middleware('auth');
