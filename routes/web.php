<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;

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

Route::get("/", [QuizController::class, "quizzes"])->name("main");
Route::get("/quiz/{quiz}", [QuizController::class, "quiz"]);
Route::get("/quiz/{quiz}/error", function () {
    return view('error');
});
Route::get("/quiz/{quiz}/{pos}", [QuizController::class, "question"]);


Route::get('/login', [AuthController::class, "loginPage"])->name("login");
Route::post("/login", [AuthController::class, "login"]);

Route::get('/register', [AuthController::class, "registerPage"])->name("register");
Route::post("/register", [AuthController::class, "register"]);

Route::middleware("auth")->get('/logout', [AuthController::class, "logout"])->name("logout");

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get("/myquizzes", [QuizController::class, "myQuizzes"]);
    Route::post("/myquizzes", [QuizController::class, "publish"]);
    Route::get("/createquiz", [QuizController::class, "createPage"]);
    Route::post("/createquiz", [QuizController::class, "createQuiz"]);
    Route::get("/admin", [QuizController::class, "admin"]);
    Route::post("/admin", [QuizController::class, "addDeleteUpdate"]);
    Route::get("/admin/{quiz}/questions", [QuizController::class, "questions"]);
    Route::post("/admin/{quiz}/questions", [QuizController::class, "crudQuestions"]);

}); 