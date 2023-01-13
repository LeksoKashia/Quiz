@extends("layout")

@section("body")

<a href="/" class="btn btn-primary">Home</a>
<br>
<br>
<table class="table">
  <h1>Edit or Delete Quizzes</h1>
  <thead>
    <tr>

      <th>name</th>
      <th>path</th>
      <th>description</th>
    </tr>
  </thead>
  @forelse ($quizzes as $quiz)
  <form  method='POST'>
    @csrf
    <tbody>
      <tr>

        <td><input type="text" name='title' value='{{$quiz->name}}'></td>
        <td><input type="text" name='path' value='{{$quiz->path}}'></td>
        <td><input type="text" name='description'value='{{$quiz->description}}'></td>
        <td><button class='btn-primary'name="edit" value="{{$quiz->id}}">Edit</button></td>
        <td><button class='btn-danger'name="delete" value="{{$quiz->id}}">Delete</button></td>
        <td>
          <a href="/admin/{{$quiz->id}}/questions" class="btn btn-info">Questions</a>
        </td>
          
      </tr>
    </form>
    @empty
    <h1>No Quizzes found</h1>
  @endforelse


</table>

<hr>


<form method='post'>
<h4>Add Question</h4>
<ul>
  @csrf

  <input id='block' type="text"  name='question' placeholder="question">
  <input id='block' type="text" name='path' placeholder="path">
  <input id='block' type="text" name='answer1' placeholder="answer1">
  <input id='block' type="text" name='answer2' placeholder="answer2">
  <input id='block' type="text" name='answer3' placeholder="answer3">
  <input id='block' type="text" name='answer4' placeholder="answer4">
  <input id='block' type="text" name='correct_answer' placeholder="correct_answer">
  <input id='block' type="number" name='position' placeholder="position">
  <input id='block' type="number" name='quiz_id' placeholder="quiz_id">
  <button name='add' value='1' class="btn btn-secondary">Add question</button>
</ul>

</form> 

<style>
  #block{
    display:block;
  }

  

</style>


@endsection