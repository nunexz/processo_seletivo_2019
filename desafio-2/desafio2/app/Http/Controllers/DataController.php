<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function noticiasAction($page = null)
    {
        $url = "http://www.marcha.cnm.org.br/webservice/noticias";

        if (isset($_GET['filtro']) && $_GET['filtro']) {
            $filtro = $_GET['filtro'];
            $url = "http://www.marcha.cnm.org.br/webservice/noticias?pesquisa={$filtro}";
        }

        if ($page) {
            $url = "http://www.marcha.cnm.org.br/webservice/noticias?page={$page}";
        }
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $response = $response->getBody()->getContents();
        $arrReponse = json_decode($response);
        $noticias = [];
        if (isset($arrReponse->noticias)) {
            $noticias = $arrReponse->noticias;
            foreach ($noticias as $noticia) {
                $noticia->texto = substr($noticia->texto, 0, 300);
            }
        }

        return view('noticias')->with('noticias', $noticias);
    }
}
