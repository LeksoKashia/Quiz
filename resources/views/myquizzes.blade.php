@extends("layout")

@section("body")


<a href="/" class="btn btn-primary">Home</a>
<br>
<br>

<div style="display:flex;   gap: 100px;">

    @forelse ($myquizzes as $quiz)
    
    <div>

        <h2>{{$quiz->name}}</h2>
        <h3>{{count($quiz->questions)}} Questions</h3>
        <img src="{{$quiz->path}}" alt="">
        <br>
        <br>
        <a href="/quiz/{{$quiz->id}}" class="btn btn-info">More</a>
        
    </div>
    
    @empty
      <h1>No Quizzes found owned by user {{$user->name}}</h1>
    @endforelse

    
</div>


<br>
@if($user->id == 1)

<hr>
  <h1 class="text-primary">Publish(Admin Privilage) </h1>
  <div style="display:flex;   gap: 100px;">
  @forelse ($others_quizzes as $quiz)

  <form  method='POST'>
    @csrf

    <h3>{{$quiz->name}}</h3>
    <h3>{{count($quiz->questions)}} Questions</h3>
    <img src="{{$quiz->path}}" alt="">
    <br>
    <input type="hidden" name="id" value='{{$quiz->id}}'>
    <br>

    <button class='btn-primary' name="publish" value="1">Publish</button>


  </form>
  
  @empty
  <h4>No Quizzes found to publish</h4>
  @endforelse
</div>
      
      
   @endif


@endsection