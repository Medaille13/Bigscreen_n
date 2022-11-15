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
  <main class="container-fluid text-center  vh-100">
    <div class="row h-100 ">
      <div class="col-2 sticky-top d-flex flex-column justify-content-center align-items-center h-100 bg-info">
        <div class="sticky-top">
          Menu        
          
          <a href="{{ route('logout') }}"
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
@include('administration.graphique.grapha')
  </div>
</main>
</body>
</html>