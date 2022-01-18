<?php

use App\Models\Character;
use App\Services\BreakingBadClient;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command("breakingbadinit", function( BreakingBadClient $api ) {

    $characters = $api->characters();

    
    $characters->map(function($character) {
        $x = new Character( $character->resolve() );
        $x->save();

        //might as well free the memory
        return null;
    });

})->purpose("init the database with breaking bad characters");