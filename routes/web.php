<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\TeachersGalleryController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WebsiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', [AdminController::class, 'index']);
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


Route::get('import-teachers', [MyController::class, 'importTeachers']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import-teachers');


Route::get('import-students', [MyController::class, 'importStudents']);
Route::post('import-student-function', [MyController::class, 'importStudentFunction'])->name('student-import');

Route::get('import-classess', [MyController::class, 'importclassess']);
Route::post('import-class-function', [MyController::class, 'importClassFunction'])->name('class-import');

Route::get('import-subjects', [MyController::class, 'importSubjects']);
Route::post('import-subject-function', [MyController::class, 'importSubjectFunction'])->name('subject-import');

Route::get('import-result', [MyController::class, 'importResult']);
Route::post('import-result-function', [MyController::class, 'importResultFunction'])->name('result-import');



/*admin routes*/

Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/employee-list', [AdminController::class, 'employeeList'])->name('employee-list');
Route::get('/student-list', [AdminController::class, 'studentList'])->name('student-list');
Route::get('/parent-list', [AdminController::class, 'parentList'])->name('parent-list');
Route::get('/result-list', [AdminController::class, 'resultList'])->name('result-list');
Route::get('/send-bulk-sms', [AdminController::class, 'sendBulkSms'])->name('send-bulk-sms');


/*parent routes*/
Route::get('/parent-dashboard', [ParentController::class, 'dashboard'])->name('parent-dashboard');
Route::get('/child-result', [ParentController::class, 'childResult'])->name('child-result');
Route::post('/view-result', [ParentController::class, 'viewResult'])->name('view-result');
Route::post('/report-card', [ParentController::class, 'reportCard'])->name('report-card');
Route::get('/parent-profile', [ParentController::class, 'profile'])->name('parent-profile');
Route::post('/parent-profile-update', [ParentController::class, 'profileUpdate'])->name('parent-profile-update');



/*teachers routes*/
Route::get('/teacher-dashboard', [TeacherController::class, 'dashboard'])->name('teacher-dashboard');
Route::get('/class-student-list', [TeacherController::class, 'studentList'])->name('class-student-list');
Route::get('/teacher-profile', [TeacherController::class, 'profile'])->name('teacher-profile');

Route::post('generate-pdf', [PDFController::class, 'generatePDF'])->name('generatePDF');








/*Website Routes*/

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/staffs', [WebsiteController::class, 'teachers'])->name('teachers');
Route::get('/testimonials', [WebsiteController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');


/*Teacher's Record Uploads*/
Route::get('teacher-image-gallery', [TeachersGalleryController::class, 'index']);
Route::post('teacher-image-gallery', [TeachersGalleryController::class, 'upload']);
Route::delete('teacher-image-gallery/{id}', [TeachersGalleryController::class, 'destroy']);



/*Student's Image Upload*/
Route::get('image-gallery', [ImageGalleryController::class, 'index']);
Route::post('image-gallery', [ImageGalleryController::class, 'upload']);
Route::delete('image-gallery/{id}', [ImageGalleryController::class, 'destroy']);


/*Testimonials Upload*/
Route::get('add-testimonials', [TestimonialsController::class, 'index']);
Route::post('add-testimonials', [TestimonialsController::class, 'upload']);
Route::delete('delete-testimonials/{id}', [TestimonialsController::class, 'destroy']);

/*events*/
Route::get('events', [EventController::class, 'index']);
Route::post('add-events', [EventController::class, 'addEvent']);
Route::delete('delete-testimonials/{id}', [TestimonialsController::class, 'destroy']);













