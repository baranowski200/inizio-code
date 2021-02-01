<?php


namespace App\Http\Controllers;

use App\Models\Historie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mtownsend\XmlToArray\XmlToArray;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sniffres(Request $request)
    {


        $ARESurl = "http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_std.cgi?ico=".$request->ico;

        $xmlString = file_get_contents($ARESurl);
        $xmlObject = simplexml_load_string($xmlString);

        $json = json_encode($xmlString);
        $phpArray = json_decode($json, true);

        $array = XmlToArray::convert($phpArray);

        $pocet_zaznamu = ($array["are:Odpoved"]["are:Pocet_zaznamu"]);

        if ($pocet_zaznamu == 0) {

        } else {
            $vyhledano_dle = ($array["are:Odpoved"]["are:Zaznam"]["are:Vyhledano_dle"]);
            $ico = ($array["are:Odpoved"]["are:Zaznam"]["are:ICO"]);
            $jmeno = ($array["are:Odpoved"]["are:Zaznam"]["are:Obchodni_firma"]);
            $vznik = ($array["are:Odpoved"]["are:Zaznam"]["are:Datum_vzniku"]);
            $platnost = ($array["are:Odpoved"]["are:Zaznam"]["are:Datum_platnosti"]);

            $adresa = ($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:Nazev_ulice"]).' '.($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:Cislo_domovni"]).', '.($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:Nazev_casti_obce"]).' '.($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:Nazev_obce"]).' - '.($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:PSC"]);
            $okres = ($array["are:Odpoved"]["are:Zaznam"]["are:Identifikace"]["are:Adresa_ARES"]["dtt:Nazev_okresu"]);
        };


        if ($pocet_zaznamu == 0) {
            $passer = array(
                "pocet_zaznamu" => "$pocet_zaznamu",
                "request" => "$request->ico"
            );

            $history = new Historie;
            $history->request = $request->ico;
            $history->save();

        } else {
            $passer = array(
                "pocet_zaznamu" => "$pocet_zaznamu",
                "vyhledano_dle" => "$vyhledano_dle",
                "ico" => "$ico",
                "jmeno" => "$jmeno",
                "vznik" => "$vznik",
                "platnost" => "$platnost",
                "adresa" => "$adresa",
                "okres" => "$okres",
                "request" => "$request->ico"
            );

            $history = new Historie;
            $history->request = $request->ico;
            $history->ico = $ico;
            $history->jmeno = $jmeno;
            $history->vznik = $vznik;
            $history->platnost = $platnost;
            $history->adresa = $adresa;
            $history->okres = $okres;
            $history->save();
        };
//
        return view('sniff.result')->with('passer', $passer);

    }
}
