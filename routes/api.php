<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectApiController;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/projects", [ProjectApiController::class, "projectsIndex"]);

Route :: get('/projects/{id}', [ProjectApiController :: class, 'projectShow']);

Route :: get('/types', [ProjectApiController :: class, 'getTypes']);

Route :: get('/technologies', [ProjectApiController :: class, 'getTechnologies']);

