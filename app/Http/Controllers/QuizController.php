<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;



class QuizController extends Controller
{

    public function getCorrectAnswer(Request $request, Quiz $quiz, $pos) {
        $questions = $quiz->questions;
        foreach ($questions as $question) {
            if ($question->position == $pos){
                $quest = $question;
            }
        }
        return response()->json([
            "question" => $quest,
        ]);
    }
    public function quizzes() {
        $user = Auth::user();
        $quizzes =Quiz::where('user_id', 1)->orWhere('published_by_admin', '=', 1)->orderBy('created_at', 'ASC')->get();
        return view('home', ['quizzes'=>$quizzes, 'user'=>$user]);
    }

    public function quiz($quiz) {
        $quiz = Quiz::find($quiz);
        $positions = array();
        foreach ($quiz->questions as $question) {
            array_push($positions, $question->position);
        }
        if (count($positions) == 0){
            array_push($positions, 'error');
        }else{
            sort($positions);
        }
        
        return view('quiz', ['quiz'=>$quiz, 'positions'=>$positions]);
    }

    public function question(Quiz $quiz, $pos) {
        $correct_count = 0;
        $questions = $quiz->questions;
        $questions_amount = count($questions);
        $positions = array();
        foreach ($questions as $question) {
            if ($question->position == $pos){
                $quest = $question;
            }
        }

        foreach ($questions as $question) {
            array_push($positions, $question->position);
        
        }
        array_push($positions, 'test');
        sort($positions);
        return view('question', ['question'=>$quest, 'amount' => $questions_amount, 'positions'=>$positions]);
    }
    public function myQuizzes() {
        $user = Auth::user();
        if ($user->id == 1){
            $others_quizzes = Quiz::where('user_id', '!=', '1')->where('published_by_admin', '=', 0)->get();
        }
        else{
            $others_quizzes = [];
        }
        $myquizzes = $user->quizzes()->orderBy('created_at', 'desc')->get();
        return view('myquizzes', ['myquizzes'=>$myquizzes, 'user'=>$user, 'others_quizzes'=>$others_quizzes]);
    }

    public function publish(Request $request) {
        if ($request->input('publish') != "") {
            $quiz = Quiz::find($request->input('id'));
            $quiz->published_by_admin = $request->input('publish');
            $quiz->save();
        }
        return $this->quizzes();
        
    }


    public function createPage() {
        
        return view('create', ['user'=>Auth::user()]);
    }
    

    public function createQuiz(Request $request) {
        if ($request->input('quizadd') != ""){
            Quiz::create([
                "name"=> $request->input('name'),
                "path"=> $request->input('path'),
                "description"=> $request->input('description'),
                "user_id"=> $request->input('user_id'),
            ]);
      } 

        for ($i = 0; $i <= 10; $i++) {
            if ($i == 0){
                $k = '';
            }else{
                $k = $i;
            }
            if ($request->input('add'.$k) != ""){
                Question::create([
                    "question"=> $request->input('question'.$k),
                    "path"=> $request->input('path'.$k),
                    "answer1"=> $request->input('answer1'.$k),
                    "answer2"=> $request->input('answer2'.$k),
                    "answer3"=> $request->input('answer3'.$k),
                    "answer4"=> $request->input('answer4'.$k),
                    "correct_answer"=> $request->input('answer4'.$k),
                    "position"=> $request->input('position'.$k),
                    "quiz_id"=> $request->input('quiz_id'.$k),
                ]);
          }
        }
        
        return  $this->createPage();
    }
     public function admin() {
        $quizzes = Auth::user()->quizzes()->orderBy('created_at', 'desc')->get();
        return view('admin', ['quizzes'=>$quizzes, 'user'=>Auth::user()]);
    }

    public function addDeleteUpdate(Request $request) {
         if ($request->input('edit') != "") {
            $quiz = Quiz::find($request->input('edit'));
            $quiz->name = $request->input('title');
            $quiz->path = $request->input('path');
            $quiz->description = $request->input('description');
            $quiz->save();
            
        }
        else if ($request->input('add') != ""){
            Question::create([
                "question"=> $request->input('question'),
                "path"=> $request->input('path'),
                "answer1"=> $request->input('answer1'),
                "answer2"=> $request->input('answer2'),
                "answer3"=> $request->input('answer3'),
                "answer4"=> $request->input('answer4'),
                "correct_answer"=> $request->input('answer4'),
                "position"=> $request->input('position'),
                "quiz_id"=> $request->input('quiz_id'),
            ]);
      
        }
        else{
            $quiz = Quiz::where('id', '=', $request->input('delete'));
            Question::where('quiz_id', '=',$request->input('delete'))->delete();
            $quiz->delete();
            
        }
        return $this->admin();
    
    }
    public function questions($quiz) {
        $quiz = Auth::user()->quizzes()->find($quiz);
        return view('questions', ['questions'=>$quiz->questions]);
    }
    public function crudQuestions(Request $request) {
        if ($request->input('edit') != "") {
            $question = Question::find($request->input('edit'));
            $question->question = $request->question;
            $question->path = $request->path;
            $question->answer1 = $request->answer1;
            $question->answer2 = $request->answer2;
            $question->answer3 = $request->answer3;
            $question->answer4 = $request->answer4;
            $question->correct_answer = $request->correct_answer;
            $question->position = $request->position;
            $question->quiz_id = $request->quiz_id;
            $question->save();
            
        }
        else{
            $question = Question::find($request->input('delete'));
            $question->delete();


        }
        return $this->questions($question->quiz_id);
    }

    


}

