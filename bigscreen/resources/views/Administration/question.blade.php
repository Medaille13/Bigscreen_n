@extends('administration.layout')
@section('content')
<h1>Liste des questions du sondage</h1>   
<div>  
  <table class="table table-striped mb-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Question</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach($questions as $question)
      <tr>
        <th scope="row">{{$question->id}}</th>
        <td>{{$question->titre}}</td>
        <td>{{$question->type->libelle}}</td>
      </tr>
      @endforeach      
    </tbody>
  </table>
</div>
@endsection
