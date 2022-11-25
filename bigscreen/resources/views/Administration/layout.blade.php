<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <title>Page d'accueil de la partie administration</title>
</head>
<body>
  <main class="container-fluid ">
    <div class="row"> 
        <div class="col-2 d-flex flex-column justify-content-top align-items-center bg-info text-center">
          <div class="position-sticky top-0 pt-5">
            <img class="img-fluid" src={{asset('img/bigscreen.jpg')}}>  
            <a class="link-light d-block p-2" href="{{route('administrationaccueil')}}">Revenir à l'accueil</a> 
            <a class="link-light d-block p-2" href="{{route('recuperationquestion')}}">Questionnaire</a>  
            <a class="link-light d-block p-2" href="{{route('recupetout')}}">Reponses</a>
            <a class="link-light d-block p-2" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Log Out') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST"
          style="display: none;">
          @csrf
        </form>
      </div>    
    </div>
    <div class="col h-100 py-4">
      @yield('content')
    </div>  
  </div>    
</main>
@yield('scripts')
</body>
</html>

