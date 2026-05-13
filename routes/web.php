<?php

use App\Models\Feature;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('policy', function () {
    $feature = Feature::first();
    // can you do it  ?
    if(!auth()->user()->can('update', $feature)){
        abort(403);
    }
    $feature->update(
        [
            'name' => 'Updated Feature Name',
        ]
    );
    echo  $feature->name;

})->name('policy');
