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
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api',  function  (Request $request)  {

    return response()->json(['Hello Laravel 6']);
  
});
Route::post('/app',  function  (Request $request)  {
    /* var_dump($request->all()); */
    /* dd(json_decode(file_get_contents('php://input'), true)); */
   /*  $data = json_decode(file_get_contents('php://input'), true);
    
    return response()->json($data); */
//  phpinfo();
//  die();
  $data = json_decode($request->getContent(), true) ;
  dd($data);
  die();
});

Route::post('/archivo',  function  (Request $request)  {
    /* var_dump($request->all()); */
    /* dd(json_decode(file_get_contents('php://input'), true)); */
   /*  $data = json_decode(file_get_contents('php://input'), true);
    
    return response()->json($data); */
//  phpinfo();
//  die();
 // $data['file'] = $request->file('myfile')->getClientOriginalName();
    // $data = $request->file('myfile')->getRealPath() ;
    $data;
    if ($request->get('myfile')) {
    //
        $data= $request->get('myfile');
        
    } else {
        $data = 'no llega archivo';
        
    }

  return response()->json($request->file('myfile')->getClientOriginalName());
});