@extends("layout")

@section("body")


<h1>User: {{$quiz->user->name}}</h1>
<h2>Name: {{$quiz->name}} Quiz</h2>
<ul>

    <li><h3> {{count($quiz->questions)}} questions </h3></li>
    <li><h3>Description: {{$quiz->description}} </h3></li>
    <li><img src="{{$quiz->path}}" alt=""></li>
    
    

</ul>

<a href="/quiz/{{$quiz->id}}/1" class="btn btn-primary" id='button'>Start</a>
<h1 id='countdown'>3</h1>



<script>



    document.getElementById('button').addEventListener('click', function(event) {
        document.getElementById('countdown').style.display = 'block';
        event.preventDefault();
        setTimeout(function() {
            window.location = 'http://127.0.0.1:8000/quiz/{{$quiz->id}}/{{$positions[0]}}';
        }, 3000);

        var timer = 3;
        var interval = setInterval(function() {
            timer--;
            document.getElementById('countdown').innerHTML = timer;
            if (timer == 0) {
                document.getElementById('countdown').innerHTML = 3;
                document.getElementById('countdown').style.display = 'none';
                clearInterval(interval);
                window.location = 'http://127.0.0.1:8000/quiz/{{$quiz->id}}/{{$positions[0]}}';
            }
            
        }, 1000);
    });
</script>



<style>
    #countdown {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 200px;
    height: 200px;
    display: none;
}

</style>

@endsection