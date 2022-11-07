<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage {{(!is_null($user)?$user->url:'')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    @if(session('success'))
    <p>{{session('success')}}</p>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('envoisondage')}}" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[0]->titre}}</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mail">
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[1]->titre}}</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="age">
                    </div>               

                    <div class="custom-control custom-radio">
                        <label for="exampleFormControlInput1">{{$quest[2]->titre}}</label><br>
                        <input type="radio" id="customRadio1" name="sexe" class="custom-control-input" value="{{$choice[0]->reponse}}">
                        <label class="custom-control-label" for="customRadio1" >{{$choice[0]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="sexe" class="custom-control-input" value="{{$choice[1]->reponse}}">
                        <label class="custom-control-label" for="customRadio2">{{$choice[1]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="sexe" class="custom-control-input" value="{{$choice[2]->reponse}}">
                        <label class="custom-control-label" for="customRadio3" >{{$choice[2]->reponse}}</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">{{$quest[3]->titre}}</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="foyer">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{$quest[4]->titre}}</label>
                        <input type="text" class="form-control" id="profession" placeholder="" name="profession">
                    </div>

                    <div class="custom-control custom-radio">
                        <label for="exampleFormControlInput1">{{$quest[5]->titre}}</label><br>
                        <input type="radio" id="Occulus" name="MarqueCasqueUtilise" class="custom-control-input" value="{{$choice[8]->reponse}}" checked>
                        <label class="custom-control-label" for="Occulus">{{$choice[8]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="HTC" name="MarqueCasqueUtilise" class="custom-control-input" value="{{$choice[9]->reponse}}" checked>
                        <label class="custom-control-label" for="HTC" >{{$choice[9]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Windows mixed" name="MarqueCasqueUtilise" class="custom-control-input" value="{{$choice[10]->reponse}}" checked>
                        <label class="custom-control-label" for="Windows mixed">{{$choice[10]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="PSVR" name="MarqueCasqueUtilise" class="custom-control-input" value="{{$choice[11]->reponse}}" checked>
                        <label class="custom-control-label" for="PSVR" >{{$choice[11]->reponse}}</label>
                    </div>


                    <div class="custom-control custom-radio">
                        <label for="exampleFormControlInput1">{{$quest[6]->titre}}</label><br>
                        <input type="radio" id="SteamVR" name="MagasinAppli" class="custom-control-input" value="{{$choice[12]->reponse}}">
                        <label class="custom-control-label" for="SteamVR">{{$choice[12]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Occulus store" name="MagasinAppli" class="custom-control-input" value="{{$choice[13]->reponse}}">
                        <label class="custom-control-label" for="Occulus store" >{{$choice[13]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Viveport" name="MagasinAppli" class="custom-control-input" value="{{$choice[14]->reponse}}">
                        <label class="custom-control-label" for="Viveport" >{{$choice[14]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="PlaystationVR" name="MagasinAppli" class="custom-control-input" value="{{$choice[15]->reponse}}">
                        <label class="custom-control-label" for="PlaystationVR" >{{$choice[15]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="GooglePlay" name="MagasinAppli" class="custom-control-input" value="{{$choice[16]->reponse}}">
                        <label class="custom-control-label" for="GooglePlay">{{$choice[16]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Windowsstore" name="MagasinAppli" class="custom-control-input" value="{{$choice[17]->reponse}}">
                        <label class="custom-control-label" for="Windowsstore">{{$choice[17]->reponse}}</label>
                    </div>


                    <div class="custom-control custom-radio">
                        <label for="exampleFormControlInput1">{{$quest[7]->titre}}</label><br>
                        <input type="radio" id="OcculusQuest" name="CasqueAchat" class="custom-control-input" value="{{$choice[18]->reponse}}">
                        <label class="custom-control-label" for="OcculusQuest" >{{$choice[18]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="OcculusGo" name="CasqueAchat" class="custom-control-input" value="{{$choice[19]->reponse}}">
                        <label class="custom-control-label" for="OcculusGo">{{$choice[19]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="HTCVivePro" name="CasqueAchat" class="custom-control-input" value="{{$choice[20]->reponse}}">
                        <label class="custom-control-label" for="HTCVivePro" >{{$choice[20]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Autre" name="CasqueAchat" class="custom-control-input" value="{{$choice[21]->reponse}}">
                        <label class="custom-control-label" for="Autre">{{$choice[21]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="Aucun" name="CasqueAchat" class="custom-control-input" value="{{$choice[22]->reponse}}">
                        <label class="custom-control-label" for="Aucun">{{$choice[22]->reponse}}</label>
                    </div>

                    <div class="form-group">
                        <label for="foyercasque">{{$quest[8]->titre}}</label>
                        <select class="form-control" id="foyercasque" name="foyercasque">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>


                    <div class="custom-control custom-radio">
                        <label for="utilisationBs">{{$quest[9]->titre}}</label><br>
                        <input type="radio" id="tv" name="utilise" class="custom-control-input" value="{{$choice[23]->reponse}}">
                        <label class="custom-control-label" for="tv">{{$choice[23]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="films" name="utilise" class="custom-control-input" value="{{$choice[24]->reponse}}">
                        <label class="custom-control-label" for="films">{{$choice[24]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="solo" name="utilise" class="custom-control-input" value="{{$choice[25]->reponse}}">
                        <label class="custom-control-label" for="solo">{{$choice[25]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="team" name="utilise" class="custom-control-input" value="{{$choice[26]->reponse}}" >
                        <label class="custom-control-label" for="team">{{$choice[26]->reponse}}</label>
                    </div>


                    <div class="form-group">
                        <label for="qualite">{{$quest[10]->titre}}</label>
                        <select class="form-control" id="qualite" name="qualite">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="confort">{{$quest[11]->titre}}</label>
                        <select class="form-control" id="confort" name="confort">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="connexion">{{$quest[12]->titre}}</label>
                        <select class="form-control" id="connexion" name="connexion">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dimension">{{$quest[13]->titre}}</label>
                        <select class="form-control" id="dimension" name="dimension">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="graphismes">{{$quest[14]->titre}}</label>
                        <select class="form-control" id="graphismes" name="graphismes">
                            <option value="{{$choice[3]->reponse}}">{{$choice[3]->reponse}}</option>
                            <option value="{{$choice[4]->reponse}}">{{$choice[4]->reponse}}</option>
                            <option value="{{$choice[5]->reponse}}">{{$choice[5]->reponse}}</option>
                            <option value="{{$choice[6]->reponse}}">{{$choice[6]->reponse}}</option>
                            <option value="{{$choice[7]->reponse}}">{{$choice[7]->reponse}}</option>
                        </select>
                    </div>
                    <div class="custom-control custom-radio">
                        <label for="notif">{{$quest[15]->titre}}</label><br>
                        <input type="radio" id="notifoui" name="notifouinon" class="custom-control-input" value="{{$choice[27]->reponse}}">
                        <label class="custom-control-label" for="notifoui">{{$choice[27]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="notifnon" name="notifouinon" class="custom-control-input" value="{{$choice[28]->reponse}}">
                        <label class="custom-control-label" for="notifnon">{{$choice[28]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <label for="rejoindre">{{$quest[16]->titre}}</label><br>
                        <input type="radio" id="rejoindreoui" name="rejoindreouinon" class="custom-control-input" value="{{$choice[27]->reponse}}">
                        <label class="custom-control-label" for="rejoindreoui">{{$choice[27]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="rejoindrenon" name="rejoindreouinon" class="custom-control-input" value="{{$choice[28]->reponse}}">
                        <label class="custom-control-label" for="rejoindrenon">{{$choice[28]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <label for="enregistrer">{{$quest[17]->titre}}</label><br>
                        <input type="radio" id="enregistreroui" name="enregistrerouinon" class="custom-control-input" value="{{$choice[27]->reponse}}">
                        <label class="custom-control-label" for="enregistreroui">{{$choice[27]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="enregistrernon" name="enregistrerouinon" class="custom-control-input" value="{{$choice[28]->reponse}}">
                        <label class="custom-control-label" for="enregistrernon">{{$choice[28]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <label for="exclusifs">{{$quest[18]->titre}}</label><br>
                        <input type="radio" id="exclusifsoui" name="exclusifsouinon" class="custom-control-input" value="{{$choice[27]->reponse}}">
                        <label class="custom-control-label" for="exclusifsoui">{{$choice[27]->reponse}}</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="exclusifsnon" name="exclusifsouinon" class="custom-control-input"value="{{$choice[28]->reponse}}">
                        <label class="custom-control-label" for="exclusifsnon">{{$choice[28]->reponse}}</label>
                    </div>
                    <div class="form-group mt-3">
                        <label for="reve">{{$quest[19]->titre}}</label>
                        <input type="text" class="form-control" id="reve" placeholder="" name="reve">
                    </div>   
                    <div>
                    <button type="submit" class="btn btn-primary">Valider</button>  

                    </div>    
                </form> 
            </div>
        </div>
    </div>
    
</body>
</html>