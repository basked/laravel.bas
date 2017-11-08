<?php
//use App\Task;
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

Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');




Route::get('/', function () {
    return view('welcome');
});


/*
 *тестирование
 * */
//Route::get('/tasks', function () {
// запрос из БД
//  $tasks= DB::table('tasks')->latest('id')->get();
// обычный массив
/* $tasks =['basket','teksab','last move crew'];*/
//  передаём во вьюху ассоциативный массив
/*$tasks=['id'=>1,'name'=>'Димон','nickname'=>'basket'];*/
//      return view('tasks.index',compact('tasks'));
//JSON return $tasks;

// глобальные настройки
/*   echo '<pre>';
   print_r($_ENV);
   echo '</pre>';
 */

// обращение к настройкам через функцию
/*  echo '<pre>';
  echo config('app.timezone','Europe/Minsk');
  echo '<br>';
  echo config('session.table','session.table');
  echo '<br>';
  echo config('mail.sendmail','mail.sendmail');
  echo '</pre>';
*/
// обращение к настройкам через фасад
/* echo '<pre>';
 echo Config::get('app.timezone', 'Europe/Minsk');
 //изменим значение (в файле настроек оно не меняется)
 Config::set('app.timezone', 'Europe/Moscow');
 echo '<br>';
 echo Config::get('app.timezone', 'Europe/Minsk');
 echo '<br>';
 echo Config::get('session.table', 'session.table');
 echo '<br>';
 echo Config::get('mail.sendmail', 'mail.sendmail');
 echo '</pre>';

});*/
/*
 * Коментируем потому что вынесли логику в контроллер
// показать все задачи
Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->latest('id')->get();
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

// показать одеу задачу
Route::get('tasks/{task}', function ($id) {
   // $task = DB::table('tasks')->find($id);
    $task = Task::find($id);
    return view('tasks.show', compact('task'));
});
*/
/* передача пост данных*/
Route::get('/comments', function () {
    return view("form");
});

Route::post('/comments', function () {
    print_r($_POST);
});
