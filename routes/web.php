<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ap1aulac1m1s',function(){
	return view('ap1aulac1m1s');
});

Route::post('store', 'ap1aulac1m1s@store');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('cadeiras_curso1', 'CadeirasCurso1Controller@index')->name('cadeiras_curso1');
/************************1 ano*************************/
Route::get('ap1c1', 'Ap1C1Controller@index')->name('ap1c1');
Route::get('ap1c2', 'Ap1C2Controller@index')->name('ap1c2');
Route::get('ap1c3', 'Ap1C3Controller@index')->name('ap1c3');

//Route::get('upload', 'UploadController')->name('upload');


Route::get('quizzap1c1m1', 'Quizzap1c1m1Controller@index')->name('quizzap1c1m1');

Route::get('quizzap1c1m2', 'Quizzap1c1m2Controller@index')->name('quizzap1c1m2');

/************************2 ano*************************/
Route::get('ap2c1', 'Ap2C1Controller@index')->name('ap2c1');
Route::get('ap2c2', 'Ap2C2Controller@index')->name('ap2c2');
Route::get('ap2c3', 'Ap2C3Controller@index')->name('ap2c3');

/************************3 ano*************************/
Route::get('ap3c1', 'Ap3C1Controller@index')->name('ap3c1');
Route::get('ap3c2', 'Ap3C2Controller@index')->name('ap3c2');
Route::get('ap3c3', 'Ap3C3Controller@index')->name('ap3c3');

/************************4 ano*************************/
Route::get('ap4c1', 'Ap4C1Controller@index')->name('ap4c1');
Route::get('ap4c2', 'Ap4C2Controller@index')->name('ap4c2');
Route::get('ap4c3', 'Ap4C3Controller@index')->name('ap4c3');

/************************Curso 2****************************/
Route::get('cadeiras_curso2', 'CadeirasCurso2Controller@index')->name('cadeiras_curso2');
/************************1 ano*************************/
Route::get('f1c1', 'F1C1Controller@index')->name('f1c1');
Route::get('f1c2', 'F1C2Controller@index')->name('f1c2');
Route::get('f1c3', 'F1C3Controller@index')->name('f1c3');

/************************2 ano*************************/
Route::get('f2c1', 'F2C1Controller@index')->name('f2c1');
Route::get('f2c2', 'F2C2Controller@index')->name('f2c2');
Route::get('f2c3', 'F2C3Controller@index')->name('f2c3');

/************************3 ano*************************/
Route::get('f3c1', 'F3C1Controller@index')->name('f3c1');
Route::get('f3c2', 'F3C2Controller@index')->name('f3c2');
Route::get('f3c3', 'F3C3Controller@index')->name('f3c3');

/************************4 ano*************************/
Route::get('f4c1', 'F4C1Controller@index')->name('f4c1');
Route::get('f4c2', 'F4C2Controller@index')->name('f4c2');
Route::get('f4c3', 'F4C3Controller@index')->name('f4c3');


/************************Curso 3****************************/
Route::get('cadeiras_curso3', 'CadeirasCurso3Controller@index')->name('cadeiras_curso3');

/************************1 ano*************************/
Route::get('p1c1', 'P1C1Controller@index')->name('p1c1');
Route::get('p1c2', 'P1C2Controller@index')->name('p1c2');
Route::get('p1c3', 'P1C3Controller@index')->name('p1c3');

/************************2 ano*************************/
Route::get('p2c1', 'P2C1Controller@index')->name('p2c1');
Route::get('p2c2', 'P2C2Controller@index')->name('p2c2');
Route::get('p2c3', 'P2C3Controller@index')->name('p2c3');

/************************3 ano*************************/
Route::get('p3c1', 'P3C1Controller@index')->name('p3c1');
Route::get('p3c2', 'P3C2Controller@index')->name('p3c2');
Route::get('p3c3', 'P3C3Controller@index')->name('p3c3');

/************************4 ano*************************/
Route::get('p4c1', 'P4C1Controller@index')->name('p4c1');
Route::get('p4c2', 'P4C2Controller@index')->name('p4c2');
Route::get('p4c3', 'P4C3Controller@index')->name('p4c3');
/************************Curso 3****************************/
Route::get('cadeiras_curso4', 'CadeirasCurso4Controller@index')->name('cadeiras_curso4');
/************************1 ano*************************/
Route::get('e1c1', 'E1C1Controller@index')->name('e1c1');
Route::get('e1c2', 'E1C2Controller@index')->name('e1c2');
Route::get('e1c3', 'E1C3Controller@index')->name('e1c3');

