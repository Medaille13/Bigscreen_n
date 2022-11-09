
<html>
<div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Question</th>
      <th scope="col">Réponse</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $user)
@foreach($users as $user->answers_with_question)
@dump($user->toArray())
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->answers_with_question}}</td>
      
      <td>{{$user->type}}</td>
    </tr>
@endforeach
    @endforeach
  </tbody>
</table>
</div>
</html>