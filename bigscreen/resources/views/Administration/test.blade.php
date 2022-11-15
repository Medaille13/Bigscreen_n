<div>
  @foreach($users as $user)
  <table class="table table-striped">
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
  @endforeach