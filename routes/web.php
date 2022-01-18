<?php

use App\Http\Controllers\CharacterController;
use App\Models\Character;
use App\Services\BreakingBadClient;
use Illuminate\Support\Facades\Route;

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
Route::get('/test', function( BreakingBadClient $api) {
    /**
     * wtf?
     * Argument 1 passed to Symfony\Component\HttpFoundation\Response::setContent() must be of the type string or null, object given, called in C:\xampp\htdocs\vendor\laravel\framework\src\Illuminate\Http\Response.php on line 72
     * $characters = Character::where('char_id', '=', '1');
     */
    $characters = $api->characters();

    
    $characters->map(function($character) {

        
        $x = new Character( $character->resolve() );
        $x->save();
    });
    $characters = Character::all();
    return $characters;


});

Route::resource('/character', CharacterController::class);

Route::get('/', function () {
    return view('welcome');
});

