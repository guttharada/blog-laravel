<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

// หน้าหลัก
Route::get('/', [ContentController::class, 'index']);

// หน้ารายการเนื้อหาทั้งหมด
Route::get('/content', [ContentController::class, 'content'])->name('content');

// การเพิ่มเนื้อหาใหม่
Route::post('/content', [ContentController::class, 'store']);

// แสดงฟอร์มแก้ไขเนื้อหา (GET request)
Route::get('/content/{id}/edit', [ContentController::class, 'edit']);

// อัพเดตเนื้อหาที่เลือก (PUT request)
Route::put('/content/{id}', [ContentController::class, 'save'])->name('content.save');


