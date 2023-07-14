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

        //Open our CSV file using the fopen function.
        $fh = fopen("linhassjc.csv", "r");

        //Setup a PHP array to hold our CSV rows.
        $csvData = array();

        //Loop through the rows in our CSV file and add them to
        //the PHP array that we created above.
        while (($row = fgetcsv($fh, 0, ";")) !== FALSE) {
            //print_r($row);
            $csvData[] = ["itinerario"=>$row[0], "nomelinha"=>$row[1]];
            //$csvData[] = $row[0];
            // print_r($row);
            // 
        }

        //dd($csvData);

        foreach ($linha as $key => $linha) {
            $linha = new Linha;
            $linha->itinerario = $csvData[0];
            $linha->nomelinha = $csvData[1];
            //print_r($linha);
            //$linha->save();
            //dd($linha);
            dd($csvData);
            Linha::create($csvData);
        }



        //Finally, encode our array into a JSON string format so that we can print it out.
        //$code = json_encode($csvData);

    }
}
