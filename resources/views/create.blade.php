
@extends("layout")

@section("body")

<a href="/myquizzes" class="btn btn-success">My Quizzes</a>
<a href="/" class="btn btn-success">Home</a>
<br>
<br>
<form method="post">
  @csrf
  <h2> Create Quiz</h2>
      <input type="text"  name='name' placeholder="name">
      <input type="text" name='path' placeholder="path">
      <input type="text" name='description' placeholder="description">
      <input type="hidden" name='user_id' value='{{$user->id}}' placeholder="user_id">
    <br>


    <button name='quizadd' value='1' class="btn btn-primary">Add Quiz</button>
  </form>

        <form id='id1' method='post'>
        <h4>question 1</h4>
        <ul>
         {{csrf_field()}}
          <input type="text"  name='question' placeholder="question">
          <input type="text" name='path' placeholder="path">
          <input type="text" name='answer1' placeholder="answer1">
          <input type="text" name='answer2' placeholder="answer2">
          <input type="text" name='answer3' placeholder="answer3">
          <input type="text" name='answer4' placeholder="answer4">
          <input type="text" name='correct_answer' placeholder="correct_answer">
          <input type="number" name='position' placeholder="position">
          <input type="number" name='quiz_id' placeholder="quiz_id">
          <button name='add' value='1' class="btn btn-secondary">Add question</button>
        </ul>
        
        </form>


<div id='genereator'>
  <label for="numDuplicates"> want more questions ?</label>
  <input type="text" id="numDuplicates" placeholder="Number of Questions">
  <button onclick="createFormCopies()">Create duplicates</button>
  
</div>


<script>
      function createFormCopies() {
        let numDuplicates = document.getElementById("numDuplicates").value;
        let originalForm = document.getElementById("id1");
        document.getElementById('genereator').style.display = 'none'
        let container = document.createElement("div");


    for (let i = 0; i < numDuplicates; i++) {

      let formCopy = originalForm.cloneNode(true);

      // update the form's id and name attributes
      formCopy.id = "id" + (i + 2);

      // update the h4 element
      let h4 = formCopy.getElementsByTagName("h4")[0];
      h4.textContent = "question " + (i + 2);

      // update the name attributes of the input elements
      
      let inputElements = formCopy.getElementsByTagName("input");
      inputElements[0].value = 'new_token';
      inputElements[1].name = "question" + (i + 1);
      inputElements[2].name = "path" + (i + 1);
      inputElements[3].name = "answer1" + (i + 1);
      inputElements[4].name = "answer2" + (i + 1);
      inputElements[5].name = "answer3" + (i + 1);
      inputElements[6].name = "answer4" + (i + 1);
      inputElements[7].name = "correct_answer" + (i + 1);
      inputElements[8].name =  (i + 1);
      inputElements[9].name = "quiz_id" + (i + 1);

      

      
      // update the value attribute of the button element
      let button = formCopy.getElementsByTagName("button")[0];
      button.name = 'add'+ (i + 1).toString();

      // add the copy to the container element
      container.appendChild(formCopy);
    }

    // add the container element to the DOM
    originalForm.parentNode.appendChild(container);
    }

</script>
  


<style>
  input{
    display:block;
  }
</style>
@endsection

