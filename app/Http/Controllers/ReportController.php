<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function __invoke()
    {
        // $dom = new DOMDocument;
        // libxml_use_internal_errors(true);
        // $dom->loadHTML();
        // $dom->loadXML(file_get_contents('C:\Users\Marlon\Desktop\teste56.xml'));
        // libxml_clear_errors();
        // $links = $dom->getElementsByTagName('h1');
        // foreach ($links as $link) {
        //     var_dump('ds');
        // }


        $html = "<html><body><p>This is ItSolutionStuff.com Example 1</p><p>This is ItSolutionStuff.com Example 2</p></body></html>"; //Http::get('https://www.idinheiro.com.br/calculadoras/calculadora-juros-compostos/');
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        $p = $dom->createElement('<p>');
        $p->
        $dom->appendChild($p);
        libxml_clear_errors();
        dd($dom);
       
        // return $html;
    }
}
