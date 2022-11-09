<html>
<div>
@foreach($questions as $question)
@dump($questions);
        @if($question->id == $answer->question_id)
          <label >{{$question->id}}</label><br>
          <label >{{$question->titre}}</label><br>
          <label >{{$question->type}}</label> 
        @endif   
@endforeach
    @dd($allquestions->toArray())
  
</div>
</html>