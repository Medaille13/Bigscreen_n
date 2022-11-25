@extends('administration.layout')
@section('content')
<h1 class="text-center">Liste des réponses pour {{$users->count()}}  sondés</h1>
<div>
  @if($users->isNotEmpty())
  @foreach($users as $user)
  @if($user->answers_with_question->isNotEmpty())
  <div class="lead bg-primary " style="display:inline-block">Sondé numéro : {{$loop->iteration  }}&nbsp</div>
  <table class="table table-striped mb-3 text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Question</th>
        <th scope="col">Réponse</th>
      </tr>
    </thead>
    <tbody>      
      @foreach($user->answers_with_question as $answer)
      <tr>
        <th scope="row">{{$answer->question->id}}</th>
        <td>{{$answer->question->titre}}</td>
        <td>{{$answer->reponse}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
  @endforeach
  @endif
</div>
@endsection