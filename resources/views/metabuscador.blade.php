<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />"
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title></title>
</head>
<body>
    <form class="form-horizontal"
            method="POST"
            action="{{url('buscar')}}">
            @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Buscador en diferentes motores de busqueda</legend></center><br>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Termino">1. Ingrese el termino a buscar</label>
          <div class="col-md-4">
          <input id="Termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Motores">2. Seleccione el motor de busqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="Motores-0">
              <input type="radio" name="Motores" id="Motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="Motores-1">
              <input type="radio" name="Motores" id="Motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
                <label for="Motores-1">
                  <input type="radio" name="Motores" id="Motores-1" value="3">
                  Duck Duck Go
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="4">
                      Yahoo
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="5">
                        Yandex
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="6">
                        Ecosia
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="7">
                        Wolframalpha
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="8">
                        Qwant
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="9">
                        Swisscows
                </label>
                </div>
            <div class="radio">
                <label for="Motores-1">
                    <input type="radio" name="Motores" id="Motores-1" value="10">
                        Lukol
                </label>
                 </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
            </div>
          </div>

        </fieldset>
        </form>
</body>
</html>
