<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sondage</title>
</head>
<body>
    <h1 align="center">Sondage {{(!is_null($user)?$user->email:'bigscreen')}}</h1>
    @foreach($questions as $question)
    @foreach($user->answers as $answer)
    @if($question->id == $answer->question_id)
    <div class="container">
        <div class="row">
            <form action="{{route('envoisondage')}}" method="POST">
                <div class="form-group mt-3">
                    <label >{{$question->titre}}</label><br>
                    <label class="alert alert-info">{{$answer->reponse}}</label>
                </div>
            </form> 
            @endif   
            @endforeach
            @endforeach
        </body>
        </html>