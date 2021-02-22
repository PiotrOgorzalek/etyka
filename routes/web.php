<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

//Route::get ('test',function(){
  //  return view('test');
//});

//Route::get('/',function(){
  //  return view('test',[
    //    'name'=> request('name')
    //]);
//});
//simulating data base
/*Route::get('/posts/{post}',function($post){
   $posts =[
    'my_first_post' => 'Hellooooo that is me one',
    'my_second_post' => 'Now I am gettign hang of this'

   ];
   if (! array_key_exists($post,$posts)){
       abort(404,'Sorry that post was not found');
   }
   return view('post',[
      'post' =>  $posts[$post]
   ]);
});*/
Route::get('/', [MainController::class, 'showStart']);
//Route::get('/',function(){
 // return view('index');
//});