/************************2 ano*************************/
Route::get('e2c1', 'E2C1Controller@index')->name('e2c1');
Route::get('e2c2', 'E2C2Controller@index')->name('e2c2');
Route::get('e2c3', 'E2C3Controller@index')->name('e2c3');

/************************3 ano*************************/
Route::get('e3c1', 'E3C1Controller@index')->name('e3c1');
Route::get('e3c2', 'E3C2Controller@index')->name('e3c2');
Route::get('e3c3', 'E3C3Controller@index')->name('e3c3');

/************************4 ano*************************/
Route::get('e4c1', 'E4C1Controller@index')->name('e4c1');
Route::get('e4c2', 'E4C2Controller@index')->name('e4c2');
Route::get('e4c3', 'E4C3Controller@index')->name('e4c3');
/**********************************************************************************************/

Route::resource('classes', 'ClassesController');

Route::resource('classrooms', 'ClassroomsController');

Route::resource('levels', 'LevelController');

Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendaces', 'AttendaceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admissions', 'AdmissionController');

Route::resource('teachers', 'TeacherController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('semesters', 'SemestersController');

Route::resource('exerciciosc1m1s', 'Exerciciosc1m1Controller');

//Route::get('cadeiras_curso1.blade.php', 'CadeirasCurso1Controller');
//Route::resource('ap1aulac1m1s.download', 'Ap1aulaC1Controller');



//Route::get('/dynamicLevel', ['as'=> 'dynamicLevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);

//Route::get('/class_schedulings/edit', ['as'=> 'edit', 'uses' => 'ClassSchedulingController@edit']);*/

Route::resource('ap1aulac1m1s', 'Ap1aulac1m1Controller');
//Route::post('ap1aulac1m1s', 'Ap1aulac1m1Controller@store')->name('aula.upload.post');

Route::resource('ap1aulac1m2s', 'Ap1aulac1m2Controller');

Route::resource('ap1exercicioc1m1s', 'Ap1exercicioc1m1Controller');

Route::resource('ap1exercicioc1m2s', 'Ap1exercicioc1m2Controller');

Route::resource('ap1debatec1m1s', 'Ap1debatec1m1Controller');

Route::resource('ap1debatec1m2s', 'Ap1debatec1m2Controller');

Route::resource('ap1aulac2m1s', 'Ap1aulac2m1Controller');

Route::resource('ap1aulac2m2s', 'Ap1aulac2m2Controller');

Route::resource('ap1aulac3m2s', 'Ap1aulac3m2Controller');

Route::resource('ap1aulac3m1s', 'Ap1aulac3m1Controller');

Route::resource('ap1debatec2m2s', 'Ap1debatec2m2Controller');

Route::resource('ap1debatec2m1s', 'Ap1debatec2m1Controller');

Route::resource('ap1debatec3m1s', 'Ap1debatec3m1Controller');

Route::resource('ap1debatec3m2s', 'Ap1debatec3m2Controller');

Route::resource('ap1exercicioc2m1s', 'Ap1exercicioc2m1Controller');

Route::resource('ap1exercicioc2m2s', 'Ap1exercicioc2m2Controller');

Route::resource('ap1exercicioc3m2s', 'Ap1exercicioc3m2Controller');

Route::resource('ap1exercicioc3m1s', 'Ap1exercicioc3m1Controller');

Route::resource('ap2exercicioc3m1s', 'Ap2exercicioc3m1Controller');

Route::resource('ap2exercicioc3m2s', 'Ap2exercicioc3m2Controller');

Route::resource('ap2debatec3m2s', 'Ap2debatec3m2Controller');

Route::resource('ap2debatec3m1s', 'Ap2debatec3m1Controller');

Route::resource('ap2debatec2m1s', 'Ap2debatec2m1Controller');

Route::resource('ap2debatec2m2s', 'Ap2debatec2m2Controller');

Route::resource('ap2debatec1m2s', 'Ap2debatec1m2Controller');

Route::resource('ap2debatec1m1s', 'Ap2debatec1m1Controller');

Route::resource('ap2exercicioc2m1s', 'Ap2exercicioc2m1Controller');

Route::resource('ap2exercicioc2m2s', 'Ap2exercicioc2m2Controller');

Route::resource('ap2exercicioc1m2s', 'Ap2exercicioc1m2Controller');

Route::resource('ap2exercicioc1m1s', 'Ap2exercicioc1m1Controller');

Route::resource('ap2aulac3m1s', 'Ap2aulac3m1Controller');

Route::resource('ap2aulac3m2s', 'Ap2aulac3m2Controller');

Route::resource('ap2aulac2m2s', 'Ap2aulac2m2Controller');

Route::resource('ap2aulac2m1s', 'Ap2aulac2m1Controller');

Route::resource('ap2aulac1m1s', 'Ap2aulac1m1Controller');

Route::resource('ap2aulac1m2s', 'Ap2aulac1m2Controller');

Route::resource('ap3aulac1m2s', 'Ap3aulac1m2Controller');

Route::resource('ap3aulac1m1s', 'Ap3aulac1m1Controller');

Route::resource('ap3aulac2m1s', 'Ap3aulac2m1Controller');

Route::resource('ap3aulac2m2s', 'Ap3aulac2m2Controller');

Route::resource('ap3aulac3m2s', 'Ap3aulac3m2Controller');

Route::resource('ap3aulac3m1s', 'Ap3aulac3m1Controller');

Route::resource('ap3exercicioc3m1s', 'Ap3exercicioc3m1Controller');

Route::resource('ap3exercicioc3m2s', 'Ap3exercicioc3m2Controller');

Route::resource('ap3exercicioc2m2s', 'Ap3exercicioc2m2Controller');

Route::resource('ap3exercicioc2m1s', 'Ap3exercicioc2m1Controller');

Route::resource('ap3exercicioc1m1s', 'Ap3exercicioc1m1Controller');

Route::resource('ap3exercicioc1m2s', 'Ap3exercicioc1m2Controller');

Route::resource('ap3debatec1m2s', 'Ap3debatec1m2Controller');

Route::resource('ap3debatec1m1s', 'Ap3debatec1m1Controller');

Route::resource('ap3debatec2m1s', 'Ap3debatec2m1Controller');

Route::resource('ap3debatec2m2s', 'Ap3debatec2m2Controller');

Route::resource('ap3debatec3m2s', 'Ap3debatec3m2Controller');

Route::resource('ap3debatec3m1s', 'Ap3debatec3m1Controller');

Route::resource('ap4debatec3m1s', 'Ap4debatec3m1Controller');

Route::resource('ap4debatec3m2s', 'Ap4debatec3m2Controller');

Route::resource('ap4debatec2m2s', 'Ap4debatec2m2Controller');

Route::resource('ap4debatec2m1s', 'Ap4debatec2m1Controller');

Route::resource('ap4debatec1m1s', 'Ap4debatec1m1Controller');

Route::resource('ap4debatec1m2s', 'Ap4debatec1m2Controller');

Route::resource('ap4exercicioc1m2s', 'Ap4exercicioc1m2Controller');

Route::resource('ap4exercicioc1m1s', 'Ap4exercicioc1m1Controller');

Route::resource('ap4exercicioc2m1s', 'Ap4exercicioc2m1Controller');

Route::resource('ap4exercicioc2m2s', 'Ap4exercicioc2m2Controller');

Route::resource('ap4exercicioc3m2s', 'Ap4exercicioc3m2Controller');

Route::resource('ap4exercicioc3m1s', 'Ap4exercicioc3m1Controller');

Route::resource('ap4aulac3m1s', 'Ap4aulac3m1Controller');

Route::resource('ap4aulac3m2s', 'Ap4aulac3m2Controller');

Route::resource('ap4aulac2m2s', 'Ap4aulac2m2Controller');

Route::resource('ap4aulac2m1s', 'Ap4aulac2m1Controller');

Route::resource('ap4aulac1m1s', 'Ap4aulac1m1Controller');

Route::resource('ap4aulac1m2s', 'Ap4aulac1m2Controller');

Route::resource('f1aulac1m1s', 'F1aulac1m1Controller');

Route::resource('f1aulac1m2s', 'F1aulac1m2Controller');

Route::resource('f1aulac2m2s', 'F1aulac2m2Controller');

Route::resource('f1aulac2m1s', 'F1aulac2m1Controller');

Route::resource('f1aulac3m1s', 'F1aulac3m1Controller');

Route::resource('f1aulac3m2s', 'F1aulac3m2Controller');

Route::resource('f1exercicioc1m1s', 'F1exercicioc1m1Controller');

Route::resource('f1exercicioc1m2s', 'F1exercicioc1m2Controller');

Route::resource('f1exercicioc2m2s', 'F1exercicioc2m2Controller');

Route::resource('f1exercicioc2m1s', 'F1exercicioc2m1Controller');

Route::resource('f1exercicioc3m1s', 'F1exercicioc3m1Controller');

Route::resource('f1exercicioc3m2s', 'F1exercicioc3m2Controller');

Route::resource('f1debatec1m1s', 'F1debatec1m1Controller');

Route::resource('f1debatec1m2s', 'F1debatec1m2Controller');

Route::resource('f1debatec2m2s', 'F1debatec2m2Controller');

Route::resource('f1debatec2m1s', 'F1debatec2m1Controller');

Route::resource('f1debatec3m1s', 'F1debatec3m1Controller');

Route::resource('f1debatec3m2s', 'F1debatec3m2Controller');

Route::resource('f2aulac1m1s', 'F2aulac1m1Controller');

Route::resource('f2aulac1m2s', 'F2aulac1m2Controller');

Route::resource('f2aulac2m2s', 'F2aulac2m2Controller');

Route::resource('f2aulac2m1s', 'F2aulac2m1Controller');

Route::resource('f2aulac3m1s', 'F2aulac3m1Controller');

Route::resource('f2aulac3m2s', 'F2aulac3m2Controller');

Route::resource('f2exercicioc1m1s', 'F2exercicioc1m1Controller');

Route::resource('f2exercicioc1m2s', 'F2exercicioc1m2Controller');

Route::resource('f2exercicioc2m2s', 'F2exercicioc2m2Controller');

Route::resource('f2exercicioc2m1s', 'F2exercicioc2m1Controller');

Route::resource('f2exercicioc3m1s', 'F2exercicioc3m1Controller');

Route::resource('f2exercicioc3m2s', 'F2exercicioc3m2Controller');

Route::resource('f2debatec1m1s', 'F2debatec1m1Controller');

Route::resource('f2debatec1m2s', 'F2debatec1m2Controller');

Route::resource('f2debatec2m1s', 'F2debatec2m1Controller');

Route::resource('f2debatec2m2s', 'F2debatec2m2Controller');

Route::resource('f2debatec3m2s', 'F2debatec3m2Controller');

Route::resource('f2debatec3m1s', 'F2debatec3m1Controller');

Route::resource('f3aulac1m1s', 'F3aulac1m1Controller');

Route::resource('f3aulac1m2s', 'F3aulac1m2Controller');

Route::resource('f3aulac2m2s', 'F3aulac2m2Controller');

Route::resource('f3aulac2m1s', 'F3aulac2m1Controller');

Route::resource('f3aulac3m1s', 'F3aulac3m1Controller');

Route::resource('f3aulac3m2s', 'F3aulac3m2Controller');

Route::resource('f3exercicioc1m1s', 'F3exercicioc1m1Controller');

Route::resource('f3exercicioc1m2s', 'F3exercicioc1m2Controller');

Route::resource('f3exercicioc2m2s', 'F3exercicioc2m2Controller');

Route::resource('f3exercicioc2m1s', 'F3exercicioc2m1Controller');

Route::resource('f3exercicioc3m1s', 'F3exercicioc3m1Controller');

Route::resource('f3exercicioc3m2s', 'F3exercicioc3m2Controller');

Route::resource('f3debatec1m1s', 'F3debatec1m1Controller');

Route::resource('f3debatec1m2s', 'F3debatec1m2Controller');

Route::resource('f3debatec2m2s', 'F3debatec2m2Controller');

Route::resource('f3debatec2m1s', 'F3debatec2m1Controller');

Route::resource('f3debatec3m1s', 'F3debatec3m1Controller');

Route::resource('f3debatec3m2s', 'F3debatec3m2Controller');

Route::resource('f4aulac1m1s', 'F4aulac1m1Controller');

Route::resource('f4aulac1m2s', 'F4aulac1m2Controller');

Route::resource('f4aulac2m2s', 'F4aulac2m2Controller');

Route::resource('f4aulac2m1s', 'F4aulac2m1Controller');

Route::resource('f4aulac3m1s', 'F4aulac3m1Controller');

Route::resource('f4aulac3m2s', 'F4aulac3m2Controller');

Route::resource('f4exercicioc1m1s', 'F4exercicioc1m1Controller');

Route::resource('f4exercicioc1m2s', 'F4exercicioc1m2Controller');

Route::resource('f4exercicioc2m2s', 'F4exercicioc2m2Controller');

Route::resource('f4exercicioc2m1s', 'F4exercicioc2m1Controller');

Route::resource('f4exercicioc3m1s', 'F4exercicioc3m1Controller');

Route::resource('f4exercicioc3m2s', 'F4exercicioc3m2Controller');

Route::resource('f4debatec1m1s', 'F4debatec1m1Controller');

Route::resource('f4debatec1m2s', 'F4debatec1m2Controller');

Route::resource('f4debatec2m2s', 'F4debatec2m2Controller');

Route::resource('f4debatec2m1s', 'F4debatec2m1Controller');

Route::resource('f4debatec3m1s', 'F4debatec3m1Controller');

Route::resource('f4debatec3m2s', 'F4debatec3m2Controller');

Route::resource('p1aulac1m1s', 'P1aulac1m1Controller');

Route::resource('p1aulac1m2s', 'P1aulac1m2Controller');

Route::resource('p1aulac2m2s', 'P1aulac2m2Controller');

Route::resource('p1aulac2m1s', 'P1aulac2m1Controller');

Route::resource('p1aulac3m1s', 'P1aulac3m1Controller');

Route::resource('p1aulac3m2s', 'P1aulac3m2Controller');

Route::resource('p1exercicioc1m1s', 'P1exercicioc1m1Controller');

Route::resource('p1exercicioc1m2s', 'P1exercicioc1m2Controller');

Route::resource('p1exercicioc2m2s', 'P1exercicioc2m2Controller');

Route::resource('p1exercicioc2m1s', 'P1exercicioc2m1Controller');

Route::resource('p1exercicioc3m1s', 'P1exercicioc3m1Controller');

Route::resource('p1exercicioc3m2s', 'P1exercicioc3m2Controller');

Route::resource('p1debatec1m1s', 'P1debatec1m1Controller');

Route::resource('p1debatec1m2s', 'P1debatec1m2Controller');

Route::resource('p1debatec2m2s', 'P1debatec2m2Controller');

Route::resource('p1debatec2m1s', 'P1debatec2m1Controller');

Route::resource('p1debatec3m1s', 'P1debatec3m1Controller');

Route::resource('p1debatec3m2s', 'P1debatec3m2Controller');

Route::resource('p2aulac1m1s', 'P2aulac1m1Controller');

Route::resource('p2aulac1m2s', 'P2aulac1m2Controller');

Route::resource('p2aulac2m2s', 'P2aulac2m2Controller');

Route::resource('p2aulac2m1s', 'P2aulac2m1Controller');

Route::resource('p2aulac3m1s', 'P2aulac3m1Controller');

Route::resource('p2aulac3m2s', 'P2aulac3m2Controller');

Route::resource('p2exercicioc1m1s', 'P2exercicioc1m1Controller');

Route::resource('p2exercicioc1m2s', 'P2exercicioc1m2Controller');

Route::resource('p2exercicioc2m2s', 'P2exercicioc2m2Controller');

Route::resource('p2exercicioc2m1s', 'P2exercicioc2m1Controller');

Route::resource('p2exercicioc3m1s', 'P2exercicioc3m1Controller');

Route::resource('p2exercicioc3m2s', 'P2exercicioc3m2Controller');

Route::resource('p2debatec1m1s', 'P2debatec1m1Controller');

Route::resource('p2debatec1m2s', 'P2debatec1m2Controller');

Route::resource('p2debatec2m2s', 'P2debatec2m2Controller');

Route::resource('p2debatec2m1s', 'P2debatec2m1Controller');

Route::resource('p2debatec3m1s', 'P2debatec3m1Controller');

Route::resource('p2debatec3m2s', 'P2debatec3m2Controller');

Route::resource('p3aulac1m1s', 'P3aulac1m1Controller');

Route::resource('p3aulac1m2s', 'P3aulac1m2Controller');

Route::resource('p3aulac2m2s', 'P3aulac2m2Controller');

Route::resource('p3aulac2m1s', 'P3aulac2m1Controller');

Route::resource('p3aulac3m1s', 'P3aulac3m1Controller');

Route::resource('p3aulac3m2s', 'P3aulac3m2Controller');

Route::resource('p3exercicioc1m1s', 'P3exercicioc1m1Controller');

Route::resource('p3exercicioc1m2s', 'P3exercicioc1m2Controller');

Route::resource('p3exercicioc2m2s', 'P3exercicioc2m2Controller');

Route::resource('p3exercicioc2m1s', 'P3exercicioc2m1Controller');

Route::resource('p3exercicioc3m1s', 'P3exercicioc3m1Controller');

Route::resource('p3exercicioc3m2s', 'P3exercicioc3m2Controller');

Route::resource('p3debatec1m1s', 'P3debatec1m1Controller');

Route::resource('p3debatec1m2s', 'P3debatec1m2Controller');

Route::resource('p3debatec2m2s', 'P3debatec2m2Controller');

Route::resource('p3debatec2m1s', 'P3debatec2m1Controller');

Route::resource('p3debatec3m1s', 'P3debatec3m1Controller');

Route::resource('p3debatec3m2s', 'P3debatec3m2Controller');

Route::resource('p4aulac1m1s', 'P4aulac1m1Controller');

Route::resource('p4aulac1m2s', 'P4aulac1m2Controller');

Route::resource('p4aulac2m2s', 'P4aulac2m2Controller');

Route::resource('p4aulac2m1s', 'P4aulac2m1Controller');

Route::resource('p4aulac3m1s', 'P4aulac3m1Controller');

Route::resource('p4aulac3m2s', 'P4aulac3m2Controller');

Route::resource('p4exercicioc1m1s', 'P4exercicioc1m1Controller');

Route::resource('p4exercicioc1m2s', 'P4exercicioc1m2Controller');

Route::resource('p4exercicioc2m2s', 'P4exercicioc2m2Controller');

Route::resource('p4exercicioc2m1s', 'P4exercicioc2m1Controller');

Route::resource('p4exercicioc3m1s', 'P4exercicioc3m1Controller');

Route::resource('p4exercicioc3m2s', 'P4exercicioc3m2Controller');

Route::resource('p4debatec1m1s', 'P4debatec1m1Controller');

Route::resource('p4debatec1m2s', 'P4debatec1m2Controller');

Route::resource('p4debatec2m2s', 'P4debatec2m2Controller');

Route::resource('p4debatec2m1s', 'P4debatec2m1Controller');

Route::resource('p4debatec3m1s', 'P4debatec3m1Controller');

Route::resource('p4debatec3m2s', 'P4debatec3m2Controller');

Route::resource('e1aulac1m1s', 'E1aulac1m1Controller');

Route::resource('e1aulac1m2s', 'E1aulac1m2Controller');

Route::resource('e1aulac2m2s', 'E1aulac2m2Controller');

Route::resource('e1aulac2m1s', 'E1aulac2m1Controller');

Route::resource('e1aulac3m1s', 'E1aulac3m1Controller');

Route::resource('e1aulac3m2s', 'E1aulac3m2Controller');

Route::resource('e1exercicioc1m1s', 'E1exercicioc1m1Controller');

Route::resource('e1exercicioc1m2s', 'E1exercicioc1m2Controller');

Route::resource('e1exercicioc2m2s', 'E1exercicioc2m2Controller');

Route::resource('e1exercicioc2m1s', 'E1exercicioc2m1Controller');

Route::resource('e1exercicioc3m1s', 'E1exercicioc3m1Controller');

Route::resource('e1exercicioc3m2s', 'E1exercicioc3m2Controller');

Route::resource('e1debatec1m1s', 'E1debatec1m1Controller');

Route::resource('e1debatec1m2s', 'E1debatec1m2Controller');

Route::resource('e1debatec2m2s', 'E1debatec2m2Controller');

Route::resource('e1debatec2m1s', 'E1debatec2m1Controller');

Route::resource('e1debatec3m1s', 'E1debatec3m1Controller');

Route::resource('e1debatec3m2s', 'E1debatec3m2Controller');

Route::resource('e2aulac1m1s', 'E2aulac1m1Controller');

Route::resource('e2aulac1m2s', 'E2aulac1m2Controller');

Route::resource('e2aulac2m2s', 'E2aulac2m2Controller');

Route::resource('e2aulac2m1s', 'E2aulac2m1Controller');

Route::resource('e2aulac3m1s', 'E2aulac3m1Controller');

Route::resource('e2aulac3m2s', 'E2aulac3m2Controller');

Route::resource('e2exercicioc1m1s', 'E2exercicioc1m1Controller');

Route::resource('e2exercicioc1m2s', 'E2exercicioc1m2Controller');

Route::resource('e2exercicioc2m2s', 'E2exercicioc2m2Controller');

Route::resource('e2exercicioc2m1s', 'E2exercicioc2m1Controller');

Route::resource('e2exercicioc3m1s', 'E2exercicioc3m1Controller');

Route::resource('e2exercicioc3m2s', 'E2exercicioc3m2Controller');

Route::resource('e2debatec1m1s', 'E2debatec1m1Controller');

Route::resource('e2debatec1m2s', 'E2debatec1m2Controller');

Route::resource('e2debatec2m2s', 'E2debatec2m2Controller');

Route::resource('e2debatec2m1s', 'E2debatec2m1Controller');

Route::resource('e2debatec3m1s', 'E2debatec3m1Controller');

Route::resource('e2debatec3m2s', 'E2debatec3m2Controller');

Route::resource('e3exercicioc1m1s', 'E3exercicioc1m1Controller');

Route::resource('e3exercicioc1m2s', 'E3exercicioc1m2Controller');

Route::resource('e3exercicioc2m2s', 'E3exercicioc2m2Controller');

Route::resource('e3exercicioc2m1s', 'E3exercicioc2m1Controller');

Route::resource('e3exercicioc3m1s', 'E3exercicioc3m1Controller');

Route::resource('e3exercicioc3m2s', 'E3exercicioc3m2Controller');

Route::resource('e3debatec1m1s', 'E3debatec1m1Controller');

Route::resource('e3debatec1m2s', 'E3debatec1m2Controller');

Route::resource('e3debatec2m2s', 'E3debatec2m2Controller');

Route::resource('e3debatec2m1s', 'E3debatec2m1Controller');

Route::resource('e3debatec3m1s', 'E3debatec3m1Controller');

Route::resource('e3debatec3m2s', 'E3debatec3m2Controller');

Route::resource('e3aulac1m1s', 'E3aulac1m1Controller');

Route::resource('e3aulac1m2s', 'E3aulac1m2Controller');

Route::resource('e3aulac2m2s', 'E3aulac2m2Controller');

Route::resource('e3aulac2m1s', 'E3aulac2m1Controller');

Route::resource('e3aulac3m1s', 'E3aulac3m1Controller');

Route::resource('e3aulac3m2s', 'E3aulac3m2Controller');

Route::resource('e4aulac1m1s', 'E4aulac1m1Controller');

Route::resource('e4aulac1m2s', 'E4aulac1m2Controller');

Route::resource('e4aulac2m2s', 'E4aulac2m2Controller');

Route::resource('e4aulac2m1s', 'E4aulac2m1Controller');

Route::resource('e4aulac3m1s', 'E4aulac3m1Controller');

Route::resource('e4aulac3m2s', 'E4aulac3m2Controller');

Route::resource('e4exercicioc1m1s', 'E4exercicioc1m1Controller');

Route::resource('e4exercicioc1m2s', 'E4exercicioc1m2Controller');

Route::resource('e4exercicioc2m2s', 'E4exercicioc2m2Controller');

Route::resource('e4exercicioc2m1s', 'E4exercicioc2m1Controller');

Route::resource('e4exercicioc3m1s', 'E4exercicioc3m1Controller');

Route::resource('e4exercicioc3m2s', 'E4exercicioc3m2Controller');

Route::resource('e4debatec1m1s', 'E4debatec1m1Controller');

Route::resource('e4debatec1m2s', 'E4debatec1m2Controller');

Route::resource('e4debatec2m2s', 'E4debatec2m2Controller');

Route::resource('e4debatec2m1s', 'E4debatec2m1Controller');

Route::resource('e4debatec3m1s', 'E4debatec3m1Controller');

Route::resource('e4debatec3m2s', 'E4debatec3m2Controller');