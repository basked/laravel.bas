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


/*
 *тестирование
 * */
Route::get('/test', function () {

    //  передаём во вьюху
       $data=['id'=>1,'name'=>'Димон','nickname'=>'basket'];
       return view('test',$data);

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
    echo '</pre>';*/

});
Route::get('/comments',function(){
  return view("form");
});

Route::post('/comments',function(){
    print_r($_POST);
});
