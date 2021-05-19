<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador(){
        //mostrar formulario del metabuscador
        return view('metabuscador');
    }

    //servidor:llegan los datos
    public function buscar(){
        //1.almacenar los datos trasmitidos en respectivas variables
        $termino=$_POST["termino"];
        $motores=$_POST["Motores"];
        //2.determinar cual motor de busqueda fue el elegido
        switch($motores){
            case 1://redireccionar a google de busqueda
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 4:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5:
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 6:
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 7:
                return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                break;
            case 8:
                return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                break;
            case 9:
                return redirect()->to("https://swisscows.com/web?query=$termino");
                break;
            case 10:
                return redirect()->to("https://www.lukol.com/s.php?q=$termino");
                break;
        }
    }
}
