@extends("layout")

@section("body")

<div id='disappear'>
  <h2>Questions: {{array_search($question->position, $positions)+1}}/{{$amount}}</h2>
  <form>
    <h1 style="display:inline-block">{{$question->question}}</h1>
    <img src="{{$question->path}}" alt="">
    <br>
    
    <label><input type="checkbox" id="answer1" value="{{$question->answer1}}">{{$question->answer1}}</label><br>
    <label><input type="checkbox" id="answer2" value="{{$question->answer2}}">{{$question->answer2}}</label><br>
    <label><input type="checkbox" id="answer3" value="{{$question->answer3}}">{{$question->answer3}}</label><br>
    <label><input type="checkbox" id="answer4" value="{{$question->answer4}}">{{$question->answer4}}</label><br>
  </form>
  
  
  <a href="/quiz/{{$question->quiz_id}}/{{$positions[array_search($question->position, $positions)+1]}}" class="btn btn-primary" onclick="checkStatus()" id='button'>Next</a>
  
</div>

<div id='answer'>

</div>

<h1 id='finish' style="display:none"> </h1>
<a href="/" class="btn btn-success" style="display:none" id='home'>Check other quizzes</a>




<script>
    let corrects = 0;
    let all = {{$amount}}
    let answer;
    function checkStatus() {
      var checkboxes = document.querySelectorAll('input[type=checkbox]');
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          answer = checkboxes[i].value;
        }
      }
    }

      window.onload = function () {
        document.getElementById('button').addEventListener('click', function(event) {
          if ({{array_search($question->position, $positions)+1}} == {{$amount}}){
            event.preventDefault();
          
            // if (answer == {{$question->correct_answer}}){
            //   corrects++;
            // }
            corrects += 1;
            document.getElementById('disappear').style.display = 'none';
            document.getElementById('finish').innerHTML += 'Finished';
            document.getElementById('finish').innerHTML += `<h1>${corrects}/${all} questions </h1>`;
            document.getElementById('finish').style.display = 'block';
            document.getElementById('home').style.display = 'inline';
            
          }else{
          event.preventDefault();
          setTimeout(function() {
              window.location = 'http://127.0.0.1:8000/quiz/{{$question->quiz_id}}/{{$positions[array_search($question->position, $positions)+1]}}';
          }, 3000);
              fetch('http://127.0.0.1:8000/api/quiz/{{$question->quiz_id}}/{{$positions[array_search($question->position, $positions)]}}')
              .then(response =>{
                    return response.json();
                }).then(data =>{
                    console.log(data);
                    let rootDiv = document.getElementById('answer');
                    if (answer == data.question.correct_answer){
                      rootDiv.innerHTML += `<h1 style="color:green"> correct </h1>`
                    }else{
                      rootDiv.innerHTML += `<h1 style="color:red"> incorrect </h1>`
                    }
                    
          
          })

        }
    

      })
}



          
</script>
@endsection




{{-- @extends("layout")

@section("body")

<div id='disappear'>

  <h2>Questions: {{$question->position}}/{{$amount}}</h2>
  <form>
    <h1 style="display:inline-block">{{$question->question}}</h1>
    <img src="{{$question->path}}" alt="">
    <br>
    
    <label><input type="checkbox" id="answer1" value="{{$question->answer1}}">{{$question->answer1}}</label><br>
    <label><input type="checkbox" id="answer2" value="{{$question->answer2}}">{{$question->answer2}}</label><br>
    <label><input type="checkbox" id="answer3" value="{{$question->answer3}}">{{$question->answer3}}</label><br>
    <label><input type="checkbox" id="answer4" value="{{$question->answer4}}">{{$question->answer4}}</label><br>
  </form>
  
  
  <a href="/quiz/{{$question->quiz_id}}/{{$question->position+1}}" class="btn btn-primary" onclick="checkStatus()" id='button'>Next</a>
  
</div>

<div id='answer'>

</div>

<h1 id='finish' style="display:none"> </h1>
<a href="/" class="btn btn-success" style="display:none" id='home'>Check other quizzes</a>




<script>
    let corrects = 0;
    let all = {{$amount}}
    let answer;
    function checkStatus() {
      var checkboxes = document.querySelectorAll('input[type=checkbox]');
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          answer = checkboxes[i].value;
        }
      }
    }

      window.onload = function () {
        document.getElementById('button').addEventListener('click', function(event) {
          if ({{$question->position+1}} > {{$amount}}){
            event.preventDefault();
          
            // if (answer == {{$question->correct_answer}}){
            //   corrects++;
            // }
            corrects += 1;
            document.getElementById('disappear').style.display = 'none';
            document.getElementById('finish').innerHTML += 'Finished';
            document.getElementById('finish').innerHTML += `<h1>${corrects}/${all} questions </h1>`;
            document.getElementById('finish').style.display = 'block';
            document.getElementById('home').style.display = 'inline';
            
          }else{
          event.preventDefault();
          setTimeout(function() {
              window.location = 'http://127.0.0.1:8000/quiz/{{$question->quiz_id}}/{{$question->position+1}}';
          }, 3000);
              fetch('http://127.0.0.1:8000/api/quiz/{{$question->quiz_id}}/{{$question->position}}')
              .then(response =>{
                    return response.json();
                }).then(data =>{
                    console.log(data);
                    let rootDiv = document.getElementById('answer');
                    if (answer == data.question.correct_answer){
                      rootDiv.innerHTML += `<h1 style="color:green"> correct </h1>`
                    }else{
                      rootDiv.innerHTML += `<h1 style="color:red"> incorrect </h1>`
                    }
                    
          
          })

        }
    

      })
}



          

      // document.getElementById('button').addEventListener('click', function(event) {
        
      // });
</script>
@endsection --}}