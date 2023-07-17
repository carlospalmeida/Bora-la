<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Linha;

class Linhascontroller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function insertlinhas(Linha $linha)
    {


        $fh = fopen("linhassjc.csv", "r");


        $csvData = array();


        while (($row = fgetcsv($fh, 0, ";")) !== FALSE) {
            $csvData[] = $row;
        }

        //dd($csvData);

        foreach ($csvData as $dado) {
            $linha = new Linha;
            $linha->itinerario = $dado[0];
            $linha->nomelinha = $dado[1];
            $linha->save();
        }
    }

    // mostrar linhas do banco
    public function read()
    {
        $linhas = Linha::get();

        $dados = [
            'linhas' => $linhas
        ];

        return view('linhas', $dados);

    }
    public function read2()
    {
        $linhas2 = Linha::get();

        $dados2 = [
            'linhas2' => $linhas2
        ];

        return view('caminho', $dados2);

    }
}
