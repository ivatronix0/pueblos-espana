<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pueblo;


class APIController extends Controller
{
    public function index()
    {
        $datos = json_decode(file_get_contents(public_path('datos.json')), true);
        return view('welcome', ['datos' => $datos]);
    }


    public function foto(){

        $json = file_get_contents(storage_path('datos.json'));
        $datos = json_decode($json, true);

        if(is_null($datos)){
            return response()->json(['error' => "desgraciado"]);
        }
        foreach ($datos as &$imagenes) {
            $img = Http::get("https://en.wikipedia.org/w/api.php?action=query&formatversion=2&pilimit=3&piprop=thumbnail&prop=pageimages%7Cpageterms&redirects=&titles=" . $imagenes['Mun'] . "&wbptterms=description&format=json");
            $imgUrl = $img->json();
            if (!isset($imgUrl['query']['pages'][0]['thumbnail']['source'])) {
                $imagenes['Foto'] = 'tonto.jpg';
            } else {
                $imagenes['Foto'] = $imgUrl['query']['pages'][0]['thumbnail']['source'];
            }
        }

        $json_modificado = json_encode($datos);
        file_put_contents(storage_path('datos.json'), $json_modificado);

        foreach($datos as $dato){
            
            Pueblo::create([
                'Cod_mun' => $dato['Cod mun'],
            'Mun' => $dato['Mun'],
            'Codi_c' => $dato['Codi c'],
            'Comarca' => $dato['Comarca'],
            'Provincia' => $dato['Provincia'],
            'Descripcion' => $dato['Descripcion'],
            'Foto' => $dato['Foto']
            
            ]);
        }


            
    }
    }


