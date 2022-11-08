<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage</title>
</head>
<body>
<h1 align="center">Sondage {{(!is_null($user)?$user->email:'bigscreen')}}</h1>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[0]->titre}}</label>
                       <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[1]->titre}}</label>
                        <p></p>
                    </div>               

                    <div class="custom-control custom-radio mt-3">
                        <label for="exampleFormControlInput1">{{$quest[2]->titre}}</label><br>
                        <p></p>
                    </div>

                    <div class="form-group mt-3" >
                        <label for="exampleFormControlSelect2">{{$quest[3]->titre}}</label>
                      <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[4]->titre}}</label>
                       <p></p>
                    </div>

                    <div class="custom-control custom-radio mt-3">
                        <label for="exampleFormControlInput1">{{$quest[5]->titre}}</label><br>
                     <p></p>
                    </div>


                    <div class="custom-control custom-radio mt-3">
                        <label for="exampleFormControlInput1">{{$quest[6]->titre}}</label><br>
                      <p></p>
                    </div>


                    <div class="custom-control custom-radio mt-3">
                        <label for="exampleFormControlInput1">{{$quest[7]->titre}}</label><br>
                      <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="foyercasque">{{$quest[8]->titre}}</label>
                    <p></p>
                    </div>

                    <div class="custom-control custom-radio mt-3">
                        <label for="utilisationBs">{{$quest[9]->titre}}</label><br>
                        <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="qualite">{{$quest[10]->titre}}</label>
                     <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="confort">{{$quest[11]->titre}}</label>
                     <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="connexion">{{$quest[12]->titre}}</label>
                    <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="dimension">{{$quest[13]->titre}}</label>
                     <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="graphismes">{{$quest[14]->titre}}</label>
                      <p></p>
                    </div>

                    <div class="custom-control custom-radio mt-3">
                        <label for="notif">{{$quest[15]->titre}}</label><br>
                       <p></p>
                    </div>
                    <div class="custom-control custom-radio mt-3">
                        <label for="rejoindre">{{$quest[16]->titre}}</label><br>
                 <p></p>
                    </div>
                    <div class="custom-control custom-radio">
                        <label for="enregistrer">{{$quest[17]->titre}}</label><br>
                       <p></p>
                    </div>
                    <div class="custom-control custom-radio mt-3">
                        <label for="exclusifs">{{$quest[18]->titre}}</label><br>
                        <p></p>
                    </div>

                    <div class="form-group mt-3">
                        <label for="reve">{{$quest[19]->titre}}</label>
                        <p></p>
                    </div>       
                </form> 
            </div>
        </div>
    </div>

</body>
</html>