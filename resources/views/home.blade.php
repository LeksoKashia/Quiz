@extends("layout")

@section("body")

    @auth
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        <a href="/myquizzes" class="btn btn-primary">My Quizzes</a>
        <a href="/createquiz" class="btn btn-primary">Create Quiz</a>
        <a href="/admin" class="btn btn-primary">{{Auth::user()->name}}</a>

    @endauth
    <br>
    <br>
    <br>

    <h1>Published Quizzes</h1>
    <br>

<div style="display:flex;   gap: 100px;">

    

    @forelse ($quizzes as $quiz)
    
    <div>

        <h2>{{$quiz->name}}</h2>
        <h3>{{count($quiz->questions)}} Questions</h3>
        <img src="{{$quiz->path}}" alt="">
        <br>
        <br>
        <a href="/quiz/{{$quiz->id}}" class="btn btn-info">More</a>
        
    </div>
    
    @empty
      <p>No quizzes found</p>
    @endforelse
    
</div>




@endsection