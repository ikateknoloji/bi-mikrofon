<?php

use Illuminate\Support\Facades\Route;

// Ana sayfa
Route::view('/', 'pages.home')->name('anasayfa');

// İletişim
Route::view('/iletisim', 'pages.contact')->name('iletisim');


Route::view('/kurumsal', 'pages.kurumsal')->name('kurumsal');

Route::view('/sitemap', 'pages.sitemap')->name('sitemap');

// Blog → Anasayfa’ya yönlendir ve mesaj göster
Route::view('/blog', 'pages.blog')->name('blog');


// Mikrofon süngeri ürünleri
Route::prefix('mikrofon-sungeri')->group(function () {
  Route::view('/silindir-mikrofon-sungeri',    'pages.products.silindir')->name('silindir');
  Route::view('/kare-mikrofon-sungeri',        'pages.products.kare')->name('kare');
  Route::view('/ucgen-mikrofon-sungeri',       'pages.products.ucgen')->name('ucgen');
  Route::view('/top-mikrofon-sungeri',         'pages.products.top')->name('top');
  Route::view('/damla-mikrofon-sungeri',       'pages.products.damla')->name('damla');
  Route::view('/reklam-kupu-mikrofon-sungeri', 'pages.products.reklam-kupu')->name('reklam-kupu');
});


Route::prefix('blog')->group(function () {
  Route::view('/mikrofon-sungeri-baski', 'pages.blog.mikrofon-sungeri-baski')
    ->name('blog.mikrofon-sungeri-baski');

  Route::view('/mikrofon-sungeri-nedir', 'pages.blog.mikrofon-sungeri-nedir')
    ->name('blog.mikrofon-sungeri-nedir');

  Route::view('/baskili-mikrofon-sungeri-fiyati', 'pages.blog.baskili-mikrofon-sungeri-fiyati')
    ->name('blog.baskili-mikrofon-sungeri-fiyati');

  Route::view('/mikrofon-sungeri-uretimi-ve-baski-hizmeti', 'pages.blog.mikrofon-sungeri-uretimi')
    ->name('blog.mikrofon-sungeri-uretimi');

  Route::view('/mikrofon-sungeri-nerede-bulunur', 'pages.blog.mikrofon-sungeri-nerede-bulunur')
    ->name('blog.mikrofon-sungeri-nerede-bulunur');

  Route::view('/izmir-mikrofon-sungeri-baski', 'pages.blog.izmir-mikrofon-sungeri-baski')
    ->name('blog.izmir-mikrofon-sungeri-baski');

  Route::view('/ankara-mikrofon-sungeri-baski', 'pages.blog.ankara-mikrofon-sungeri-baski')
    ->name('blog.ankara-mikrofon-sungeri-baski');

  Route::view('/kucuk-mikrofon-sungeri', 'pages.blog.kucuk-mikrofon-sungeri')
    ->name('blog.kucuk-mikrofon-sungeri');

  Route::view('/logolu-mikrofon-sungeri', 'pages.blog.logolu-mikrofon-sungeri')
    ->name('blog.logolu-mikrofon-sungeri');

  Route::view('/mikrofon-yalitimi', 'pages.blog.mikrofon-yalitimi')
    ->name('blog.mikrofon-yalitimi');
});
