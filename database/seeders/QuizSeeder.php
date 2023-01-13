<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Quiz::create([
            "name" => 'Maths',
            "path" => "https://media0.giphy.com/media/1kD0eWa4O5dRlya9eo/giphy.gif?cid=ecf05e47c57umup274y8csq9fyk5sxg9tr6w5o372vankuuk&rid=giphy.gif&ct=g",
            "description" => 'This is an easy maths quiz',
            "user_id" => 1,
            
        ]);

        Quiz::create([
            "name" => 'Biology',
            "path" => "https://media3.giphy.com/media/3o7TKz2eMXx7dn95FS/giphy.gif?cid=ecf05e47xqt0unck65pxwa21c05qfdogylxaxa26mpkdfltz&rid=giphy.gif&ct=g",
            "description" => 'This is an easy biology quiz',
            "user_id" => 1,
            
        ]);

        Quiz::create([
            "name" => 'Sports',
            "path" => "https://media4.giphy.com/media/3o6Mblm3wZ0UdGFrk4/giphy.gif?cid=ecf05e47mr89w87rjsyov8ye33taxyjuxa2zecl6ytqxarlk&rid=giphy.gif&ct=g",
            "description" => 'This is an easy sports quiz',
            "user_id" => 1,
            
        ]);

        Quiz::create([
            "name" => 'Chess',
            "path" => "https://media4.giphy.com/media/X38nID9sioLzHQnkj6/giphy.gif?cid=ecf05e47560j7a007p8im7aftkxywwccis9bto3ll0el16oo&rid=giphy.gif&ct=g",
            "description" => 'This is an easy chess quiz',
            "user_id" => 2,
            
        ]);

        Quiz::create([
            "name" => 'Beverages',
            "path" => "https://media1.giphy.com/media/3o7TKSBzGgLqMSeICI/giphy.gif?cid=ecf05e47twqvn9ewim65qdxzo5tjo0v7of4n8u0ufyh8aylw&rid=giphy.gif&ct=g",
            "description" => 'This is an easy beverages quiz',
            "user_id" => 2,
            
        ]);
    }
}
