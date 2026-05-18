<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Models\Project;
use App\Models\Contact;

Route::get('/', function () {
    $projects = Project::all();

    return view('welcome', compact('projects'));
});

Route::get('/projects/{id}', function ($id) {
    $project = Project::findOrFail($id);

    return view('project-detail', compact('project'));
});

Route::post('/contact', function (Request $request) {
    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Message sent successfully!');
})->name('contact.store');

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});