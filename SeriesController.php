<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    // ao inves de public function index() escrever public function index(Request $request) para obter mais informacoes da requisicao
    public function index(Request $request)
    {

        // return $request->method();   GET

        // return $request->url();   CAMINHO

        // return $request->get('id'); retorna parametro da request


        // return retorna json do array

        $series=[
           'Punisher',
           'Lost9',
           'Suits'
        ];

        /*  INFORMAR NA VIEW EVITAR HTML NO CONTROLLER
        $html = '<ul>';
        foreach($series as $serie){
            $html .="<li>$serie</li>";
        }


        $html .= '</ul>';
        */


        // echo $html;

        // return $html; // nao colocar echo e sim return fica mais facil encontrar um erro no metodo

        // return response('',302,['location'=>'https://google.com']);

        // return redirect('https://google.com');

        // return view('listar-series',['series' => $series]);   O MESMO QUE O ABAIXO

        // return view('listar-series',compact('series'));

        return view('listar-series')->with('series',$series);
    }
}
