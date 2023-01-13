<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        public function run(){

            #admin
            \App\Models\User::create([
                'name' => 'Leksena',
                'email' => 'leqsokashia1234@gmail.com',
                'password' => bcrypt('123'),
            ]);
            
            \App\Models\User::create([
                'name' => 'vako',
                'email' => 'vako@vako.com',
                'password' => bcrypt('123'),
            ]);
            
            $this->call([
                QuizSeeder::class,
                QuestionSeeder::class,
            ]);
    }


}
