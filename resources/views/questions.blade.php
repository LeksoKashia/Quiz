@extends("layout")

@section("body")

<a href="/admin" class="btn btn-primary">{{Auth::user()->name}}</a>
<br>
<br>

<h1>Edit or Delete questions</h1>
<br>
<div style="display:flex; gap:30px">
@forelse ($questions as $question)


  <form method='POST'>
    <h1>{{$question->position}} question</h1>
    @csrf
    <br>
    <tbody>
      <tr>
        
        <td><input id='first' type="text"  name='question' value='{{$question->question}}'placeholder="question"></td>
        <label for="first"><h2>name</h2></label>
        <td><input id='second' type="text"  name='path' value='{{$question->path}}'placeholder="question"></td>
        <label for="second"><h2>path</h2></label>
        <td><input id='third' type="text"  name='answer1' value='{{$question->answer1}}'placeholder="question"></td>
        <label for="third"><h2>first answer</h2></label>
        <td><input id='fourth' type="text"  name='answer2' value='{{$question->answer2}}'placeholder="question"></td>
        <label for="fourth"><h2>second answer</h2></label>
        <td><input id='fifth' type="text"  name='answer3' value='{{$question->answer3}}'placeholder="question"></td>
        <label for="fifth"><h2>third answer</h2></label>
        <td><input id='sixth' type="text"  name='answer4' value='{{$question->answer4}}'placeholder="question"></td>
        <label for="sixth"><h2>fouth answer</h2></label>
        <td><input id='seventh' type="text"  name='correct_answer'value='{{$question->correct_answer}}' placeholder="question"></td>
        <label for="seventh"><h2>correct answer</h2></label>
        <td><input id='eighth' type="text"  name='position' value='{{$question->position}}'placeholder="question"></td>
        <label for="eighth"><h2>position</h2></label>
        <td><input id='ninth' type="hidden"  name='quiz_id' value='{{$question->quiz_id}}'placeholder="question"></td>
        <label for="ninth"><h2>quiz id</h2></label>
        <br>
        <td><button style='width:100%'class='btn-primary'name="edit" value="{{$question->id}}">Edit</button></td>
        <br>
        <td><button style='width:100%' class='btn-danger'name="delete" value="{{$question->id}}">Delete</button></td>

      </tr>
    </form>
    @empty
    <h1>No questions found</h1>
  @endforelse




  


</div>


  <style>
    #first:hover + label,
    #second:hover + label,
    #third:hover + label,
    #fourth:hover + label,
    #fifth:hover + label,
    #sixth:hover + label,
    #seventh:hover + label,
    #eighth:hover + label,
    #ninth:hover + label {
    display: block;
    }

    label{
    display:none;
    }

    input{
    display:block;
    }





  </style>
@endsection