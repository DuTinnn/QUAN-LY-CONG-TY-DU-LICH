<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

//login

Route::get('login',[MyController::class,'login'])->name('login');

Route::get('postLogin',[MyController::class,'postLogin'])->name('postLogin');

//logout

Route::get('logout',[MyController::class,'logout'])->name('logout');

//trang chu

Route::get('home',[MyController::class,'home'])->name('home');

//nhan vien

Route::get('listnv',[MyController::class,'listnv'])->name('listnv');

Route::get('addnv',[MyController::class,'addnv'])->name('addnv');

Route::get('themnv',[MyController::class,'themnv'])->name('themnv');

Route::get('deletenv',[MyController::class,'deletenv'])->name('deletenv');

Route::get('suanv',[MyController::class,'suanv'])->name('suanv');

Route::get('suattnv',[MyController::class,'suattnv'])->name('suattnv');

//tour

Route::get('listtour',[MyController::class,'listtour'])->name('listtour');

Route::get('addtour',[MyController::class,'addtour'])->name('addtour');

Route::get('themtour',[MyController::class,'themtour'])->name('themtour');

Route::get('deletetour',[MyController::class,'deletetour'])->name('deletetour');

Route::get('suatour',[MyController::class,'suatour'])->name('suatour');

Route::get('suatttour',[MyController::class,'suatttour'])->name('suatttour');

//khach hang

Route::get('listcus',[MyController::class,'listcus'])->name('listcus');

Route::get('addkh',[MyController::class,'addkh'])->name('addkh');

Route::get('themkh',[MyController::class,'themkh'])->name('themkh');

Route::get('deletekh',[MyController::class,'deletekh'])->name('deletekh');

Route::get('suakh',[MyController::class,'suakh'])->name('suakh');

Route::get('suattkh',[MyController::class,'suattkh'])->name('suattkh');

//nha hang

Route::get('listnh',[MyController::class,'listnh'])->name('listnh');

Route::get('addnh',[MyController::class,'addnh'])->name('addnh');

Route::get('themnh',[MyController::class,'themnh'])->name('themnh');

Route::get('deletenh',[MyController::class,'deletenh'])->name('deletenh');

Route::get('suanh',[MyController::class,'suanh'])->name('suanh');

Route::get('suattnh',[MyController::class,'suattnh'])->name('suattnh');

//hoa don

Route::get('hoadon',[MyController::class,'hoadon'])->name('hoadon');

Route::get('addhd',[MyController::class,'addhd'])->name('addhd');

Route::get('themhd',[MyController::class,'themhd'])->name('themhd');

//phuong tien

Route::get('listpt',[MyController::class,'listpt'])->name('listpt');

Route::get('addpt',[MyController::class,'addpt'])->name('addpt');

Route::get('thempt',[MyController::class,'thempt'])->name('thempt');

Route::get('deletept',[MyController::class,'deletept'])->name('deletept');

Route::get('suapt',[MyController::class,'suapt'])->name('suapt');

Route::get('suattpt',[MyController::class,'suattpt'])->name('suattpt');

//diadiem 

Route::get('listdd',[MyController::class,'listdd'])->name('listdd');

Route::get('adddd',[MyController::class,'adddd'])->name('adddd');

Route::get('themdd',[MyController::class,'themdd'])->name('themdd');

Route::get('deletedd',[MyController::class,'deletedd'])->name('deletedd');

Route::get('suadd',[MyController::class,'suadd'])->name('suadd');

Route::get('suattdd',[MyController::class,'suattdd'])->name('suattdd');

//PDK
Route::get('dangky',[MyController::class,'dangky'])->name('dangky');

Route::get('addpdk',[MyController::class,'addpdk'])->name('addpdk');

Route::get('thempdk',[MyController::class,'thempdk'])->name('thempdk');

Route::get('deletepdk',[MyController::class,'deletepdk'])->name('deletepdk');

Route::get('suapdk',[MyController::class,'suapdk'])->name('suapdk');

Route::get('suattpdk',[MyController::class,'suattpdk'])->name('suattpdk');









