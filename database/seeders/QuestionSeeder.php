<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            "question" => 'what is 13 squared',
            "path" => "https://images.slideplayer.com/12/3545838/slides/slide_43.jpg",
            "answer1" => '149',
            "answer2" => '123',
            "answer3" => '1234',
            "answer4" => '169',
            "correct_answer" => '169',
            "position" => 1,
            "quiz_id" => 1,
            
        ]);

        Question::create([
            "question" => 'Which is the smallest?',
            "path" => "https://media1.giphy.com/media/sbCdjSJEGghGM/giphy.gif?cid=ecf05e47eqojlf5ctaku4dj26f8vik6ldx67gpvzvp6fxg1j&rid=giphy.gif&ct=g",
            "answer1" => '-1',
            "answer2" => '-1/2',
            "answer3" => '0',
            "answer4" => '3',
            "correct_answer" => '-1',
            "position" => 2,
            "quiz_id" => 1,
            
        ]);

        Question::create([
            "question" => 'Combine terms: 12a + 26b -4b -16a.',
            "path" => "https://media1.giphy.com/media/3o7Osw5bFmCQhVVZuw/giphy.gif?cid=ecf05e474tqli0ca59j930c69we7v2x6y8v4crz8q27gj445&rid=giphy.gif&ct=g",
            "answer1" => '14b',
            "answer2" => '15a -17b',
            "answer3" => '-4a + 22b',
            "answer4" => '12',
            "correct_answer" => '-4a + 22b',
            "position" => 3,
            "quiz_id" => 1,
            
        ]);

        Question::create([
            "question" => 'how many muscles does human have?',
            "path" => "https://www.shoulder-pain-explained.com/images/shoulder-muscles-anatomy.jpg",
            "answer1" => '600',
            "answer2" => '234',
            "answer3" => '1233',
            "answer4" => '290',
            "correct_answer" => '600',
            "position" => 1,
            "quiz_id" => 2,
            
        ]);

        Question::create([
            "question" => 'Ordinary table salt is sodium chloride. What is baking soda?',
            "path" => "https://media0.giphy.com/media/qn2aKnoNSHUE8/giphy.gif?cid=ecf05e47ddwh1chnadfls1o9l43zco6urqyzuf87w64d858u&rid=giphy.gif&ct=g",
            "answer1" => 'Potassium chloride',
            "answer2" => 'Potassium carbonate',
            "answer3" => 'Potassium hydroxide',
            "answer4" => '	Sodium bicarbonate',
            "correct_answer" => 'Sodium bicarbonate',
            "position" => 2,
            "quiz_id" => 2,
            
        ]);

        Question::create([
            "question" => 'Ozone hole refers to',
            "path" => "https://media3.giphy.com/media/3o7ZeRIlDkvaDzEaAg/giphy.gif?cid=ecf05e471snsj6d3bu4fsbqpvs3zon9lohg5hzdv4bbs3jzk&rid=giphy.gif&ct=g",
            "answer1" => 'hole in ozone layer',
            "answer2" => '	decrease in the ozone layer in troposphere',
            "answer3" => 'decrease in thickness of ozone layer in stratosphere',
            "answer4" => 'increase in the thickness of ozone layer in troposphere',
            "correct_answer" => 'decrease in thickness of ozone layer in stratosphere',
            "position" => 3,
            "quiz_id" => 2,
            
        ]);

        Question::create([
            "question" => 'what is the most popular sport ?',
            "path" => "https://the18.com/sites/default/files/styles/x-large_square__4_3_/public/feature-images/20180728-The18-Image-Most-Popular-Sports2.jpg?itok=UYEQsB7Z",
            "answer1" => 'Football',
            "answer2" => 'Basketball',
            "answer3" => 'Swimming',
            "answer4" => 'Boxing',
            "correct_answer" => 'Football',
            "position" => 1,
            "quiz_id" => 3,
            
        ]);

        Question::create([
            "question" => 'who is Michael Phelps ?',
            "path" => "https://i.ytimg.com/vi/SmcaXxZLr8E/maxresdefault.jpg",
            "answer1" => 'Swimmer',
            "answer2" => 'footballer',
            "answer3" => 'boxer',
            "answer4" => 'tennis plalyer',
            "correct_answer" => 'Swimmer',
            "position" => 2,
            "quiz_id" => 3,
            
        ]);

        Question::create([
            "question" => 'who is the most decorated olympian? ',
            "path" => "https://stillmed.olympics.com/media/Images/News/General/olympic-flag-featured.jpg",
            "answer1" => 'Michael Phelps',
            "answer2" => 'Adam peaty',
            "answer3" => 'Ryan Lochte',
            "answer4" => 'Usain Bolt',
            "correct_answer" => 'Michael Phelps',
            "position" => 3,
            "quiz_id" => 3,
            
        ]);

        Question::create([
            "question" => 'what chess figure is shown on the page ?',
            "path" => "https://media.istockphoto.com/id/179645639/vector/black-and-white-chess-knight.jpg?s=612x612&w=0&k=20&c=D5rS51DB-7utWsjSyYHAVdzEoa0VC8cn9PtPteaB8ZU=",
            "answer1" => 'Rook',
            "answer2" => 'Knight',
            "answer3" => 'Queen',
            "answer4" => 'Bishop',
            "correct_answer" => 'Knight',
            "position" => 123,
            "quiz_id" => 4,
            
        ]);

        Question::create([
            "question" => 'what beverage is the most alchoholic ?',
            "path" => "https://images.delightedcooking.com/liquor-bottles.jpg",
            "answer1" => 'Polmos Spirytus Rektyfikowany Vodka',
            "answer2" => 'Beer',
            "answer3" => 'Whiskey',
            "answer4" => 'Champanage',
            "correct_answer" => 'Polmos Spirytus Rektyfikowany Vodka',
            "position" => 1202,
            "quiz_id" => 5,
            
        ]);
    }
}
