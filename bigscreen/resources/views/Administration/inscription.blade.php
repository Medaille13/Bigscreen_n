<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/insconadmin.css') }}" >
    </head>
    <body>
        <div id="container">
            <!-- zone d'inscription' -->
            
            <form action={{ route("administrationinscription") }} method="POST">
                {{ csrf_field() }}
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>